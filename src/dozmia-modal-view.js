!(function (dozmia) {
  "use strict";

  dozmia.ModalView = dozmia.BaseView.extend({
    html: function () {
       return "<div class=\"modal-overlay\"></div>";
    }
  });
})(this.dozmia);
