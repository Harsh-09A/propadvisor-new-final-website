<?php
include 'includes/loader.php';
http_response_code(404); // tell browser it's a 404
?>

<!DOCTYPE html>
<html lang="en">

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

<body
  data-mobile-nav-trigger-alignment="right"
  data-mobile-nav-style="modern"
  data-mobile-nav-bg-color="#000">

  <?php include_once "./includes/header.php" ?>
  <!-- start section -->
  <section
    class="top-space-margin md-h-550px">
    <div class="container h-100">

      <div class="row align-items-center justify-content-center h-100">
        <div
          class="col-12 col-xl-6 col-lg-7 col-md-9 text-center">
          <h6 class="text-dark-gray fw-600 mb-5px text-uppercase">Ooops!</h6>
          <h1 class="fs-200 sm-fs-170 text-dark-gray fw-700 ls-minus-8px">
            404
          </h1>
          <h4 class="text-dark-gray fw-600 sm-fs-22 mb-10px ls-minus-1px">
            Page not found!
          </h4>
          <p class="mb-30px lh-28 sm-mb-30px w-55 md-w-80 sm-w-95 mx-auto">
            The resource you are looking for doesn't exist or might have been
            removed.
          </p>
          <a
            href="<?php echo buildUrl('index.php'); ?>"
            class="btn btn-large left-icon btn-rounded btn-dark-gray btn-box-shadow text-transform-none">
            <i class="fa-solid fa-arrow-left"></i>
            Back to homepage
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->

  <?php include_once "./includes/footer.php" ?>

</body>

</html>