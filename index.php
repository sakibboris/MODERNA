<?php
include_once './inc/header.php';
include_once './inc/env.php';
// Banner section SQL

$_banner_select = "SELECT * FROM banners WHERE status = 0 ORDER BY id DESC LIMIT 3";
$_banner_query = mysqli_query($_conn, $_banner_select);
$_fetch_banner = mysqli_fetch_all($_banner_query, 1);
// Services section SQL

$_post_select = "SELECT * FROM posts WHERE status = 1 ORDER BY id ASC LIMIT 4";
$_query = mysqli_query($_conn, $_post_select);
$_fetch = mysqli_fetch_all($_query, 1);
// Why US section SQL

$_why_select = "SELECT * FROM why_us WHERE status = 1 ORDER BY id ASC";
$_query = mysqli_query($_conn, $_why_select);
$_fetch_why = mysqli_fetch_assoc($_query);
// Features top section SQL

$_ftop_select = "SELECT * FROM feature_top WHERE status = 1 ORDER BY id ASC LIMIT 1";
$_ftop_query = mysqli_query($_conn, $_ftop_select);
$_ftop_fetch = mysqli_fetch_all($_ftop_query, 1);
// Features section SQL

$_ft_select = "SELECT * FROM features WHERE status = 1 ORDER BY id ASC";
$_ft_query = mysqli_query($_conn, $_ft_select);
$_ft_fetch = mysqli_fetch_all($_ft_query, 1);
// echo '<pre>';
// print_r($_ft_fetch);
// echo '</pre>';
// die();
?>

<!-- ======= Hero Section ======= -->
<div id="about"></div>
<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Slide 1 -->
    <?php
    foreach ($_fetch_banner as $_key => $_banner) {
    ?>
      <div class="carousel-item <?= $_key == 0 ? 'active' : '' ?>">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?= $_banner['title'] ?></h2>
          <p class="animate__animated animate__fadeInUp"><?= $_banner['details'] ?></p>
          <a href="<?= $_banner['button_link'] ?>" class="btn-get-started animate__animated animate__fadeInUp"><?= $_banner['button_text'] ?></a>
        </div>
      </div>
    <?php
    }
    ?>
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->
<main id="main">
 <div id="services" class="pb-3"></div>
  <!-- ======= Services Section ======= -->
  <section class="services">
    <div class="container">
      <div class="row">
        <?php
        foreach ($_fetch as $_service) {
        ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box <?= $_service['icon_color'] ?>">
              <div class="icon"><i class="bx <?= $_service['icon'] ?>"></i></div>
              <h4 class="title"><a href=""><?= $_service['title'] ?></a></h4>
              <p class="description"><?= $_service['details'] ?></p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section><!-- End Services Section -->
<div id="why_us" class="pb-3"></div>
  <!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="./img/why_us/<?= $_fetch_why['picture'] ?>" class="img-fluid" alt="">
          <a href="<?= $_fetch_why['video_link'] ?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" target="_blank"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

          <div class="icon-box">
            <div class="icon"><i class="bx <?= $_fetch_why['first_icon'] ?>"></i></div>
            <h4 class="title"><a href=""><?= $_fetch_why['first_title'] ?></a></h4>
            <p class="description"><?= $_fetch_why['first_description'] ?></p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx <?= $_fetch_why['second_icon'] ?>"></i></div>
            <h4 class="title"><a href=""><?= $_fetch_why['second_title'] ?></a></h4>
            <p class="description"><?= $_fetch_why['second_description'] ?></p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->
<div id="blog" class="pb-3"></div>
  <!-- ======= Features Section ======= -->
  <section class="features">
    <div class="container">

      <div class="section-title">
        <?php
        foreach ($_ftop_fetch as $_key => $_feat_top) {
        ?>
          <h2><?= $_feat_top['title']?></h2>
          <p><?= $_feat_top['details']?></p>
        <?php
        }
        ?>
      </div>
      <?php
      foreach ($_ft_fetch as $_key => $_feature) {
      ?>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5 <?= $_key % 2 == 0 ? 'order-1' : 'order-2' ?>">
            <img src="./img/features/<?= $_feature['picture'] ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4 <?= $_key % 2 == 0 ? 'order-2' : 'order-1' ?>">
            <h3><?= $_feature['title'] ?></h3>
            <p class="fst-italic">
              <?= $_feature['details'] ?>
            </p>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section><!-- End Features Section -->

</main><!-- End #main -->


<?php

include_once './inc/footer.php';
