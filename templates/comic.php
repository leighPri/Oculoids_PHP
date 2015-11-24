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

      <div class="comicwrapper">
        <div class="comicnav" id="topcomicnav">
          <a class="first" href="<?php echo "comic?id=1"?>" alt="first"></a>
          <a class="prev" id ="prevComic" href="<?php echo 'comic?id='.isFirst($comicData[0]["id"]);?>" alt="prev"></a>
          <a class="archive" href="archive" alt="archive"></a>
          <a class="next" id ="nextComic" href="<?php echo 'comic?id='.isLast($comicData[0]["id"]);?>" alt="next"></a>
          <a class="last" href="<?php echo "comic?id=".$total_comics?>" alt="last"></a>
        </div>

        <div class="comiccontent">
          <a href="<?php echo 'comic?id='.isLast($comicData[0]["id"]);?>" class="standardcomic" id="comicLink"><img class="comic" alt="comic" src="img/<?php echo $comicData[0]["id"]?>.png"></a>
        </div>

        <div class="comicnav" id="bottomcomicnav">
          <a class="first" href="<?php echo "comic?id=1"?>" alt="first"></a>
          <a class="prev" id ="prevComic2" href="<?php echo 'comic?id='.isFirst($comicData[0]["id"]);?>" alt="prev"></a>
          <a class="archive" href="archive" alt="archive"></a>
          <a class="next" id ="nextComic2" href="<?php echo 'comic?id='.isLast($comicData[0]["id"]);?>" alt="next"></a>
          <a class="last" href="<?php echo "comic?id=".$total_comics?>" alt="last"></a>
        </div>
      </div>

      <div class="extrawrapper">
        <div class="secondarycontent" id="comments">
        <?php 	echo "<h1 id='commenttitle'>".$comicData[0]["title"]."</h1>";
				echo "<h3 id='commentdate'>".$comicData[0]["date_posted"]."</h3>";
				echo "<p>".$comicData[0]["comments"]."</p>";?></div>
        <div class="secondarycontent" id="bonus">
          <p>This space is for ads or other stuff. But for now, here are some other comics I enjoy:</p>
          <ul id="webcomiclist">
            <li><a href="http://www.questionablecontent.net">Questionable Content</a></li>
            <li><a href="http://www.xkcd.com">xkcd</a></li>
            <li><a href="http://comics.boumerie.com/">Boumeries</a></li>
            <li><a href="http://www.smbc-comics.com">Saturday Morning Breakfast Cereal</a></li>
          	<li><a href="http://www.dumbingofage.com">Dumbing of Age</a>
          </ul>
          </div>
      <div style="clear:both;"></div>
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
		var curPage = <?php echo $comicData[0]["id"]?>;
		var prevPage = <?php echo isFirst($comicData[0]["id"])?>;
		var nextPage = <?php echo isLast($comicData[0]["id"])?>;
	</script>
  <script type="text/javascript" src="js/app.js"></script>
</body>
</html>