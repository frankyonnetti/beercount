<!DOCTYPE html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Beer Count</title>
        <meta name="description" content="">
        <meta name="MobileOptimized" content="width">
        <meta name="HandheldFriendly" content="true">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="cleartype" content="on">

        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="52x52" href="img/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#c26a1c">

        <!-- For iOS web apps -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-mobile-web-app-title" content="Beer Count">

        <!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
        <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css?c">
        <link rel="stylesheet" href="css/carbon.css?a">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <?php
      if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"iphone")) {

        if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"safari")) {
          echo('<body class="iphone-safari">');
        } else {
      	  echo('<body class="iphone-webapp">');
        }

      } else {
        echo('<body class="other-browser">');
      }
    ?>

        <div id="page">

        <?php if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"iphone")): ?>

          <?php if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"safari")): ?>

          <p class="install-copy">Before using Beer Count,<br>
          add it to your "Home Screen"<br>
          by tapping the share<br>
          icon below.</p>

          <?php else: ?>

          <div id="page-inner">

            <div id="beerCount"></div>

            <div class="addition-btn">
              <span id="add" class="pressed" href="#add">Add</span>
            </div>

            <div class="other-btns">
              <span class="carbdark item-1"></span>
              <span class="carbdark item-2"></span>
            	<span id="sub" class="pressed" href="#subtract">Subtract</span>
            	<span id="reset" class="pressed" href="#reset">Reset</span>
          	</div>

          	<div id="comment">Enjoy a beer.</div>

          </div><!-- /#page-inner -->

          <div id="carbs">
          	<span class="carb item-1"></span>
          	<span class="carb item-2"></span>
          	<span class="carb item-3"></span>
          	<span class="carb item-4"></span>
          	<span class="carb item-5"></span>
          	<span class="carb item-6"></span>
          	<span class="carb item-7"></span>
          	<span class="carb item-8"></span>
          	<span class="carb item-9"></span>
          	<span class="carb item-10"></span>
          	<span class="carb item-11"></span>
          	<span class="carb item-12"></span>
          	<span class="carb item-13"></span>
          	<span class="carb item-14"></span>
          	<span class="carb item-15"></span>
          	<span class="carb item-16"></span>
          	<span class="carb item-17"></span>
          	<span class="carb item-18"></span>
          	<span class="carb item-19"></span>
          	<span class="carb item-20"></span>
          	<span class="carb item-21"></span>
          	<span class="carb item-22"></span>
          	<span class="carb item-23"></span>
          	<span class="carb item-24"></span>
          	<span class="carb item-25"></span>
          	<span class="carb item-26"></span>
          	<span class="carb item-27"></span>
          	<span class="carb item-28"></span>
          	<span class="carb item-29"></span>
          	<span class="carb item-30"></span>
          	<span class="carb item-31"></span>
          	<span class="carb item-32"></span>
          </div>

          <?php endif; ?>

        <?php else: ?>

          <div class="logo">Beer Count</div>
          <p class="website-intro">To use <strong>Beer Count</strong>, you'll need to open this page<br>using an iPhone or iPod touch.</p>

        <?php endif; ?>

        </div><!-- /#page -->

        <script src="js/vendor/jquery-2.0.3.min.js"></script>
        <script src="js/helper.js"></script>
        <script src="js/main.js"></script>
        <script src="js/plugins.js?c"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[["_setAccount","UA-9007591-1"],["_trackPageview"]];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,"script"));
        </script>
    </body>
</html>
