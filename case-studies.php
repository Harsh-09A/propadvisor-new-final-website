<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include_once "./includes/loader.php" ?>

<head>
  <title>PropAdvisor - We Bring You Home</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="author" content="PropAdvisor" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="description" content="We Bring You Home" />
  <!-- favicon icon -->
  <link rel="shortcut icon" href="img/icons/favicon.png" />
  <link rel="apple-touch-icon" href="img/icons/favicon.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="img/icons/favicon.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="img/icons/favicon.png" />
  <!-- google fonts preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- style sheets and font icons -->
  <link rel="stylesheet" href="css/vendors.min.css" />
  <link rel="stylesheet" href="css/icon.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/business.css" />
  <link rel="stylesheet" href="css/my-styles.css" />
  <link rel="stylesheet" href="css/common-theme.css" />
</head>

<body
  data-mobile-nav-trigger-alignment="right"
  data-mobile-nav-style="modern"
  data-mobile-nav-bg-color="#000">

  <?php include_once "./includes/header.php" ?>

  <!-- start page title -->
  <section
    class="pt-0 cover-background ipad-top-space-margin sm-pb-0"
    style="background-image: url('img/about/about_head_banner.jpg')">
    <div class="shape-image-animation p-0 w-100 d-none d-md-block">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        widht="3000"
        height="400"
        viewBox="0 180 2500 200"
        fill="#ffffff">
        <path
          class="st1"
          d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
          <animate
            attributeName="d"
            dur="5s"
            values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
            repeatCount="indefinite" />
        </path>
      </svg>
    </div>
    <div class="container">
      <div
        class="row align-items-center justify-content-center h-500px sm-h-300px">
        <div
          class="col-12 col-lg-6 col-md-10 position-relative text-center page-title-extra-large d-flex flex-wrap flex-column align-items-center justify-content-center"
          data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <span
            class="ps-25px pe-25px pt-5px pb-5px mb-15px text-uppercase fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex text-base-color"><i class="bi bi-megaphone text-base-color icon-small me-10px"></i>Grow your business with us</span>
          <h1 class="mb-20px text-white fw-600 ls-minus-1px">Case Studies</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- end page title -->

  <?php include_once "./includes/case-loader.php" ?>
  <!-- start section -->
  <section class="pt-0 ps-2 pe-2 xs-px-0">
    <div class="container-fluid">
      <div class="row blog-metro">
        <div class="col-12">
          <ul
            class="blog-metro blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large">
            <li class="grid-sizer"></li>

            <?php foreach ($cases as $index => $case): ?>

              <?php
              // Current item number (1-based)
              $num = $index + 1;
              // Add extra class on every 5th item
              $extraClass = ($num === 1 || (($num - 1) % 5 === 0)) ? 'grid-item-double' : ''; ?>

              <!-- start blog item -->
              <li class="grid-item <?= $extraClass ?>">
                <figure class="position-relative mb-0 overflow-hidden">
                  <!--  -->
                  <div class="blog-image bg-dark-slate-blue">
                    <!-- <img src="images/blogs/blog-image-1_1000.jpg" alt="" /> -->
                    <img src="<?php echo $case['featured_image']['thumbnail']; ?>" alt="" />
                    <div class="blog-overlay"></div>
                  </div>
                  <!--  -->

                  <figcaption class="d-flex flex-column justify-content-end h-100 ps-7 pe-7 pt-6 pb-6">
                    <div class="blog-categories mb-auto">
                      <a href="<?php echo buildUrl('case-studies-details.php', $case['slug']); ?>"
                        class="categories-btn bg-white text-dark-gray text-uppercase alt-font fw-700 ms-0 mb-auto align-self-start">
                        <?php echo $case['categories'][0]; ?>
                      </a>
                    </div>

                    <?php
                    // Format the date
                    $date = new DateTime($case['date']);
                    $formattedDate = $date->format("d F Y");
                    ?>
                    <p class="fs-13 fw-500 alt-font mb-5px text-white opacity-6 text-uppercase">
                      <?php echo $formattedDate; ?>
                    </p>

                    <a href="<?php echo buildUrl('case-studies-details.php', $case['slug']); ?>"
                      class="text-white card-title fs-20 lh-30 fw-500 alt-font">
                      <?php echo $case['title']; ?>
                    </a>
                  </figcaption>
                </figure>
              </li>

              <!-- end blog item -->
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->

  <?php include_once "./includes/footer.php" ?>

  <!-- javascript libraries -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/vendors.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>