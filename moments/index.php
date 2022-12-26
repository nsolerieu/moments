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
            <span class="logo-ish">slrncl</span>
            <span class="nav-separator">/</span>
            <a href="#gallery">moments</a>
            <span class="nav-separator">/</span>
            <a href="#about">what</a>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section id="gallery" >
    <div class="container">
      <div class="row" style="flex-wrap: wrap">

      <?php

      $dir_name = "assets/img/";
      $images = glob($dir_name."*.jpg");
      foreach( array_reverse($images) as $image ) {

      echo '<div class="col-10"><figure class="une-diapo" data-image-src="https://slrncl.com/dev/moments/'.$image.'">';
      echo '<img data-src="https://slrncl.com/dev/moments/'.$image.'" alt="'.substr($image, 11).'" class="lazy" >';
      echo '<figcaption>'.substr($image, 11).'</figcaption>';
      echo '</figure></div>';

      }

      ?>

      </div>
    </div>
  </section>

  <footer class="padded-section">
    <div class="container">
      <div class="row">
        <div class="col-50">
          <p class="text-regular">
            What is this?
          </p>
        </div>
        <div class="col-50">
          <p class="text-small">
            an honest explainer will live here
          </p>
        </div>
      </div>
    </div>
  </footer>

  <footer class="padded-section">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <p class="text-small text-color-secondary">
            * Cheers
          </p>
        </div>
      </div>
    </div>
  </footer>

</div><!-- / page -->

</body>

<script src="assets/jquery.js"></script>
<script src="assets/main.js" ></script>

</body>
</html>
