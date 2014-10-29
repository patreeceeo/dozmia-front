!(function (dozmia) {
  "use strict";
  dozmia.SearchSignUpLoginView = dozmia.BaseView.extend({
    template: "search-sign-up-login",
    afterRender: function () {
      var self = this;
      setTimeout(function () {
        self.$(".dozmia-transition--scale")
        .removeClass("dozmia-transition-init");
      }, 1);
    }
  });
})(this.dozmia);
