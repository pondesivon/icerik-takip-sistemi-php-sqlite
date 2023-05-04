<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <!-- Meta Alanı Başlangıç -->
  <meta charset="UTF-8">
  <!-- Meta Alanı Bitiş -->

  <!-- Title Başlangıç -->
  <title><?php echo $title; ?></title>
  <!-- Title Bitiş -->
  
  <!-- Favicon Başlangıç -->
  <link rel="icon" type="image/x-icon" href="yonetim/favicon.ico" />
  <!-- Favicon Bitiş -->

  <!-- CSS Alanı Başlangıç -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/prism.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- CSS Alanı Bitiş -->
</head>
<body class="bg-acik-gri">
  
  <!-- Navbar Üst Başlangıç -->
  <?php require_once('navbar-menu-ust.php'); ?>
  <!-- Navbar Üst Bitiş -->