!(function (dozmia, Masonry) {
  "use strict";

  dozmia.AlbumArtWallView = dozmia.BaseView.extend({
    initialize: function () {
      this.totalWidth = window.screen.width || 1920;
      this.totalHeight = window.screen.height || 1080;
      this.nTiles = 40;
      this.tileWidth = Math.sqrt((this.totalWidth * this.totalHeight) / this.nTiles) / 1.5;
    },
    html: function () {
      return "<div class=\"dozmia-album-art-wall\">"+this._generateRandomArtMarkup()+"</div>";
    },
    afterRender: function () {
      var msnry, $artWall;
      $artWall = this.$(".dozmia-album-art-wall");

      $artWall
        .width(this.totalWidth)
        .height(this.totalHeight);
      $(".dozmia-album-art:not(.dozmia-album-art--half)")
        .width(this.tileWidth * 2)
        .height(this.tileWidth * 2);
      $(".dozmia-album-art.dozmia-album-art--half")
        .width(this.tileWidth)
        .height(this.tileWidth);
      msnry = new Masonry($artWall[0], {
        columnWidth: this.tileWidth,
        itemSelector: ".dozmia-album-art"
      });
    },
    _generateRandomArtMarkup: function () {
      var layout = dozmia.u.random(1);
      return dozmia.u.times(this.nTiles, function (index) {
        var size;
        size = (index + layout) % 2;
        if(size === 0) {
          return "<div class=\"dozmia-album-art\"></div>";
        } else {
          return "<div class=\"dozmia-album-art dozmia-album-art--half\"></div>"+
                 "<div class=\"dozmia-album-art dozmia-album-art--half\"></div>"+
                 "<div class=\"dozmia-album-art dozmia-album-art--half\"></div>";
        }
      }).join("");
    }
  });

})(this.dozmia, this.Masonry);
