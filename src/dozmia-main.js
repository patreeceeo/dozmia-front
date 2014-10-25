this.dozmia = {};

!(function (dozmia, Backbone, $, _, Handlebars) {
  "use strict";

  dozmia.u = _;

  dozmia.MainRouter = Backbone.Router.extend({
    routes: {
      "": "home"
    },
    home: function () {
      var view = new dozmia.HomeView({
        el: "#dozmia-container"
      });
      view.render();
    }
  });

  dozmia.BaseView = Backbone.View.extend({
    render: function () {
      this.$el.html(this.html());
      _.each(this.children, this.assignChild, this);
      if(typeof this.afterRender === "function") {
        this.afterRender.apply(this, arguments);
      }
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