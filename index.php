<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="referrer" content="always">
<title>Silverado Cinema</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/menu.css"/>
</head>
<body id ="indexPage">
<!-- Page -->
<div id="page" class="shell">
  <!-- Header -->
  <div id="header">
    <div id="logo">
      <h1><a href="index.html">Silverado<span>Cinema</span></a></h1> </div>

    <!-- Top Navigation -->
  <?php include('menu.php') ?>
    <!-- / Top Navigation -->
  </div>
  <!-- / Header -->

  <!-- Main -->
  <div id="main">
      <!-- Content -->
      <div id="content">
        <div class="block">
          <div class="head">
            <div class="head-cnt"> <a href="movies.html" class="view-all">view all</a>
              <h3>Top Reviewed</h3>
            </div>
          </div>
          <div class="articles">
            <div class="article">
              <!-- Original image below sourced for educational purposes: http://tallahasseescene.com/wp-content/uploads/2015/03/birdman.jpg -->
              <div class="image"> <a href="#"><img src="Images/birdman_Large.jpg" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">Birdman</a></h4>
                <p>A washed-up actor, who once played an iconic superhero, battles his ego and attempts to recover his family, his career and himself in the days leading up to the opening of his Broadway play. </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <!-- Original image below sourced for educational purposes: http://voices.nationalgeographic.com/files/2014/03/the-grand-budapest-hotel-uk-quad-poster.jpg -->
              <div class="image"> <a href="#"><img src="Images/grand_budapest_large.jpg" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">The Grand Budapest Hotel</a></h4>
                <p>The adventures of Gustave H, a legendary concierge at a famous hotel from the fictional Republic of Zubrowka between the first and second World Wars, and Zero Moustafa, the lobby boy who becomes his most trusted friend.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <!-- Original image below sourced for educational purposes: http://www.1000thingsnyc.com/wp-content/uploads/2012/08/The-Room-Poster.jpg-->
              <div class="image"> <a href="#"><img src="Images/The_Room_large.jpg" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">The Room</a></h4>
                <p>Johnny is a successful banker who lives happily in a San Francisco townhouse with his fiancée, Lisa. One day, inexplicably, she gets bored of him and decides to seduce Johnny's best friend, Mark. From there, nothing will be the same again.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
        </div>
      </div>
    <!-- / Content -->

    <!-- Sidebar -->
    <div id="sidebar">
      <div class="block">
          <div class="head">
            <div class="head-cnt">
              <h3>New Movies</h3>
            </div>
          </div>
          <div class="image-articles articles">
            <div class="article">
              <!-- Original image below sourced for educational purposes: http://static.underthegunreview.net/uploads/2014/11/Chappie.jpg -->
              <div class="image"> <a href="#"><img src="Images/Chappie.jpg" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">Chappie</a></h4>
                <p>In the near future, crime is patrolled by a mechanized police force. When one police droid, Chappie, is stolen and given new programming, he becomes the first robot with the ability to think and feel for himself. </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <!-- Original image below sourced for educational purposes: http://images.latinpost.com/data/images/full/35476/focus-movie-poster.jpg?w=50&h=50&l=50&t=40 -->
              <div class="image"> <a href="#"><img src="Images/Focus_Small.jpg" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">Focus</a></h4>
                <p>In the midst of veteran con man Nicky's latest scheme, a woman from his past - now an accomplished femme fatale - shows up and throws his plans for a loop. </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <!-- Original image below sourced for educational purposes: https://lh3.googleusercontent.com/-RYc4XcNttyI/AAAAAAAAAAI/AAAAAAAACdc/jobwRn24y_k/photo.jpg?sz=50-->
              <div class="image"> <a href="#"><img src="Images/Mockingjay_Small.jpg" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">The Hunger Games: Mockingjay</a></h4>
                <p>Katniss Everdeen is in District 13 after she shatters the games forever. Under the leadership of President Coin and the advice of her trusted friends, Katniss spreads her wings as she fights to save Peeta and a nation moved by her courage. </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <!-- Original image below sourced for educational purposes: https://yabookishnews.files.wordpress.com/2015/01/insurgent-new-movie-poster.jpg?w=50&h=50&crop=1-->
              <div class="image"> <a href="#"><img src="Images/Insurgent_Small.jpg" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="#">Insurgent</a></h4>
                <p>Beatrice Prior must confront her inner demons and continue her fight against a powerful alliance which threatens to tear her society apart with the help from others on her side. </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <a href="#" class="view-all">view all</a>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
    </div>
    <!-- / Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>

<!-- / Main -->

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- / Footer -->

</div>
<!-- / Page -->
</body>
</html>
