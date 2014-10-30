this.dozmia = {};

!(function (dozmia, Backbone, $, _, Handlebars) {
  "use strict";

  dozmia.u = _;

  dozmia.u.ajax = Backbone.ajax;

  dozmia.log = {
    error: function () {
      var args = Array.prototype.slice.call(arguments);
      window.console.error.apply(window.console, args);
      throw new Error(args.join(" "));
    }
  };

  dozmia.ResourceManager = function (opts) {
    this.factory = opts.factory;
    this.resources = {};
  };

  dozmia.ResourceManager.prototype.request = function (name) {
    var args = Array.prototype.slice.call(arguments, 1);
    return this.resources[name] || (this.resources[name] = this.factory[name].apply(this, args)); 
  };

  dozmia.rman = new dozmia.ResourceManager({
    factory: {
      "home-view": function () {
        return new dozmia.HomeView({
          playerModel: dozmia.player,
          el: "#dozmia-container",
          children: {
            "#dozmia-album-art-wall-container": new dozmia.AlbumArtWallView(),
            "#dozmia-player": new dozmia.PlayerView()
          }
        });
      },
      "master-view": function () {
        var view;
        view = new dozmia.MasterView({
          el: "#dozmia-container",
          children: {
            "#dozmia-player": new dozmia.PlayerView()
          }
        });
        return view;
      },
      "modal-view": function () {
        var view;
        view = new dozmia.ModalView({
          el: "#modal-container"
        });
        return view;
      }
    }
  });

  dozmia.player = new (Backbone.Model.extend({
    defaults: {
      playingSong: false
    },
    playSong: function (songInfo) {
      this.set("playingSong", songInfo);
      this.trigger("start", songInfo);
    }
  }))();

  dozmia.MainRouter = Backbone.Router.extend({
    routes: {
      "(/)": "home",
      ":page?modal=:modal": "modalOverlay",
      "home": "home",
      "signup": "homeSignUp",
      "thanks": "homeSignUpThanks",
      ":page(/)": "otherPage"
    },
    home: function () {
      dozmia.rman.request("modal-view").$el.hide();
      dozmia.rman.request("home-view").transitionOut(function () {
        this.assignChild(new dozmia.SearchSignUpLoginView(), "#dozmia-cta-container");
        this.render();
      });
    },
    homeSignUp: function () {
      dozmia.rman.request("modal-view").$el.hide();
      dozmia.rman.request("home-view").transitionOut(function () {
        this.assignChild(new dozmia.HomeSignUpView(), "#dozmia-cta-container");
        this.render();
      });
    },
    homeSignUpThanks: function () {
      dozmia.rman.request("modal-view").$el.hide();
      dozmia.rman.request("home-view").transitionOut(function () {
        this.assignChild(new dozmia.HomeSignUpThanksView(), "#dozmia-cta-container");
        this.render();
      });
    },
    modalOverlay: function (pageName, modalName) {
      var ContentView, modalView;

      switch(modalName) {
        case "sign-up":
          ContentView = dozmia.SignUpView;
          break;
        case "login":
          ContentView = dozmia.LoginView;
          break;
      }

      dozmia.rman.request("master-view").showPage(pageName);
      modalView = dozmia.rman.request("modal-view").render();

      if(ContentView == null) {
        dozmia.log.error("The requested modal does not exist.");
      } else {
        modalView.assignChild(new ContentView(), "#modal-content-container");
      }

      modalView.render().$el.show();
    },
    otherPage: function (pageName) {
      dozmia.rman.request("master-view").render().showPage(pageName);
      dozmia.rman.request("modal-view").$el.hide();
    }
  });

  dozmia.BaseView = Backbone.View.extend({
    _super: function (method) {
      var args = Array.prototype.slice.call(arguments, 1);
      return this.constructor.__super__[method].apply(this, args);
    },
    initialize: function (options) {
      options = options || {};
      this.children = options.children || {}; 
    },
    render: function () {
      this.$el.html(this.html());
      _.each(this.children, this.assignChild, this);
      if(typeof this.afterRender === "function") {
        this.afterRender.apply(this, arguments);
      }
      return this;
    },
    html: function () {
      var source, template, data;
      source = $("#"+this.template+"-template").html();
      template = Handlebars.compile(source);
      if(typeof this.templateData == "function") {
        data = this.templateData();
      } else {
        data = this.templateData || {};
      }
      return template(data);
    },
    assignChild: function (view, selector) {
      // NOTE: if the app is going to be regularly adding and removing views to the DOM
      // you may want to help prevent memory leaks by cleaning up the resources of child
      // views when a view is removed.
      if(this.children[selector] != null) {
        this.children[selector].remove();
        this.children[selector] = null;
      }
      view.setElement(this.$(selector)).render();
      this.children[selector] = this.children[selector] || view;
      return this;
    }
  });

  $(function () {
    new dozmia.MainRouter();

    Backbone.history.start();
  });

})(this.dozmia, this.Backbone, this.$, this._, this.Handlebars);
