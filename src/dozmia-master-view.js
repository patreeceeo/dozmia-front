!(function (dozmia) {
  "use strict";

  dozmia.MasterView = dozmia.BaseView.extend({
    initialize: function (options) {
      this.showPage = options.showPage; 
    },
    template: "master",
    afterRender: function () {
      var self = this;
      dozmia.u.ajax({
        method: "GET",
        url: "page.php?page="+this.showPage
      }).success(function (pageContent) {
        self.$("#page-container").html(pageContent);
      }).error(function () {
        self.$("#page-container").html("Error: Couldn't fetch content for "+self.showPage);
      });
    }
  });

})(this.dozmia);
