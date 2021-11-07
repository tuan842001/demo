<?php 
  require "component/header/header-tour-detail.php";
?>

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
?>



<div class="">	
  <?php
	$banner = banner_select_loaitour_1();
	foreach ($banner as $value) 
    { extract($value);
	  echo
        "<div class='' style='height:300px'>
		  <img style='width:100%;height:100%' src='$Hinh_anh'>
		  <div class='tour_content'>
			<h3>Chi tiết tour</h3>
		  </div>
		</div>";
    }
  ?>
</div>

<!--chitiet-->
<section class="canhcam-shop-details-1">
  <article class="product-details">
	<div class="container">
				
		
      <?php
		$matour = $_GET['matour'];
		$chitiettour = tour_select_by_id($matour);
		extract($chitiettour);
		echo 
         "<div class='container'>
            <div class='row'>
              <div class='col-md-8 col-12 left'>
			    <h2>".$Ten_tour."</h2>
              </div>
              <div class='col-md-4 col-12 right'>
			  	<div class='group-price'>
                  <div class='sale-price'>
					  <span class='price'>$Gia</span>
                  </div>
                </div>"?>


				<?php if($_SESSION['login'])
  {?>
	<li class="spe" align="center">
	<button type="submit" name="submit2" class="btn-primary btn">Book</button>
	</li>
	<?php } else {?>
	  <li class="sigi" align="center" style="margin-top: 1%">
	<a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Book</a></li>
	<?php } ?>
	<div class="clearfix"></div>
                <div class='group-add-cart'>
			     <?php if(isset($_SESSION['khach_hang'])) {?>
                  <a href='pages/pay.php' class='add-to-cart'>
                    <i class='fa fa-shopping-cart'></i>
                    <span>
                      Đặt ngay
                    </span>
                  </a>
				<?php } else {?>
				  <div class='alert alert-danger'>
				    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<strong>Vui long dang nhap</strong> <a href="?page=login">dang nhap</a>
				  </div>
				<?php } ?>

                  <a href='?page=contact' class='add-to-group' data-bs-toggle='modal' data-bs-target='#supportModal'>
                    <span>Liên hệ tư vấn</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
		<?php
		$matour = $_GET['matour'];
		$chitiettour = tour_select_by_id($matour);
		extract($chitiettour);
		echo 
          "<div class='row d-flex mt-3'>		
			<div class='col-md-12 order-md-1 slider-img'>
			  <div><img class='hinhproduct' src='$Hinh_anh' /></div>
			</div>
		  </div>

		  <div class='row'>
		  	<div class='col-md-12'>
			  <div class='group-services'>
			  	<div class='item'>
				  <i class='fa-solid fa-calendar'></i>
				  <span>Thời gian</span>
				  <p>$Ngay_khoihanh</p>
				</div>
			  	<div class='item'>
				  <i class='fa-solid fa-map'></i>
				  <span>Điểm thăm quan</span>
				  <p>$Mo_ta</p>
				</div>
			  	<div class='item'>
				  <i class='fa-solid fa-fire'></i>
				  <span>Ẩm thực</span>
				  <p></p>
				</div>
			  	<div class='item'>
				  <i class='fa-solid fa-hotel'></i>
				  <span>Khách sạn</span>
				  <p></p>
				</div>
			  	<div class='item'>
				  <i class='fa-solid fa-car-side'></i>
				  <span>Phương tiện di chuyển</span>
				  <p></p>
				</div>
				<div class='item'>
				  <i class='fa-brands fa-servicestack'></i>
				  <span>Dịch vụ đi kèm</span>
				  <p></p>
				</div>
			  </div>
		  	</div>  
		  </div>

		  <div class='row tab-product'>
			<div class='col-12'>
			  <nav>
				<div 
                  class='nav nav-tabs' 
				  id='nav-tab' 
				  role='tablist'
				>
                  <a 
				    class='nav-item 
					nav-link active' 
					id='tab1-tab' 
					data-toggle='tab' 
					href='#tab1' 
					role='tab' 
					aria-controls='tab1' 
					aria-selected='true'
				  >
				    MÔ TẢ CHUYẾN ĐI
				  </a>
                  <a 
				    class='nav-item 
					nav-link' 
					id='tab2-tab' 
					data-toggle='tab' 
					href='#tab2' 
					role='tab' 
					aria-controls='tab2' 
					aria-selected='false'
				  >
				    THỜI GIAN ĐI
				  </a>
                  <a 
				    class='nav-item 
					nav-link' 
					id='tab4-tab' 
					data-toggle='tab' 
					href='#tab4' 
					role='tab' 
					aria-controls='tab2' 
					aria-selected='false'
				  >
				  	CHI TIẾT TOUR
				  </a>
				</div>
			  </nav>

			  <div class='tab-content' id='nav-tabContent'>
				<div class='tab-pane fade show active' id='tab1' role='tabpanel' aria-labelledby='tab1-tab'>
				  <div class='text'>
					<h6>$Chi_tiet</h6>
				  </div>
				</div>

				<div class='tab-pane fade' id='tab2' role='tabpanel' aria-labelledby='tab2-tab'> 
				  <div class='text'>
					<h3>$Ngay_khoihanh</h3>
				  </div>
				</div>
									
				<div class='tab-pane fade' id='tab4' role='tabpanel' aria-labelledby='tab4-tab'> 
				  <div class='text'>
					<h4>$Chi_tiet</h4>
				  </div>
				</div>
			  </div>
			</div>
		  </div>";


	  ?>
	  
	</div>
  </article>
</section>
<section>
  <div class="container">	
    <div class="row">
	  <div class="col">
		<div class="section_title text-center">
		  <h2>Tour khác</h2>
	    </div>
	  </div>
	</div>
  </div>
  <div class="special_content">
	<div class="special_slider_container">
	  <div class="owl-carousel owl-theme special_slider">
		<?php
		  $tour = tour_select_all();
		  foreach ($tour as $value) 
          { extract($value);
			echo 
            "<div class='owl-item'>
			  <a href='index.php?page=tour-detail&matour=".$Ma_tour."'>
			    <div class='special_item'>
			      <div class='special_item_background'>
                    <img src='$Hinh_anh' >
                  </div>
			      <div class='special_item_content text-center'>
			        <div class='special_category'>$Ten_tour</div>
			      </div>
			    </div>	
              </a>
			</div>";
          }
	    ?>
      </div>

	  <div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
		<img src="assets/images/special_slider.png" alt="">
	  </div>
	</div>
  </div>
</section>

<?php 
  require "./component/footer/footer.php";
?>