<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Dozmia</title>

  <link rel="stylesheet" href="lib/reset.css">
  <link rel="stylesheet" href="src/util.css">
  <link rel="stylesheet" href="src/dozmia.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic' rel='stylesheet' type='text/css'>

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
      <nav class="dozmia-music-drawer-section">
        <h1 class="dozmia-prefix-logo u-flex u-flex--center-items"><img src="/dozmia/assets/icon-dozmia-temp.gif"><span>Dozmia</span></h1>
        <h2>Collection</h2>
        <ul>
          <li class="dozmia-music-drawer-item"><i></i><a href="#">Songs</a></li>
        </ul>
      </nav>
      <nav class="dozmia-music-drawer-section">
        <h2>Playlists</h2>
        <ul>
          <li class="dozmia-music-drawer-item"><a href="#">Rock 'n Roll</a></li>
          <li class="dozmia-music-drawer-item"><a href="#">Everything</a></li>
          <li class="dozmia-music-drawer-item dozmia-music-drawer-item--selected"><a href="#">Electronica</a></li>
        </ul>
      </nav>
    </div>
    <div class="dozmia-layout-fixed-top dozmia-top-bar">
      <form>
        <input class="u-pull-right u-normalize" type="search" placeholder="Search an artist...">
      </form>
    </div>
    <div class="dozmia-layout-fixed-bottom dozmia-player">
      <a href="#" class="dozmia-album-art dozmia-album-art--dark u-pull-left"></a>
      <menu class="dozmia-player-buttons u-pull-left">
        <button class="dozmia-control-rewind u-normalize u-pull-left"></button>
        <button class="dozmia-control-play u-normalize u-pull-left"></button>
        <button class="dozmia-control-fastforward u-normalize u-pull-left"></button>
      </menu>
      <div class="dozmia-layout-fixed-bottom-center">
        <div class="u-cf dozmia-player-song-info">
          <h1 class="u-pull-left">Two More Minutes - Jaymes McFarland</h1>
          <div class="dozmia-timer u-pull-right">
            <span class="dozmia-timer-elapsed">3:40</span><span class="dozmia-timer-total">6:30</span>
          </div>
        </div>
        <input type="range" class="dozmia-control-slider u-normalize u-parent-width">
      </div>
      <div class="dozmia-control-volume u-pull-right u-flex u-flex--center-items">
        <input type="range" class="dozmia-control-slider u-normalize u-inline-block">
      </div>
    </div>
    <div class="dozmia-layout-fixed-right dozmia-advert">
      <h1>Ahh, no ads?</h1>
      <p>Aren't you lucky!</p>
    </div>
    <div class="dozmia-layout-page-content dozmia-page-content">
      <div id="page-container"></div>
    </div>
  </script>
</body>
</html>

