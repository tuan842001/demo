<?php
session_start();
error_reporting(0);
include('backend/pdo.php');
if(isset($_POST['submit2']))
 {
  $id_cart=intval($_GET['pkgid']);
  $Ma_khach=$_SESSION['login'];
  $cart_status=0;
  $sql="INSERT INTO pay(id_cart,Ma_khach,status) VALUES(:id_cart,:Ma_khach,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':id_cart',$id_cart,PDO::PARAM_STR);
$query->bindParam(':Ma_khach',$Ma_khach,PDO::PARAM_STR);
$query->bindParam(':status',$cart_status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}