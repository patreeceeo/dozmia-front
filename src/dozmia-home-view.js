!(function (dozmia) {
  "use strict";
  dozmia.HomeView = dozmia.BaseView.extend({
    initialize: function (options) {
      this._super("initialize", options);
      this.playerModel = options.playerModel;
      this.listenTo(this.playerModel, "start", this.showPlayer);
    },
    template: "home",
    templateData: function () {
       return this.playerModel.toJSON();
    },
    afterRender: function () {
      var self = this;
      setTimeout(function () {
        self.transitionIn();
      }, 1);
    },
    transitionIn: function () {
      var $el = this.$(".dozmia-transition--scale");
      $el.removeClass("dozmia-transition-in-start");
      setTimeout(function () {
        $el.removeClass("dozmia-transition-in");
      }, 550);
      return this;
    },
    transitionOut: function (callback) {
      var $el, self = this;
      $el = $(".dozmia-transition--scale")
        .addClass("dozmia-transition-out");
      callback && setTimeout(function () {
        callback.call(self);   
      }, 500);
      return this;
    },
    showPlayer: function () {
       this.$("#dozmia-player").removeClass("dozmia-transition-out-end");
    },
    hidePlayer: function () {
       this.$("#dozmia-player").addClass("dozmia-transition-out-end");
    }
  });
})(this.dozmia);
