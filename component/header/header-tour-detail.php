<!DOCTYPE html>
<html lang="vn">
<head>
  <?php
    $tour = tour_select_all();
	  foreach ($tour as $value) 
    { extract($value);
		  echo 
      "<title>$Ten_tour</title>";
    }
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap4/bootstrap.min.css">
	<link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css">
  
  <link rel="stylesheet" type="text/css" href="assets/styles/header.css">
  <link rel="stylesheet" type="text/css" href="assets/styles/footer.css">

  <link rel="stylesheet" type="text/css" href="assets/styles/index.css">
  <link rel="stylesheet" type="text/css" href="assets/styles/tour.css">
  <link rel="stylesheet" type="text/css" href="assets/styles/tour-details.css">

  <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <!-- js -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/custom.js"></script>
	<script src="assets/js/offers_custom.js"></script>
	<script src="assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="assets/plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="assets/plugins/easing/easing.js"></script>
	<script src="assets/plugins/parallax-js-master/parallax.min.js"></script>
  <script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>


<?php
  include "component/header/header.php";
?>
