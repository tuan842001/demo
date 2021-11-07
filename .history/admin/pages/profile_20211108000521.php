   

        <div class="page">
            <?php 
                require "admin/component/header.php";
            ?> 

            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <?php 
                        require "admin/component/navbar.php";
                    ?> 
                </div>
                <!-- End Left Sidebar -->

                <div class="content-inner">
                <div class="container-fluid">
                        <!-- Begin Page Header-->
                        
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title">Thông tin Admin</h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                            <li class="breadcrumb-item active">admin</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-3">
                                <!-- Begin Widget -->
                                <div class="widget has-shadow">
                                    <div class="widget-body">
                                        <div class="mt-5">
                                            <img src="admin/assets/img/logo-header.png" style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                                        </div>
                                        <h3 class="text-center mt-3 mb-1">Halotrip</h3>
                                        <p class="text-center">halotrip@gmail.com</p>
                                        <div class="em-separator separator-dashed"></div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-bell la-2x align-middle pr-2"></i>Thông báo</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-bolt la-2x align-middle pr-2"></i>Hoạt động</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-clipboard la-2x align-middle pr-2"></i>Nhiệm vụ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-gears la-2x align-middle pr-2"></i>Cài đặt</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-xl-9">
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Hồ sơ Halotrip</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal">
                                                <?php
                                                    $admin = admin_select_all(); // goi phuong thuc lay danh sach
                                                    foreach ($admin as $item){
                                                        extract($item);
                                                        echo "<div class='form-group row d-flex align-items-center mb-5'>";
                                                        echo    "<label class='col-lg-2 form-control-label d-flex justify-content-lg-end'>Tên</label>";
                                                        echo    "<div class='col-lg-6'>";
                                                        echo        "<h4>$Ten_admin</h4>";
                                                        echo    "</div>";
                                                        echo"</div>";
                                                        echo"<div class='form-group row d-flex align-items-center mb-5'>";
                                                        echo    "<label class='col-lg-2 form-control-label d-flex justify-content-lg-end'>Email</label>";
                                                        echo   "<div class='col-lg-6'>";
                                                        echo        "<h4>$Email</h4>";
                                                        echo   "</div>";
                                                        echo"</div>";
                                                        echo"<div class='form-group row d-flex align-items-center mb-5'>";
                                                        echo  "<label class='col-lg-2 form-control-label d-flex justify-content-lg-end'>Số điện thoại</label>";
                                                        echo   "<div class='col-lg-6'>";
                                                        echo        "<h4>$Phone</h4>";
                                                        echo  "</div>";
                                                        echo"</div>";
                                                        }
                                                ?>
                                        </form>
                                        <div class="em-separator separator-dashed"></div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    <?php 
                        require "admin/component/footer.php";
                    ?> 
                </div>
            </div>
            <!-- End Page Content -->
        </div>