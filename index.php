<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Dozmia</title>

  <link rel="stylesheet" href="lib/reset.css">
  <link rel="stylesheet" href="src/dozmia.css">

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
    <div class="dozmia-layout-left-fixed">Dozmia</div>
    <div class="dozmia-layout-top-fixed">Search</div>
    <div class="dozmia-layout-bottom-fixed">Player</div>
    <div class="dozmia-layout-right-fixed">Ad</div>
    <div class="dozmia-layout-page-content">
      <div id="page-container"></div>
    </div>
  </script>
</body>
</html>

