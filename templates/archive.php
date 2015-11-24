<?php require_once('comic_functions.php');?>
<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Oculoids</title>
</head>
<body>

  <div class="masterwrapper">
    <div class="headerwrapper">
      <div class="header">
        <a href="main"><img id="logo" src="img/oculoidsolo.png" alt="logo">
          <img id="banner" src="img/title.png" alt="title">
          <h1 id="bannerText">Oculoids</h1>
        </a></div>
      <div class="sitenav" id="topsitenav">
        <a class="archive_page" href="archive" alt="archive">Archive</a>
        <a class="about_page" href="about" alt="about">About</a>
        <a class="contact_page" href="contact" alt="contact">Contact</a>
        <a class="blog" href="http://leiprie.tumblr.com/" alt="blog">Blog</a>
      </div>
      <div style="clear:both;"></div>
    </div>

    <div class="contentwrapper">
		<div class="maincontent">
	        <h1>Archive</h1>
	        <ul>
	        <?php archiveList(); ?>
	        </ul>
	    </div>
    </div>

    <div class="footer">
      <div class="sitenav" id="bottomsitenav">
        <a class="archive_page" href="archive" alt="archive">Archive</a>
        <a class="about_page" href="about" alt="about">About</a>
        <a class="contact_page" href="contact" alt="contact">Contact</a>
        <a class="blog" href="http://leiprie.tumblr.com/" alt="blog">Blog</a>
      </div>
      <p class="copyright">Copyright 2015 Leigh Prince</p>
    </div>

  </div>
  <script>
    var pageID = 6;
    var firstPage = false;
    var lastPage = true;
  </script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
