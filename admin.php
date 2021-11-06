<?php
	session_start();
	// add thu vien
	require "backend/pdo.php";
	require "backend/loai-tour.php";
	require "backend/tour.php";
	require "backend/news.php";
	require "backend/gallery.php";
	require "backend/banner.php";
	require "backend/khachhang.php";
	require "backend/admin.php";
	
	// add head
	require "admin/component/head-admin.php";

	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else {
		$page = 'home';
	}
	if($page=="home")
	{
		require "admin/pages/home.php";
	}
	elseif($page=="loai-tour")
	{
		require "admin/pages/loai-tour.php";
	}
	elseif($page=="tour")
	{
		require "admin/pages/tour.php";
	}
	elseif($page=="news")
	{
		require "admin/pages/news.php";
	}
	elseif($page=="gallery")
	{
		require "admin/pages/gallery.php";
	}
	elseif($page=="banner")
	{
		require "admin/pages/banner.php";
	}
	elseif($page=="khach-hang")
	{
		require "admin/pages/khach-hang.php";
	}
	elseif($page=="profile")
	{
		require "admin/pages/profile.php";
	}
	else{
		echo '';
	}

	// add footer
	require "admin/component/foot-admin.php";
?>
