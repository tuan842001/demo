</head>

<body>
<?php 
	if(isset($_GET['clear'])){
		unset($_SESSION['khach_hang']);
	}
?>  
	<div class="super_container">
    <!-- Header -->
    <header class="header">
      <div class="header_container">
        <div class="row">
          <div class="col">
            <div class="header_container d-flex flex-row align-items-center justify-content-start">
              <!-- Logo -->
              <div class="logo_container">
                <div class="logo">
                  <div class="logo_image">
                    <img src="assets/images/logoAveiroTravel.png" alt="">
                  </div>
                </div>
              </div>
              <!-- Main Navigation -->
              <nav class="main_nav ml-auto">
                <?php 
                  if(isset($_SESSION['khach_hang']))
                {?>
                  <ul class="main_nav_list">
                    <li class="main_nav_item 
                      <?php 
                        if(isset($_GET['page']))
                          {$page=$_GET['page'];}
                        else {$page = 'home';}
                      ?>
                    ">
                      <a href="index.php?page=home"></a>
                    </li>

                    <li class="main_nav_item 
                      <?php 
                        if($page == 'home') echo 'active' 
                      ?>
                    ">
                      <a href="index.php?page=home">
                        Trang chủ
                      </a>
                    </li>
                    
                    <li class="main_nav_item 
                      <?php 
                        if($page == 'in-tour') echo 'active' 
                      ?>
                    ">
                      <a href="index.php?page=in-tour">
                        Du lịch trong nước
                      </a>
                    </li>

                    <li class="main_nav_item 
                      <?php 
                        if($page == 'out-tour') echo 'active' 
                      ?>
                    ">
                      <a href="index.php?page=out-tour">
                        Du lịch nước ngoài
                      </a>
                    </li>

                    <li class="main_nav_item 
                      <?php 
                        if($page == 'news') echo 'active' 
                      ?>
                    ">
                      <a href="index.php?page=news">Tin tức</a>
                    </li>

                    <li class="main_nav_item 
                      <?php 
                        if($page == 'contact') echo 'active' 
                      ?>
                    ">
                      <a href="index.php?page=contact">Liên hệ</a>
                    </li>

                    <li class="main_nav_item 
                      <?php  ?>">
                      <a href="">
                        <?=$_SESSION['khach_hang']['name']?>
                      </a>
                    </li>
                                            
                    <li class="main_nav_item">
                      <a href="?clear=true">Đăng xuất</a>
                    </li>
                  </ul>
                <?php }
                  else
                {?>
                  <ul class="main_nav_list">
                    <li class="main_nav_item 
                      <?php 
                        if(isset($_GET['page']))
                          {$page=$_GET['page'];}
                        else 
                          {$page = 'home';}
                      ?>
                    ">
                      <a href="index.php?page=home"></a>
                    </li>

                    <li class="main_nav_item 
                      <?php if($page == 'home') echo 'active' ?>
                    ">
                      <a href="index.php?page=home">Trang chủ</a>
                    </li>
                    
                    <li class="main_nav_item 
                      <?php if($page == 'in-tour') echo 'active' ?>
                    ">
                      <a href="index.php?page=in-tour">Du lịch trong nước</a>
                    </li>

                    <li class="main_nav_item 
                      <?php if($page == 'out-tour') echo 'active' ?>
                    ">
                      <a href="index.php?page=out-tour">Du lịch nước ngoài</a>
                    </li>

                    <li class="main_nav_item 
                      <?php if($page == 'news') echo 'active' ?>
                    ">
                      <a href="index.php?page=news">Tin tức</a>
                    </li>

                    <li class="main_nav_item 
                      <?php if($page == 'contact') echo 'active' ?>
                    ">
                      <a href="index.php?page=contact">Liên hệ</a>
                    </li>

                    <li class="main_nav_item 
                      <?php if($page == 'login') echo 'active' ?>
                    ">
                      <a href="index.php?page=login">Đăng nhập</a>
                    </li>

                    <li class="main_nav_item 
                      <?php if($page == 'register') echo 'active' ?>
                    ">
                      <a href="index.php?page=register">Đăng ký</a>
                    </li>
                  </ul>
                <?php 
                } ?>
              </nav>

              <!-- Search -->
              <div class="search">
                <form action="#" class="search_form">
                  <input 
                    type="search" 
                    name="search_input" 
                    class="search_input ctrl_class"
                    required="required" 
                    placeholder="Tìm tour"
                  >
                  <button 
                    type="submit" 
                    class="search_button ml-auto ctrl_class
                  ">
                    <img src="assets/images/search.png" alt="">
                  </button>
                </form>
              </div>
              <!-- Hamburger -->
              <div class="hamburger ml-auto">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Menu -->
    <div class="menu_container menu_mm">
      <!-- Menu Close Button -->
      <div class="menu_close_container">
          <div class="menu_close"></div>
      </div>
      <!-- Menu Items -->
      <div class="menu_inner menu_mm">
        <div class="menu menu_mm">
          <div class="menu_search_form_container">
            <form action="#" id="menu_search_form">
              <input type="search" class="menu_search_input menu_mm">
              <button 
                id="menu_search_submit" 
                class="menu_search_submit" 
                type="submit
              ">
                <img src="assets/images/search_2.png" alt="">
              </button>
            </form>
          </div>
              
          <?php 
            if(isset($_SESSION['khach_hang']))
          {?>
            <ul class="menu_list menu_mm">
              <li class="menu_item menu_mm 
                <?php 
                  if(isset($_GET['page']))
                    {$page=$_GET['page'];}
                  else 
                    {$page = 'home';}
                ?>
              ">
                <a href="index.php?page=home"></a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=home">Trang chủ</a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=out-tour">DL nước ngoài</a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=in-tour">DL trong nước</a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=news">Tin tức</a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=contact">Liên hệ</a>
              </li>
              <li class="menu_item menu_mm 
                <?php  ?>">
                <a href="">
                  <?=$_SESSION['khach_hang']['name']?>
                </a>
              </li>
              <li class="menu_item menu_mm">
                <a href="?clear=true">Đăng xuất</a>
              </li>
            </ul>
          <?php }
          else
          {?>
            <ul class="main_nav_list">
              <li class="menu_item menu_mm 
                <?php 
                  if(isset($_GET['page']))
                    {$page=$_GET['page'];}
                  else 
                    {$page = 'home';}
                ?>">
                <a href="index.php?page=home"></a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=home">Trang chủ</a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=out-tour">DL nước ngoài</a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=in-tour">DL trong nước</a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=news">Tin tức</a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=contact">Liên hệ</a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=login">Đăng nhập</a>
              </li>
              <li class="menu_item menu_mm">
                <a href="index.php?page=register">Đăng ký</a>
              </li>
            </ul>
          <?php } ?>
          <!-- Menu Social -->
          <div class="menu_social_container menu_mm">
            <ul class="menu_social menu_mm">
              <li class="menu_social_item menu_mm">
                <a href="#">
                  <i class="fa fa-pinterest" aria-hidden="true"></i>
                </a>
              </li>
              <li class="menu_social_item menu_mm">
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </li>
              <li class="menu_social_item menu_mm">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="menu_social_item menu_mm">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="menu_social_item menu_mm">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="menu_copyright menu_mm">
            Aveiro Travel All rights reserved
          </div>
        </div>
      </div>
    </div>
  </div>