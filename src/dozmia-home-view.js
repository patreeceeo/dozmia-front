!(function (dozmia, Masonry) {
  "use strict";

  dozmia.HomeView = dozmia.BaseView.extend({
    template: "home",
    afterRender: function () {
      var msnry, $artWall;
      $artWall = this.$(".dozmia-album-art-wall");

      $artWall.html(this._generateRandomArtMarkup());
      msnry = new Masonry($artWall[0], {
        columnWidth: 50,
        itemSelector: ".dozmia-album-art"
      });
    },
    _generateRandomArtMarkup: function () {
      return dozmia.u.times(500, function () {
        var size;
        size = dozmia.u.random(1);
        if(size === 0) {
          return "<div class=\"dozmia-album-art\"></div>";
        } else {
          return "<div class=\"dozmia-album-art size-double\"></div>";
        }
      });
    }
  });

})(this.dozmia, this.Masonry);
