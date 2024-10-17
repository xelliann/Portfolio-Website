<?php include 'includes/config.php';

$sql ="SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?=$data['name']?> - <?=$data['title']?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files --> 
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <h1 class="sitename">Profile</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/night" alt="" data-aos="fade-in">

      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h2><?php echo $data['name']?></h2>
        <p>I'm a <span class="typed" data-typed-items="Designer, Developer, Gamer, Garreb"><?php echo $data['title']?></span><span class="typed-cursor typed-cursor--blink"></span><br> from <?php echo $data['City']?></p>
        <div class="social-links">
          <?php
          if($data['twitter']){
            ?>
            <a href ="<?=$data['twitter']?>"target="_blank" <i class="bi bi-twitter-x"></i></a>
            <?php
          }
          if(['facebook']){
            ?>
            <a href="<?=$data['facebook']?>"target="_blank" <i class="bi bi-facebook"></i></a>
          <?php
          }
          if(['instagram']){
            ?>
              <a href="<?=$data['instagram']?>"target="_blank" <i class="bi bi-instagram"></i></a>
            <?php
          }
          if(['linkedin']){
            ?>
            <a href="<?=$data['linkedin']?>"target="_blank" <i class="bi bi-linkedin"></i></a>
            <?php
          }
          if(['youtube']){
            ?>
          <a href="<?=$data['youtube']?>"target="_blank" <i class="bi bi-youtube"></i></a>
            <?php
          }
          if(['github']){
            ?>
            <a href="<?=$data['github']?>"target="_blank" <i class="bi bi-github"></i></a>
            <?php
          }
          ?>
        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <div class="social-links d-flex justify-content-center">
      <?php
          if($data['twitter']){
            ?>
            <a href ="<?=$data['twitter']?>"target="_blank" <i class="bi bi-twitter-x"></i></a>
            <?php
          }
          if(['facebook']){
            ?>
            <a href="<?=$data['facebook']?>"target="_blank" <i class="bi bi-facebook"></i></a>
          <?php
          }
          if(['instagram']){
            ?>
              <a href="<?=$data['instagram']?>"target="_blank" <i class="bi bi-instagram"></i></a>
            <?php
          }
          if(['linkedin']){
            ?>
            <a href="<?=$data['linkedin']?>"target="_blank" <i class="bi bi-linkedin"></i></a>
            <?php
          }
          if(['youtube']){
            ?>
          <a href="<?=$data['youtube']?>"target="_blank" <i class="bi bi-youtube"></i></a>
            <?php
          }
          if(['github']){
            ?>
            <a href="<?=$data['github']?>"target="_blank" <i class="bi bi-github"></i></a>
            <?php
          }
          ?>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename"><?=$data['name']?></strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>