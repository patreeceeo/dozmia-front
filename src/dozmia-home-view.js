!(function (dozmia, Masonry) {
  "use strict";

  dozmia.HomeView = dozmia.BaseView.extend({
    html: function () {
      return "<div class=\"dozmia-album-art-wall\">"+this._generateRandomArtMarkup()+"</div>";
    },
    afterRender: function () {
      var msnry, $artWall;
      $artWall = this.$(".dozmia-album-art-wall");

      msnry = new Masonry($artWall[0], {
        columnWidth: 90,
        itemSelector: ".dozmia-album-art"
      });
    },
    _generateRandomArtMarkup: function () {
      var totalWidth, totalHeight, nTiles;
      totalWidth = window.screen.width || 1920;
      totalHeight = window.screen.height || 1080;
      nTiles = (totalWidth * totalHeight) / (90 * 90);
      return dozmia.u.times(nTiles, function () {
        var size;
        size = dozmia.u.random(1);
        if(size === 0) {
          return "<div class=\"dozmia-album-art\"></div>";
        } else {
          return "<div class=\"dozmia-album-art dozmia-album-art--half\"></div>";
        }
      }).join("");
    }
  });

})(this.dozmia, this.Masonry);
