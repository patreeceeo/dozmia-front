!(function (dozmia) {
  "use strict";

  dozmia.ModalView = dozmia.BaseView.extend({
    html: function () {
       return "<div class=\"dozmia-modal\" id=\"modal-content-container\">"+
          "Hi, I'm an empty modal!"+
          "</div>";
    },
    events: {
      "click #modal-content-container": function (e) {
        e.stopPropagation(); 
      },
      "click": function () {
        window.location.href = window.location.href.replace(/\??modal=([^&]+)&?/, "");
      }
    }
  });
})(this.dozmia);
