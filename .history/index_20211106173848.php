<?php
	session_start();
    // thêm thư viện
    require "backend/pdo.php";
	require "backend/loai-tour.php";
	require "backend/tour.php";
	require "backend/news.php";
	require "backend/gallery.php";
	require "backend/khachhang.php";
	require "backend/banner.php";


    if(isset($_GET['page'])){
	  $page=$_GET['page'];
	}
	else {
	  $page = 'home';
	}

	if($page=="home")
	{
	  require "pages/home.php";
	}
	elseif($page=="in-tour")
	{
	  require "pages/in-tour.php";
	}
	elseif($page=="out-tour")
	{
	  require "pages/out-tour.php";
	}
	elseif($page=="tour-detail")
	{
	  require "pages/tour-detail.php";
	}
	elseif($page=="news")
	{
		require "pages/news.php";
	}
	elseif($page=="news-detail")
	{
	  require "pages/news-detail.php";
	}
	elseif($page=="contact")
	{
	  require "pages/contact.php";
	}
	elseif($page=="login")
	{
	  require "pages/login.php";
	}
	elseif($page=="register")
	{
	  require "pages/register.php";
	}
	else{
	  echo '';
	}
?>

