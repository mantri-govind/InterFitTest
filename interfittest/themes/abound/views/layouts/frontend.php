<!DOCTYPE HTML>
<html lang="en">
  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Limelight|Flamenco|Federo|Yesteryear|Josefin Sans|Spinnaker|Sansita One|Handlee|Droid Sans|Oswald:400,300,700" media="screen" rel="stylesheet" type="text/css" />
    <style>
      /* No content under the fixed bootstrap header. */
      /*
  This is for links easel inserts on document links when no link is available
  to attach an href to.
*/
      a.easel-inserted-link {
        color: inherit;
        text-decoration: inherit;
        border: inherit;
      }
    </style>
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/common.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/fontawesome.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/project.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/home.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- Typekit fonts require an account and a kit containing the fonts used. see https://typekit.com/plans for details. <script type="text/javascript" src="//use.typekit.net/YOUR_KIT_ID.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
-->
    <title>Home</title>
  </head>
  
  <body>

    <div id="absolute-wrapper">
      <span class="badge badge-1">Badge</span>
      <input class="textinput" type="text" name="" value="Search a Crossfitter" placeholder="Placeholder">
      <div class="rectangle rectangle-1" id="featureimg1">
        <div class="rectangle rectangle-2">
          <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/wod.png" class="image">
        </div>
        <h1 class="dom-heading dom-heading-1 dom-heading-2 dom-heading-4 dom-heading-7">Take the daily WOD challenge&nbsp;</h1>
        <h1 class="dom-heading dom-heading-2 dom-heading-3">our workout are set by
          <span>expert&nbsp;</span>&nbsp;</h1>
        <h1 class="dom-heading dom-heading-1 dom-heading-3">panel of coaches. These
          <span>WOD</span>
        </h1>
		<?php echo $content; ?>
        <span class="badge"></span>
        <span class="label label-1"></span>
        <span class="label label-2">
          <a class="easel-inserted-link" rel="inserted because no link were available to attach an href to" href="home.html">Start with WOD now..</a>
        </span>
      </div>
      <div class="rectangle rectangle-1 rectangle-3">
        <div class="rectangle rectangle-2">
          <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/372672.png" class="image">
        </div>
        <div class="paragraph">
          <p><strong>"Featured <span>Groups</span>, create you</strong><strong>r</strong>
          </p>
          <p>&nbsp;</p>
        </div>
        <h1 class="dom-heading dom-heading-5">own group or join existing one
          <br>and lot more things.</h1>
        <h1 class="dom-heading dom-heading-6">share your WOD, Photos, Diets</h1>
        <span class="label">
          <a class="easel-inserted-link" rel="inserted because no link were available to attach an href to" href="home.html">&nbsp; Join a Group now..</a>
        </span>
      </div>
      <div class="rectangle rectangle-1 rectangle-4">
        <div class="rectangle rectangle-2">
          <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/url.jpg" class="image">
        </div>
        <a class="easel-inserted-link" rel="inserted because no link were available to attach an href to" href="home.html">
          <span class="label"></span>
        </a>
        <span class="label label-3">
          <a class="easel-inserted-link" rel="inserted because no link were available to attach an href to" href="home.html">Start with your PM..&nbsp;</a>
        </span>
      </div>
      <div id="slider"></div>
      <h1 class="dom-heading dom-heading-7 dom-heading-8 dom-heading-9 dom-heading-10 dom-heading-15">&nbsp;"
        <span>Progress Meter</span>that shows&nbsp;&nbsp;</h1>
      <h1 class="dom-heading dom-heading-8 dom-heading-9 dom-heading-10 dom-heading-11">how much you improved with&nbsp;</h1>
      <h1 class="dom-heading dom-heading-8 dom-heading-10 dom-heading-11 dom-heading-16">the help of charts, share your</h1>
      <h1 class="dom-heading dom-heading-8 dom-heading-9 dom-heading-10 dom-heading-12 dom-heading-17">progress with your friends.</h1>
      <h1 class="dom-heading dom-heading-8 dom-heading-9 dom-heading-10 dom-heading-12 dom-heading-18">will help you to be fit.</h1>
      <div class="well" id="feed-slider">
        <div class="pull-left" id="RWOD"></div>
        <div class="pull-left pull-left-1" id="RNEW"></div>
        <div class="pull-left pull-left-1"></div>
      </div>
      <h1 class="dom-heading dom-heading-10 dom-heading-13 dom-heading-14 dom-heading-19">Leaderboard</h1>
      <h1 class="dom-heading dom-heading-10 dom-heading-13 dom-heading-20">Recent WODs</h1>
      <h1 class="dom-heading dom-heading-10 dom-heading-13 dom-heading-14 dom-heading-21">Recent News</h1>
      <div class="row-fluid">
        <span class="span6"></span>
        <span class="span6"></span>
      </div>
    </div>
    <div class="container" id="container">
      <div class="navbar">
        <div class="navbar-inner">
          <div class="responsive-container">
            <a class="brand" href="#">InterFit</a>
            <a class="btn btn-navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li>
                  <a href="#">Home</a>
                </li>
                <li>
                  <a href="#">About Us</a>
                </li>
                <li>
                  <a href="#">WOD's</a>
                </li>
                <li>
                  <a href="#">Members</a>
                </li>
                <li>
                  <a href="#">Groups</a>
                </li>
              </ul>
              <button class="btn">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>