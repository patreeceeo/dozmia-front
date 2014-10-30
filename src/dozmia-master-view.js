!(function (dozmia) {
  "use strict";

  dozmia.MasterView = dozmia.BaseView.extend({
    template: "master",
    events: {
      "click button.js-sign-up": function () {
        if(!/modal=/.test(window.location.href)) {
          window.location.href += "?modal=sign-up";
        }
      },
      "click button.js-login": function () {
        if(!/modal=/.test(window.location.href)) {
          window.location.href += "?modal=login";
        }
      }
    },
    showPage: function (pageName) {
      var self = this;
      if(this.showingPage !== pageName && pageName != null) {
        this.render();
        this.$("#loading-overlay").show();
        dozmia.u.ajax({
          method: "GET",
          url: "page.php?page="+pageName
        }).success(function (pageContent) {
          self.$("#page-container").html(pageContent);
          dozmia.overflowScollFix();
        }).error(function () {
          self.$("#page-container").html("Error: Couldn't fetch content for "+self.pageName);
        }).done(function () {
          self.$("#loading-overlay").hide();
        });
      }
      this.showingPage = pageName;
    }
  });

})(this.dozmia);
