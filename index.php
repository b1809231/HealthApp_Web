<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logo.png">
  <link rel="icon" type="image/png" href="./assets/img/logo.png">
  <title>
    HEALTHAPP_WEB
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <?php
  session_start();
  if (isset($_SESSION['NV_MAIL'])) {
    $email = $_SESSION['NV_MAIL'];
    include 'connectsql.php';
    $sql = "SELECT *  FROM nhanvien where NV_MAIL='$email'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $user = $row['NV_HOTEN'];
    $id_ql = $row['NV_ID'];
  ?>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
          <img src="./assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold text-white">HealthApp_Web</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary" href="./index.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Trang chủ</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Danh mục</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./pages/loaiduoc/loaiduoc.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">category</i>
              </div>
              <span class="nav-link-text ms-1">Loại dược</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./pages/duoc/duoc.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">vaccines</i>
              </div>
              <span class="nav-link-text ms-1">Dược phẩm</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./pages/loaibenh/loaibenh.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">category</i>
              </div>
              <span class="nav-link-text ms-1">Loại bệnh</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./pages/benh/benh.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">sick</i>
              </div>
              <span class="nav-link-text ms-1">Bệnh</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./pages/bantin/bantin.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">newspaper</i>
              </div>
              <span class="nav-link-text ms-1">Bản tin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./pages/khambenh/khambenh.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">fitness_center</i>
              </div>
              <span class="nav-link-text ms-1">Lịch sử khám bệnh</span>
            </a>
          </li>
          <li class="nav-item">
                        <a class="nav-link text-white " href="./pages/sotiem/sotiem.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">fitness_center</i>
                            </div>
                            <span class="nav-link-text ms-1">Sổ tiêm người dùng</span>
                        </a>
                    </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Quản lý dữ liệu</h6>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white " href="./pages/nguoidung/nguoidung.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">face</i>
              </div>
              <span class="nav-link-text ms-1">Người dùng</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./pages/lichhen/lichhen.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">calendar_month</i>
              </div>
              <span class="nav-link-text ms-1">Lịch hẹn</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./pages/chiso/chiso.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">format_list_numbered</i>
              </div>
              <span class="nav-link-text ms-1">Chỉ số</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./pages/nhanvien/nhanvien.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">groups</i>
              </div>
              <span class="nav-link-text ms-1">Nhân viên</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Tài khoản</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./pages/samples/changepass.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Đổi mật khẩu</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
          <a class="btn bg-gradient-primary mt-4 w-100" href="pages/samples/logout.php" type="button">Đăng xuất</a>
        </div>
      </div>
    </aside>
    <!-- ----------------------------------------------------------------- -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <?php
          $day = getdate();
          $thu = $day['weekday'];
          $ngay = $day['mday'];
          $thang = $day['mon'];
          $nam = $day['year'];
          ?>
          <p style="font-size: 20px"> <?php echo " " . $thu . "  " . $ngay . "/" . $thang . "/" . $nam; ?></p>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">

            </div>
            <ul class="navbar-nav  justify-content-end">

              <li class="nav-item d-flex align-items-center">
                <a class="nav-link" id="profileDropdown" href="pages/samples/changepass.php" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../healthapp_web/assets/img/u.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $user; ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="container-fluid py-4">
        <div class="row">
          <!-- -----------------nguoi dung------------------- -->
          <?php
          //Viet cau truy van Sql
          $sql = "SELECT COUNT(*) as sumuser FROM nguoidung";
          //echo $sql;
          //thưc hien truy van
          $result4 = $con->query($sql);
          $row4 = $result4->fetch_assoc();
          ?>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Người dùng</p>
                  <h4 class="mb-0">&nbsp;&nbsp;&nbsp;<?php echo $row4['sumuser']; ?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
              </div>
            </div>
          </div>
          <!-- -------------------------DMTHUOC------------------------ -->
          <?php
          //Viet cau truy van Sql
          $sql = "SELECT COUNT(*) as sumld FROM loaiduoc";
          //echo $sql;
          //thưc hien truy van
          $result4 = $con->query($sql);
          $row4 = $result4->fetch_assoc();
          ?>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">class</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Danh mục thuốc</p>
                  <h4 class="mb-0">&nbsp;&nbsp;&nbsp;<?php echo $row4['sumld']; ?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
              </div>
            </div>
          </div>
          <!-- -------------------------------Thuoc-------------------------- -->
          <?php
          //Viet cau truy van Sql
          $sql = "SELECT COUNT(*) as sumd FROM duoc";
          //echo $sql;
          //thưc hien truy van
          $result4 = $con->query($sql);
          $row4 = $result4->fetch_assoc();
          ?>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">medication</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Thuốc</p>
                  <h4 class="mb-0">&nbsp;&nbsp;&nbsp;<?php echo $row4['sumd']; ?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
              </div>
            </div>
          </div>
          <!-- -------------------------------------Lichhen------------------------------------- -->
          <?php
          //Viet cau truy van Sql
          $sql = "SELECT COUNT(*) as sumlh FROM lichtuvan";
          //echo $sql;
          //thưc hien truy van
          $result4 = $con->query($sql);
          $row4 = $result4->fetch_assoc();
          ?>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">today</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Lịch hẹn</p>
                  <h4 class="mb-0">&nbsp;&nbsp;&nbsp;<?php echo $row4['sumlh']; ?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid py-4">
        <div class="row">
          <!-- -----------------Danh muc benh------------------- -->
          <?php
          //Viet cau truy van Sql
          $sql = "SELECT COUNT(*) as sumlb FROM chuyenkhoa";
          //echo $sql;
          //thưc hien truy van
          $result4 = $con->query($sql);
          $row4 = $result4->fetch_assoc();
          ?>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">class</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Danh mục bệnh</p>
                  <h4 class="mb-0">&nbsp;&nbsp;&nbsp;<?php echo $row4['sumlb']; ?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
              </div>
            </div>
          </div>
          <!-- -------------------------Benh------------------------ -->
          <?php
          //Viet cau truy van Sql
          $sql = "SELECT COUNT(*) as sumb FROM benh";
          //echo $sql;
          //thưc hien truy van
          $result4 = $con->query($sql);
          $row4 = $result4->fetch_assoc();
          ?>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">sick</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Bệnh</p>
                  <h4 class="mb-0">&nbsp;&nbsp;&nbsp;<?php echo $row4['sumb']; ?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
              </div>
            </div>
          </div>
          <!-- -------------------------------Ban tin-------------------------- -->
          <?php
          //Viet cau truy van Sql
          $sql = "SELECT COUNT(*) as sumbt FROM bantin";
          //echo $sql;
          //thưc hien truy van
          $result4 = $con->query($sql);
          $row4 = $result4->fetch_assoc();
          ?>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">pages</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Bản tin</p>
                  <h4 class="mb-0">&nbsp;&nbsp;&nbsp;<?php echo $row4['sumbt']; ?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
              </div>
            </div>
          </div>
          <!-- -------------------------------------Chi so------------------------------------- -->
          <?php
          //Viet cau truy van Sql
          $sql = "SELECT COUNT(*) as sumcs FROM chiso";
          //echo $sql;
          //thưc hien truy van
          $result4 = $con->query($sql);
          $row4 = $result4->fetch_assoc();
          ?>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">format_list_numbered</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Chỉ số</p>
                  <h4 class="mb-0">&nbsp;&nbsp;&nbsp;<?php echo $row4['sumcs']; ?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ------------------------------------------------------------------------------------------------------ -->
      <div class="row" style="text-align: center;">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Thông tin cập nhật trong tháng</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0" style="text-align: center;">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Danh mục</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Thêm</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody style="text-align: center;">
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="assets/img/anh/user.png" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Người dùng</h6>
                          </div>
                        </div>
                      </td>
                      <?php
                      $day = getdate();
                      $thu = $day['weekday'];
                      $ngay = $day['mday'];
                      $thang = $day['mon'];
                      $nam = $day['year'];
                      $sql = " SELECT COUNT(*) as sumndd from nguoidung  WHERE MONTH(created_at) = $thang";
                      $result4 = $con->query($sql);
                      $row4 = $result4->fetch_assoc();
                      ?>

                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">+<?php echo $row4['sumndd']; ?></span>

                        </div>
                      </td>
                    </tr>
                    <!-- ------------------------------------------------------------- -->
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="assets/img/anh/user.png" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Nhân viên</h6>
                          </div>
                        </div>
                      </td>
                      <?php
                      $day = getdate();
                      $thu = $day['weekday'];
                      $ngay = $day['mday'];
                      $thang = $day['mon'];
                      $nam = $day['year'];
                      $sql = " SELECT COUNT(*) as sumndd from nhanvien  WHERE MONTH(created_at) = $thang AND NV_QUYENSD= 1";
                      $result4 = $con->query($sql);
                      $row4 = $result4->fetch_assoc();
                      ?>

                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">+<?php echo $row4['sumndd']; ?></span>

                        </div>
                      </td>
                    </tr>
                    <!-- ------------------------------------------------------------- -->
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="assets/img/anh/medi.png" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Thuốc</h6>
                          </div>
                        </div>
                      </td>
                      <?php
                      $day = getdate();
                      $thu = $day['weekday'];
                      $ngay = $day['mday'];
                      $thang = $day['mon'];
                      $nam = $day['year'];
                      $sql = " SELECT COUNT(*) as sumtt from duoc  WHERE MONTH(created_at) = $thang";
                      $result4 = $con->query($sql);
                      $row4 = $result4->fetch_assoc();
                      ?>

                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">+<?php echo $row4['sumtt']; ?></span>

                        </div>
                      </td>
                    </tr>
                    <!-- --------------------------------------- -->
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="assets/img/anh/si.png" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Bệnh</h6>
                          </div>
                        </div>
                      </td>
                      <?php
                      $day = getdate();
                      $thu = $day['weekday'];
                      $ngay = $day['mday'];
                      $thang = $day['mon'];
                      $nam = $day['year'];
                      $sql = " SELECT COUNT(*) as sumbb from benh  WHERE MONTH(created_at) = $thang";
                      $result4 = $con->query($sql);
                      $row4 = $result4->fetch_assoc();
                      ?>

                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">+<?php echo $row4['sumbb']; ?></span>

                        </div>
                      </td>
                    </tr>
                    <!-- ---------------------------------------------------------------------- -->
                   <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="assets/img/anh/ca.png" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Lịch tư vấn</h6>
                          </div>
                        </div>
                      </td>
                      <?php
                      $day = getdate();
                      $thu = $day['weekday'];
                      $ngay = $day['mday'];
                      $thang = $day['mon'];
                      $nam = $day['year'];
                      $sql = " SELECT COUNT(*) as sumltv from lichtuvan  WHERE MONTH(created_at) = $thang";
                      $result4 = $con->query($sql);
                      $row4 = $result4->fetch_assoc();
                      ?>

                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">+<?php echo $row4['sumltv']; ?></span>

                        </div>
                      </td>
                    </tr>
                    <!-- ---------------------------------------------------- -->
                    
                    <!-- ---------------------------------------------------------------------- -->
                   
                    <!-- ---------------------------------------------------- -->
                     <!-- ---------------------------------------------------------------------- -->
                     <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="assets/img/anh/po.png" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Thông báo</h6>
                          </div>
                        </div>
                      </td>
                      <?php
                      $day = getdate();
                      $thu = $day['weekday'];
                      $ngay = $day['mday'];
                      $thang = $day['mon'];
                      $nam = $day['year'];
                      $sql = " SELECT COUNT(*) as sumtbb from thongbao  WHERE MONTH(created_at) = $thang";
                      $result4 = $con->query($sql);
                      $row4 = $result4->fetch_assoc();
                      ?>

                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">+<?php echo $row4['sumtbb']; ?></span>

                        </div>
                      </td>
                    </tr>
                    <!-- ---------------------------------------------------- -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <footer class="footer py-4  ">
        <div class="container-fluid">
        </div>
      </footer>
      </div>
    </main>
    <div class="fixed-plugin">
      <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="material-icons py-2">settings</i>
      </a>
      <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
          <div class="float-start">
            <h5 class="mt-3 mb-0">Cấu hình giao diện</h5>
            <p>Xem các tùy chọn bảng điều khiển của chúng tôi.</p>
          </div>
          <div class="float-end mt-4">
            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
              <i class="material-icons">clear</i>
            </button>
          </div>
          <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
          <!-- Sidebar Backgrounds -->
          <div>
            <h6 class="mb-0">Màu thanh bên</h6>
          </div>
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors my-2 text-start">
              <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
            </div>
          </a>
          <!-- Sidenav Type -->
          <div class="mt-3">
            <h6 class="mb-0">Chủ đề</h6>
            <p class="text-sm">Chọn màu cho trang web</p>
          </div>
          <div class="d-flex">
            <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          </div>
          <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
          <!-- Navbar Fixed -->
          <div class="mt-3 d-flex">
            <h6 class="mb-0">Thanh điều hướng</h6>
            <div class="form-check form-switch ps-0 ms-auto my-auto">
              <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
            </div>
          </div>
          <hr class="horizontal dark my-3">
          <div class="mt-2 d-flex">
            <h6 class="mb-0">Light / Dark</h6>
            <div class="form-check form-switch ps-0 ms-auto my-auto">
              <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
            </div>
          </div>
          <hr class="horizontal dark my-sm-4">

        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
      var ctx = document.getElementById("chart-bars").getContext("2d");

      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["M", "T", "W", "T", "F", "S", "S"],
          datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "rgba(255, 255, 255, .8)",
            data: [50, 20, 10, 22, 50, 10, 40],
            maxBarThickness: 6
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });


      var ctx2 = document.getElementById("chart-line").getContext("2d");

      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
            maxBarThickness: 6

          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });

      var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

      new Chart(ctx3, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#f8f9fa',
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>

  <?php
  } else {
    header("location: ../healthapp_web/pages/samples/login.php");
  }
  ?>
</body>

</html>