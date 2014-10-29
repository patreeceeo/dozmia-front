!(function (dozmia) {
  "use strict";
  dozmia.HomeView = dozmia.BaseView.extend({
    template: "home",
    afterRender: function () {
      var self = this;
      setTimeout(function () {
        self.children["#dozmia-cta-container"].$(".dozmia-transition--scale")
        .removeClass("dozmia-transition-init");
      }, 1);
    }
  });
})(this.dozmia);
