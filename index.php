<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Dozmia</title>

  <link rel="stylesheet" href="lib/reset.css">
  <link rel="stylesheet" href="src/util.css">
  <link rel="stylesheet" href="src/dozmia.css">
  <link rel="stylesheet" href="assets/fonts/stylesheet.css">

  <script type="text/javascript" src="lib/jquery-2.1.1.js"></script>
  <script type="text/javascript" src="lib/underscore.js"></script>
  <script type="text/javascript" src="lib/backbone.js"></script>
  <script type="text/javascript" src="lib/handlebars-v2.0.0.js"></script>
  <!-- For album art layout on home page -->
  <script type="text/javascript" src="lib/masonry.pkgd.js"></script>
  <script type="text/javascript" src="lib/jquery.dataTables.js"></script>

  <script type="text/javascript" src="src/dozmia-main.js"></script> 
  <script type="text/javascript" src="src/dozmia-home-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-home-sign-up-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-home-sign-up-thanks-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-search-sign-up-login-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-master-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-modal-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-album-art-wall-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-sign-up-view.js"></script> 
  <script type="text/javascript" src="src/dozmia-login-view.js"></script> 
</head>
<body class="dozmia-cta-wrapper">
  <div id="modal-container" class="modal-background u-flex u-flex--center-items u-flex--center-items-x u-full-height">
  </div>
  <div id="dozmia-container" class="u-full-height u-overflow-hidden">
  </div>
  <template id="home-template" type="text/x-handlebars-template">
    <div id="dozmia-album-art-wall-container" class="u-full-height u-overflow-hidden"> 
    </div>
    <div id="dozmia-cta-container">
    </div>
  </template>
  <template id="home-sign-up-thanks-template" type="text/x-handlebars-template">
    <section class="dozmia-cta u-flex u-flex--center-items dozmia-transition--scale dozmia-transition-init">
      <div>
        <h4>Thanks for registering early. We'll email you when its ready!</h4>
        <h3 class="u-flex u-flex--center-items u-flex--center-items-x"><span></span><span>Share with you friends what's coming!</span><span></span></h3> 
      </div>
    </section>
  </template>
  <template id="search-sign-up-login-template" type="text/x-handlebars-template">
    <div class="dozmia-cta-wrapper">
      <section class="dozmia-cta dozmia-cta--wide dozmia-transition--scale dozmia-transition-init">
        <h1 class="u-text-blue">Dozmia</h1>
        <menu class="u-gutter-fat u-text-center">
          <div class="dozmia-complex-input u-margin-chunky-bottom">
            <input class="dozmia-input dozmia-input--big u-normalize" type="search" title="Search Dozmia" placeholder="Type an artist you know to find something new!">
            <div class="dozmia-complex-input-suffix">
              <button class="dozmia-search-button u-normalize">-></button>
            </div>
          </div>
          <div class="u-margin-chunky-bottom">
            <a class="dozmia-button dozmia-button--big-text u-normalize" href="#signup">Sign Up</a>
            <a class="dozmia-button dozmia-button--big-text u-normalize" href="#home?modal=login">Login</a>
          </div>
        </menu>
      </section>
    </div>
  </template>
  <template id="master-template" type="text/x-handlebars-template">
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
        <input class="dozmia-input u-normalize" type="search" placeholder="Search an artist...">
      </nav>
      <nav class="u-pull-right">
        <button class="dozmia-button dozmia-button--hollow u-normalize u-pull-left u-gutter-small js-sign-up">SIGN UP</button>
        <button class="dozmia-button dozmia-button--hollow u-normalize u-pull-left u-gutter-small js-login">LOGIN</button>
      </nav>
    </div>
    <div class="dozmia-layout-fixed-bottom dozmia-player">
      <a href="#" class="dozmia-album-art dozmia-album-art--dark dozmia-album-art--half u-pull-left"></a>
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
  </template>
  <template id="sign-up-template" type="text/x-handlebars-template">
    <section>
      <h3 class="u-flex u-flex--center-items u-flex--center-items-x"><span></span><span>Sign up with</span><span></span></h3>
      <button class="dozmia-button dozmia-button--facebook u-normalize"><span></span>Facebook</button>
      <h3 class="u-flex u-flex--center-items u-flex--center-items-x"><span></span><span>Or with your email</span><span></span></h3>
      <form>
        <p class="u-flex u-flex--fill-x">
          <input class="dozmia-input u-normalize u-gutter-small" type="text" placeholder="First Name" title="First Name" required>
          <input class="dozmia-input u-normalize u-gutter-small" type="text" placeholder="Last Name" title="Last Name" required>
        </p>
        <p class="u-flex u-flex--fill-x">
          <input class="dozmia-input u-normalize u-gutter-small" type="email" placeholder="Email Address" title="Email Address" required>
        </p>
        <p class="u-flex u-flex--fill-x">
          <input class="dozmia-input u-normalize u-gutter-small" type="password" placeholder="Password" title="Password" required>
        </p>
        <p class="u-flex u-flex--fill-x">
          <input class="dozmia-input u-normalize u-gutter-small" type="text" placeholder="Date of Birth" title="Date of Birth" required>
          <input class="dozmia-input u-normalize u-gutter-small" type="text" placeholder="Zip Code" title="Zip Code" required>
        </p>
        <p class="u-flex u-flex--fill-x">
          <label for="input-gender">I am:
            <select class="dozmia-input u-normalize u-gutter-small" id="input-gender" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </label>
        </p>
        <p class="u-flex u-flex--fill-x u-margin-chunky-top">
          <button class="dozmia-button dozmia-button--big-text u-normalize" title="submit">submit</button>
        </p>
      </form>
    </section>
  </template>
  <template id="home-sign-up-template" type="text/x-handlebars-template">
    <div class="dozmia-cta-wrapper">
    <section class="dozmia-cta dozmia-transition--scale dozmia-transition-init">
      <h2 class="u-text-center">Introducing <span class="u-text-blue">Dozmia</span></h2>
      <p class="u-text-center">Free Music, Everwhere</p>
      <h3 class="u-flex u-flex--center-items u-flex--center-items-x"><span></span><span>Sign up with</span><span></span></h3>
      <div class="u-text-center">
        <button class="dozmia-button dozmia-button--facebook u-normalize"><span></span>Facebook</button>
      </div>
      <h3 class="u-flex u-flex--center-items u-flex--center-items-x"><span></span><span>Or with your email</span><span></span></h3>
      <form>
        <p class="u-flex u-flex--fill-x">
          <input class="dozmia-input u-normalize u-gutter-small" type="text" placeholder="First Name" title="First Name" required>
          <input class="dozmia-input u-normalize u-gutter-small" type="text" placeholder="Last Name" title="Last Name" required>
        </p>
        <p class="u-flex u-flex--fill-x">
          <input class="dozmia-input u-normalize u-gutter-small" type="email" placeholder="Email Address" title="Email Address" required>
        </p>
        <p class="u-flex u-flex--fill-x">
          <input class="dozmia-input u-normalize u-gutter-small" type="password" placeholder="Password" title="Password" required>
        </p>
        <p class="u-flex u-flex--fill-x">
          <input class="dozmia-input u-normalize u-gutter-small" type="text" placeholder="Date of Birth" title="Date of Birth" required>
          <input class="dozmia-input u-normalize u-gutter-small" type="text" placeholder="Zip Code" title="Zip Code" required>
        </p>
        <p class="u-flex u-flex--center-items-x">
          <label for="input-gender">I am:
            <select class="dozmia-input u-normalize u-gutter-small" id="input-gender" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </label>
        </p>
        <p class="u-flex u-flex--fill-x u-margin-chunky-top u-margin-chunky-bottom">
          <a class="dozmia-button dozmia-button--big-text u-normalize" title="submit" href="#thanks">submit</a>
        </p>
      </form>
    </section>
    </div>
  </template>
  <template id="login-template" type="text/x-handlebars-template">
    <section>
      <button class="dozmia-button dozmia-button--facebook"><span></span>Connect</button>
      <h3 class="u-flex u-flex--center-items u-flex--center-items-x"><span></span><span>OR</span><span></span></h3>
      <form>
        <p class="u-flex u-flex--fill-x">
          <input class="dozmia-input u-normalize u-gutter-small" type="text" placeholder="Username" title="Username" required>
        </p>
        <p class="u-flex u-flex--fill-x">
          <input class="dozmia-input u-normalize u-gutter-small" type="password" placeholder="Password" title="Password" required>
        </p>
        <p class="u-flex u-flex--center-items-x u-margin-chunky-top">
          <button class="dozmia-button dozmia-button--big-text dozmia-button--hollow u-normalize" title="submit">login</button>
        </p>
      </form>
    </section>
  </template>
  <a class="u-invisible" href="http://papyrusoft.com/" title="thanks"> Dozmia ~ Thanks for building your front-end with Papyrus. Go forth and conquer! ~ Patrick</a>
</body>
</html>

