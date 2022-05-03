<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <? wp_head(); ?>

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?
  $background_image = get_theme_mod('background');
  if ($background_image != '') :
  ?>
    <style>
      body::before {
        background-image: url("<?= $background_image; ?>");
      }
    </style>
  <? endif; ?>
</head>

<body>