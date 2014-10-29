!(function (dozmia) {
  "use strict";

  dozmia.HomeSignUpView = dozmia.BaseView.extend({
    template: "home-sign-up",
    afterRender: function () {
      var self = this;
      setTimeout(function () {
        self.$(".dozmia-transition--scale")
        .removeClass("dozmia-transition-init");
      }, 1);
    }
  });
})(this.dozmia);
