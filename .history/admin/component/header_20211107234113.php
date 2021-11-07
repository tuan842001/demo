<header class="header">
  <nav class="navbar fixed-top">       
    <!-- Begin Search Box-->
    <div class="search-box">
      <button class="dismiss">
        <i class="ion-close-round"></i>
      </button>
      <form id="searchForm" action="#" role="search">
        <input type="search" placeholder="Tìm kiếm thứ gì đó..." class="form-control">
      </form>
    </div>
    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
      <div class="navbar-header">
        <a href="admin.php" class="navbar-brand">
          <div class="brand-image brand-small">
            <img src="admin/assets/img/logoAveiroTravel.png" alt="logo" class="logo-small">
          </div>
          <div class="brand-image brand-small">
            <img src="admin/assets/img/logoAveiroTravel.png" alt="logo" class="logo-small">
          </div>
        </a>
        <a id="toggle-btn" href="#" class="menu-btn active">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
      <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
        <li class="nav-item d-flex align-items-center">
          <a id="search" href="#">
            <i class="la la-search"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
            <i class="la la-bell animated infinite swing"></i>
            <span class="badge-pulse"></span>
          </a>
          <ul aria-labelledby="notifications" class="dropdown-menu notification">
            <li>
              <div class="notifications-header">
                <div class="title">Thông báo (4)</div>
                <div class="notifications-overlay"></div>
                <img src="admin/assets/img/notifications/01.jpg" alt="..." class="img-fluid">
              </div>
            </li>
            <li>
            <a href="#">
              <div class="message-icon">
                <i class="la la-user"></i>
              </div>
              <div class="message-body">
                <div class="message-body-heading">
                  Người dùng mới đã đăng ký
                </div>
                <span class="date">2 giờ trước</span>
              </div>
            </a>
            </li>
            <li>
              <a href="#">
                <div class="message-icon">
                  <i class="la la-calendar-check-o"></i>
                </div>
                <div class="message-body">
                  <div class="message-body-heading">
                    Sự kiện mới đã được thêm vào
                  </div>
                  <span class="date">7 giờ trước</span>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="message-icon">
                  <i class="la la-history"></i>
                </div>
                <div class="message-body">
                  <div class="message-body-heading">
                    Máy chủ được khởi động lại
                  </div>
                  <span class="date">7 giờ trước</span>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="message-icon">
                  <i class="la la-twitter"></i>
                </div>
                <div class="message-body">
                  <div class="message-body-heading">
                    Bạn có 3 người theo dõi mới
                  </div>
                  <span class="date">10 giờ trước</span>
                </div>
              </a>
            </li>
            <li>
              <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">Xem tất cả thông báo</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
            <i class="fa-solid fa-user"></i>        
          </a>
          <ul aria-labelledby="user" class="user-size dropdown-menu">
            <li class="welcome">
              <a href="#" class="edit-profil">
                <i class="la la-gear"></i>
              </a>
              <img src="admin/assets/img/avatar/avatar-manh.jpg" alt="..." class="rounded-circle">
            </li>
            <li>
              <a href="pages-profile.html" class="dropdown-item"> 
                Hồ sơ
              </a>
            </li>
            <li>
              <a href="app-mail.html" class="dropdown-item"> 
                Tin nhắn
              </a>
            </li>
            <li>
              <a href="#" class="dropdown-item no-padding-bottom"> 
                Cài đặt
              </a>
            </li>
            <li class="separator"></li>
            <li>
              <a href="pages-faq.html" class="dropdown-item no-padding-top"> 
                Câu hỏi thường gặp
              </a>
            </li>
            <li>
              <a rel="nofollow" href="pages-login.html" class="dropdown-item logout text-center">
                <i class="ti-power-off"></i>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- End Header -->