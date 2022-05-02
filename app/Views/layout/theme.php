<!doctype html>
<html lang="pt_BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="EWM Eventos">
  <meta name="generator" content="Edmar 0.0.1">
  <title>StartBSB | <?= $this->renderSection('title') ?></title>

  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />

  <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png" />
  <link rel="manifest" href="<?php echo site_url('/'); ?>assets/favicons/site.webmanifest" />
  <link rel="mask-icon" href="<?php echo site_url('/'); ?>assets/favicons/safari-pinned-tab.svg" color="#5bbad5" />

  <link rel="icon" href="<?php echo site_url('/'); ?>assets/favicons/favicon.ico" />
  <link rel="icon" href="<?php echo site_url('/'); ?>assets/favicons/favicon.svg" type="image/svg+xml" />


  <!-- Bootstrap core CSS -->
  <link href="<?php echo site_url('/'); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo site_url('/'); ?>assets/fonts/fonts.css" rel="stylesheet">
  <link href="<?php echo site_url('/'); ?>assets/css/main.css" rel="stylesheet">

  <!-- Start::Render Section Page Style -->
  <?= $this->renderSection('styles') ?>
  <!-- End::Render Section Page Style -->

</head>

<body class="d-flex vh-100 text-center text-white bg-default">

  <!-- Start::Render Section Content-->
  <?= $this->renderSection('content') ?>
  <!-- End::Render Section Content-->

  <script src="<?php echo site_url('/'); ?>assets/js/jquery-3.6.0.min.js"></script>
  <script src="<?php echo site_url('/'); ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Start::Render Section Page Scripts -->
  <?= $this->renderSection('scripts') ?>
  <!-- End::Render Section Page Scripts -->


</body>

</html>