!(function (dozmia) {
  "use strict";
  dozmia.HomeView = dozmia.BaseView.extend({
    template: "home",
    afterRender: function () {
      var self = this;
      setTimeout(function () {
        self.transitionIn();
      }, 1);
    },
    transitionIn: function () {
      this.$(".dozmia-transition--scale")
        .removeClass("dozmia-transition-in");
    },
    transitionOut: function () {
      this.$(".dozmia-transition--scale")
        .addClass("dozmia-transition-out");
    }
  });
})(this.dozmia);
