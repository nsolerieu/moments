<!DOCTYPE html>

<html lang="en" >

<head>

  <title>slrcnl</title>

  <!-- Meta Zone -->

  <meta charset="utf-8">
  <meta name="description" content="" />
  <meta name="robots" content="index, follow, all" />

  <meta name="author" content="Nicolas SOLERIEU">
  <meta name="publisher" content="Nicolas SOLERIEU">
  <meta name="google" content="notranslate" />

  <!-- User agent / Viewport / compression -->
  <meta name="viewport" content="initial-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<!-- CSS Zone -->
  <link rel="stylesheet" href="assets/style.css" >

</head>

<!-- BODY -->
<body id="body" class="">

<div class="page">

  <header class="site-header">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <nav class="header-navigation">
            <span class="logo-ish">moments</span>
            <span class="nav-separator">/</span>
            <a href="#about">about</a>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section id="gallery" >
    <div class="container">
      <div class="gallery-flex-containter" >

      <?php

      $dir_name = "assets/img/";
      $images = glob($dir_name."*.jpg");
      foreach( array_reverse($images) as $image ) {

      echo '<div class="col-x"><figure class="une-diapo" data-image-src="https://slrncl.com/moments/'.$image.'">';
      echo '<img data-src="https://slrncl.com/moments/'.$image.'" alt="'.substr($image, 11).'" class="lazy" >';
      echo '<figcaption>'.substr($image, 11).'</figcaption>';
      echo '</figure></div>';

      }

      ?>

      </div>
    </div>
  </section>

  <footer class="padded-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-50">
          <p class="text-regular">
            <b>What is this?</b>
          </p>
        </div>
        <div class="col-50">
          <p class="text-regular">
            I got away from instagram but still wanted a place to keep my photos.
            <br><br>
            This is mostly intended for my personal consumption and will live on my domain. If you read these words and feel anything from perusing this gallery, that's great. But there is really no goal to this.
            We all see things. Life happens all around us. Few can catch and hold on to the feeling of a moment without the help of photography.
            <br><br>
            I'm building this thing because there doesn't seem to be much satisfiying alternative to instagram. Although this is an attempt at exiting the voyeurism of social media, there is still some ego in needing to keep a record. I'm working on it, here.
            <br><br>
            I'm trying to not grow my footprint too much and tame my ego. These compressed JPGs will hosted here as I'm purging all my cloud accounts and other devices.
            <br><br>
            It's simple like a folder, but online. A place to store all of my photos that are currently scattered accross google drive, my phone library, old phones, my instagram archive, and a bunch of SD cards. The images are intentionally low-res, the moment matter. I remember the details.
        </div>
      </div>
    </div>
  </footer>

  <footer>
    <div class="container">
      <div class="row full-row-border-top">
        <div class="col-100">
          <p class="text-small text-color-secondary">
            * That's all my stuff – I live in the same world
          </p>
        </div>
      </div>
    </div>
  </footer>

</div><!-- / page -->

</body>

<script src="assets/jquery.js"></script>
<script src="assets/jquery.lazy.min.js"></script>
<script src="assets/main.js" ></script>

</body>
</html>
