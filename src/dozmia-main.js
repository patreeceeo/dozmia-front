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
        var view = new dozmia.HomeView({
          el: "#dozmia-container",
          children: {
            "#dozmia-album-art-wall-container": new dozmia.AlbumArtWallView(),
            "#dozmia-cta-container": new dozmia.SearchSignUpLoginView()
          }
        });
        return view;
      },
      "home-sign-up-view": function () {
        var view = new dozmia.HomeView({
          el: "#dozmia-container",
          children: {
            "#dozmia-album-art-wall-container": new dozmia.AlbumArtWallView(),
            "#dozmia-cta-container": new dozmia.HomeSignUpView()
          }
        });
        return view;
      },
      "home-sign-up-thanks-view": function () {
        var view = new dozmia.HomeView({
          el: "#dozmia-container",
          children: {
            "#dozmia-album-art-wall-container": new dozmia.AlbumArtWallView(),
            "#dozmia-cta-container": new dozmia.HomeSignUpThanksView()
          }
        });
        return view;
      },
      "master-view": function () {
        var view;
        view = new dozmia.MasterView({
          el: "#dozmia-container"
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
      dozmia.rman.request("home-view").render();
    },
    homeSignUp: function () {
      dozmia.rman.request("modal-view").$el.hide();
      dozmia.rman.request("home-sign-up-view").render();
    },
    homeSignUpThanks: function () {
      dozmia.rman.request("modal-view").$el.hide();
      dozmia.rman.request("home-sign-up-thanks-view").render();
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

      modalView.$el.show();
    },
    otherPage: function (pageName) {
      dozmia.rman.request("master-view").render().showPage(pageName);
      dozmia.rman.request("modal-view").$el.hide();
    }
  });

  dozmia.BaseView = Backbone.View.extend({
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
      var source = $("#"+this.template+"-template").html();
      var template = Handlebars.compile(source);
      return template();
    },
    assignChild: function (view, selector) {
      // NOTE: if the app is going to be regularly adding and removing views to the DOM
      // you may want to help prevent memory leaks by cleaning up the resources of child
      // views when a view is removed.
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
