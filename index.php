<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Dozmia</title>

  <link rel="stylesheet" href="lib/reset.css">
  <link rel="stylesheet" href="src/util.css">
  <link rel="stylesheet" href="src/dozmia.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="lib/jquery-2.1.1.js"></script>
  <script type="text/javascript" src="lib/underscore.js"></script>
  <script type="text/javascript" src="lib/backbone.js"></script>
  <script type="text/javascript" src="lib/handlebars-v2.0.0.js"></script>
  <!-- For album art layout on home page -->
  <script type="text/javascript" src="lib/masonry.pkgd.js"></script>

  <script type="text/javascript" src="src/dozmia-main.js"></script> 
  <script type="text/javascript" src="src/dozmia-master-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-home-view.js"></script> 
</head>
<body>
  <div id="dozmia-container">
  </div>
  <script id="master-template" type="text/x-handlebars-template">
    <div class="dozmia-layout-fixed-left dozmia-music-drawer">
      <div class="dozmia-music-drawer-section">
        <h1 class="dozmia-prefix-logo"><img src="/dozmia/assets/icon-dozmia-temp.gif"> Dozmia</h1>
        <h2>Collection</h2>
        <ul>
          <li class="dozmia-music-drawer-item"><i></i><span>Songs</span></li>
        </ul>
      </div>
      <div class="dozmia-music-drawer-section">
        <h2>Playlists</h2>
        <ul>
          <li class="dozmia-music-drawer-item"><i></i><span>Rock 'n Roll</span></li>
          <li class="dozmia-music-drawer-item"><i></i><span>Everything</span></li>
          <li class="dozmia-music-drawer-item dozmia-music-drawer-item--selected"><i></i><span>Electronica</span></li>
        </ul>
      </div>
    </div>
    <div class="dozmia-layout-fixed-top dozmia-search-bar">
      <div>
        <input class="u-pull-right" type="text" placeholder="Search an artist...">
      </div>
    </div>
    <div class="dozmia-layout-fixed-bottom">Player</div>
    <div class="dozmia-layout-fixed-right dozmia-advert">
      <h1>Ahh, no ads!</h1>
      <p>Aren't you lucky?</p>
    </div>
    <div class="dozmia-layout-page-content dozmia-page-content">
      <div id="page-container"></div>
    </div>
  </script>
</body>
</html>

