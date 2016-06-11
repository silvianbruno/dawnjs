<!--  THOSE WITHOUT SHADOWS  -->
<html lang="en">

  <head>
    <title>Those Without Shadows</title>
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/progress.css">
    <link rel="stylesheet" type="text/css" href="css/shadows.css">

    <script type="application/javascript" src="scripts/jquery-1.8.3.min.js"></script>
  </head>

  <body>
    <div id="header-switcher">
      <?php include 'main-header.php' ?>
    </div>

    <div id="content" onmouseover="$('.submenu').fadeOut();">
      <div id="page-switcher">
        <?php include 'pages/news.php' ?>
      </div>
      <div id="next-wrapper">
        <div class="next-chapter hidden pageturny" onclick="nextChapter();"></div>
        <div class="next-page hidden pageturny" onclick="nextPage();"></div>
      </div>
    </div>

    <div id="footer-bar">
      <?php include 'footer.php' ?>
    </div>
  </body>

  <footer>
    <?php include_once 'tws_scripts.php' ?>
  </footer>

</html>
