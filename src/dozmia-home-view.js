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
      return this;
    },
    transitionOut: function (callback) {
      var self = this;
      this.$(".dozmia-transition--scale")
        .addClass("dozmia-transition-out");
      callback && setTimeout(function () {
        callback.call(self);   
      }, 500);
      return this;
    }
  });
})(this.dozmia);
