!(function (dozmia) {
  "use strict";

  dozmia.MasterView = dozmia.BaseView.extend({
    template: "master",
    events: {
      "click button.js-sign-up": function () {
        if(!/\?/.test(window.location.href)) {
          window.location.href += "?modal=sign-up";
        }
      }
    },
    showPage: function (pageName) {
      var self = this;
      dozmia.u.ajax({
        method: "GET",
        url: "page.php?page="+pageName
      }).success(function (pageContent) {
        self.$("#page-container").html(pageContent);
      }).error(function () {
        self.$("#page-container").html("Error: Couldn't fetch content for "+self.pageName);
      });
    }
  });

})(this.dozmia);
