<!doctype html>
<html class="no-js" lang="en">

<?php include_once "./includes/loader.php" ?>

<head>
  <title>PropAdvisor - We Bring You Home</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="author" content="PropAdvisor" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="description" content="We Bring You Home" />
  <base href="/" />
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

<?php include_once "./includes/blog-loader.php" ?>
<?php
$slug = $_GET['slug'] ?? '';

if (!empty($blogs) && is_array($blogs)) {
  foreach ($blogs as $post) {
    if (!empty($post['slug']) && $post['slug'] === $slug) {
      $blog = $post;
      break;
    }
  }
}

if (!$blog) {
  // die("Project not found!");
  header("Location: /404.php");
}
?>

<body
  data-mobile-nav-trigger-alignment="right"
  data-mobile-nav-style="modern"
  data-mobile-nav-bg-color="#000">

  <?php include_once "./includes/header.php" ?>

  <!-- start section -->
  <section class="top-space-margin">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <?php
          // Format the date
          $date = new DateTime($blog['date']);
          $formattedDate = $date->format("d F Y");
          ?>

          <span class="fs-18 mb-30px sm-mb-20px d-inline-block">By
            <a
              href=""
              class="text-dark-gray text-decoration-line-bottom fw-500">PropAdvisor</a>
            <!-- in
              <a
                href="demo-accounting-news.php"
                class="text-dark-gray text-decoration-line-bottom fw-500"
                >Marketing</a
              > -->
            on <?php echo $formattedDate; ?> </span>
          <h1 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-0">
            <?php echo $blog['title']; ?>
          </h1>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->

  <!-- start section -->
  <section class="py-0 ps-13 pe-13 lg-ps-4 lg-pe-4 sm-px-0">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <!-- <img src="https://placehold.co/1410x850" class="w-100" alt="" /> -->
          <img
            src="<?php echo $blog['featured_image']['original']; ?>"
            class="w-100"
            alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->

  <!-- start section -->
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <?php echo $blog['content']; ?>
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