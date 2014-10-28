<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Dozmia</title>

  <link rel="stylesheet" href="lib/reset.css">
  <link rel="stylesheet" href="src/util.css">
  <link rel="stylesheet" href="src/dozmia.css">
  <!-- TODO: serve fonts locally and/or convert w/ fontsquirrel -->
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic' rel='stylesheet' type='text/css'>

  <script type="text/javascript" src="lib/jquery-2.1.1.js"></script>
  <script type="text/javascript" src="lib/underscore.js"></script>
  <script type="text/javascript" src="lib/backbone.js"></script>
  <script type="text/javascript" src="lib/handlebars-v2.0.0.js"></script>
  <!-- For album art layout on home page -->
  <script type="text/javascript" src="lib/masonry.pkgd.js"></script>
  <script type="text/javascript" src="lib/jquery.dataTables.js"></script>

  <script type="text/javascript" src="src/dozmia-main.js"></script> 
  <script type="text/javascript" src="src/dozmia-master-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-modal-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-home-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-sign-up-view.js"></script> 
</head>
<body>
  <div id="modal-container" class="modal-overlay u-flex u-flex--center-items u-flex--center-items-x u-full-height">
  </div>
  <div id="dozmia-container" class="u-full-height u-overflow-hidden">
  </div>
  <script id="master-template" type="text/x-handlebars-template">
    <div class="dozmia-layout-fixed-left dozmia-music-drawer">
      <nav class="dozmia-music-drawer-section">
        <a href="#"><h5 class="dozmia-prefix-logo u-flex u-flex--center-items"><img src="/dozmia/assets/icon-dozmia-temp.gif"><span>Dozmia</span></h5></a>
        <h6>Collection</h6>
        <ul>
          <li class="dozmia-music-drawer-item"><i></i><a href="#collection">Songs</a></li>
        </ul>
      </nav>
      <nav class="dozmia-music-drawer-section">
        <h6>Playlists</h6>
        <ul>
          <li class="dozmia-music-drawer-item"><a href="#playlist">Rock 'n Roll</a></li>
          <li class="dozmia-music-drawer-item"><a href="#playlist-empty">Everything</a></li>
          <li class="dozmia-music-drawer-item dozmia-music-drawer-item--selected"><a href="#playlist-empty">Electronica</a></li>
        </ul>
      </nav>
    </div>
    <div class="dozmia-layout-fixed-top dozmia-top-shelf">
      <nav class="dozmia-search u-pull-right u-gutter-small">
        <input class="u-normalize" type="search" placeholder="Search an artist...">
      </nav>
      <nav class="u-pull-right">
        <button class="dozmia-button dozmia-button--hollow u-normalize u-pull-left u-gutter-small js-sign-up">SIGN UP</button>
        <button class="dozmia-button dozmia-button--hollow u-normalize u-pull-left u-gutter-small">LOGIN</button>
      </nav>
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
          <h1 class="u-pull-left u-parent-width u-text-no-wrap">Two More Minutes - Jaymes McFarland</h1>
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
    <!-- TODO use flex layout with page content + advert? -->
    <div class="dozmia-layout-fixed-right dozmia-advert">
      <h1>Ahh, no ads?</h1>
      <p>Aren't you lucky!</p>
    </div>
    <div class="dozmia-layout-page-content dozmia-page-content">
      <div id="page-container" class="u-full-height u-overflow-scroll"></div>
    </div>
  </script>
  <script id="sign-up-template" type="text/x-handlebars-template">
    <section>
      <h3 class="u-flex u-flex--center-items u-flex--center-items-x"><span>Sign up with</span></h3>
      <button class="dozmia-button dozmia-button--facebook"><span>f</span>Facebook</button>
      <h3 class="u-flex u-flex--center-items u-flex--center-items-x"><span>Or with your email</span></h3>
    <section>
  </script>
</body>
</html>

