this.dozmia = {};

!(function (dozmia, Backbone, $, _, Handlebars) {
  "use strict";

  dozmia.u = _;

  dozmia.u.ajax = Backbone.ajax;

  dozmia.ResourceManager = function (opts) {
    this.factory = opts.factory;
    this.resources = {};
  };

  dozmia.ResourceManager.prototype.request = function (name) {
    var args = Array.prototype.slice.call(arguments, 1);
    return this.resources[name] || (this.resources[name] = this.factory[name](args)); 
  };

  dozmia.rman = new dozmia.ResourceManager({
    factory: {
      "master-view": function () {
        var view;
        view = new dozmia.MasterView({
          el: "#dozmia-container"
        });
        if(view.$el.children().length === 0) {
          view.render();
        }
        return view;
      },
      "modal-view": function () {
        var view;
        view = new dozmia.ModalView({
          el: "#dozmia-modal-container"
        });
        if(view.$el.children().length === 0) {
          view.render();
        }
        return view;
      }
    }
  });

  dozmia.MainRouter = Backbone.Router.extend({
    routes: {
      "(/)": "home",
      ":page?modal=sign-up": "signUp",
      ":page(/)": "otherPage"
    },
    home: function () {
      var view = new dozmia.HomeView({
        el: "#dozmia-container"
      });
      view.render();
    },
    signUp: function (pageName) {
      dozmia.rman.request("master-view").showPage(pageName);
      dozmia.rman.request("modal-view").$el.show();
    },
    otherPage: function (pageName) {
      dozmia.rman.request("master-view").showPage(pageName);
      dozmia.rman.request("modal-view").$el.hide();
    }
  });

  dozmia.BaseView = Backbone.View.extend({
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
    }
  });

  $(function () {
    new dozmia.MainRouter();

    Backbone.history.start();
  });

})(this.dozmia, this.Backbone, this.$, this._, this.Handlebars);
