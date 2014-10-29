!(function (dozmia) {
  "use strict";

  dozmia.HomeSignUpThanksView = dozmia.BaseView.extend({
    template: "home-sign-up-thanks",
    afterRender: function () {
      var self = this;
      setTimeout(function () {
        self.$(".dozmia-transition--scale")
        .removeClass("dozmia-transition-init");
      }, 1);
    }
  });
})(this.dozmia);
