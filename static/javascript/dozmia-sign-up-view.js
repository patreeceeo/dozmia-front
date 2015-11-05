!(function (dozmia) {
  "use strict";

  dozmia.SignUpView = dozmia.BaseView.extend({
    initialize: function (options) {
      this._super("initialize"); 
      this.options = options;
    },
    template: "sign-up",
    templateData: function () {
      return this.options;
    }
  });
})(this.dozmia);
