<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/logo.png">
  <link rel="icon" type="image/png" href="../../assets/img/logo.png">
  <title>
    HEALTHAPP_WEB
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <?php

  session_start();
  if (isset($_SESSION['NV_MAIL'])) {
    $email = $_SESSION['NV_MAIL'];
    include '../../connectsql.php';
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
          <img src="../../assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold text-white">HealthApp_Web</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="../../index.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Trang ch???</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Danh m???c</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../loaiduoc/loaiduoc.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">category</i>
              </div>
              <span class="nav-link-text ms-1">Lo???i d?????c</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../duoc/duoc.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">vaccines</i>
              </div>
              <span class="nav-link-text ms-1">D?????c ph???m</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../loaibenh/loaibenh.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">category</i>
              </div>
              <span class="nav-link-text ms-1">Lo???i b???nh</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../benh/benh.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">sick</i>
              </div>
              <span class="nav-link-text ms-1">B???nh</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white  " href="../bantin/bantin.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">newspaper</i>
              </div>
              <span class="nav-link-text ms-1">B???n tin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../khambenh/khambenh.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">fitness_center</i>
              </div>
              <span class="nav-link-text ms-1">Luy???n t???p</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Qu???n l?? d??? li???u</h6>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white " href="../nguoidung/nguoidung.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">face</i>
              </div>
              <span class="nav-link-text ms-1">Ng?????i d??ng</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../lichhen/lichhen.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">calendar_month</i>
              </div>
              <span class="nav-link-text ms-1">L???ch h???n</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary " href="chiso.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">format_list_numbered</i>
              </div>
              <span class="nav-link-text ms-1">Ch??? s???</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../nhanvien/nhanvien.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">groups</i>
              </div>
              <span class="nav-link-text ms-1">Nh??n vi??n</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">T??i kho???n</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/profile.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Th??ng tin c?? nh??n</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../samples/logout.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">logout</i>
              </div>
              <span class="nav-link-text ms-1">????ng xu???t</span>
            </a>
          </li>
        </ul>
      </div>

    </aside>
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
              <div class="input-group input-group-outline">
                <label class="form-label">Nh???p t??m ki???m...</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a class="nav-link" id="profileDropdown" href="../samples/changepass.php" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../assets/img/u.png" alt="">
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
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3" style="text-align: center;">Ch??? s??? g???n ????y c???a ng?????i d??ng</h6>
                </div>
              </div>
              <br>
              <div style="align-self:center ;">
                <td>
                  <form action="mail.php" method="POST" enctype="multipart/form-data">
                  <button class='btn btn-dark'>Th??ng b??o</button>                
                  </form>
                  </td>
                
                  <td><a href='../khambenh/ls.php'><button class='btn btn-dark'>In</button></a></td>
                  
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>

                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">T??n ng?????i d??ng</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">BMI</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">???????ng huy???t</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Huy???t ??p</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cholesterol</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nh???p tim</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include '../../connectsql.php';
                      $sql = "SELECT * FROM chiso INNER JOIN nguoidung on chiso.ND_ID = nguoidung.ND_ID ";
                      // $sql="SELECT * 
                      // FROM chiso INNER JOIN nguoidung 
                      // on chiso.ND_ID = nguoidung.ND_ID 
                      // WHERE CS_NGAYNHAP = (SELECT MAX(CS_NGAYNHAP) FROM chiso)";
                      //echo $sql;
                      // $sql="SELECT * from chiso 
                      // where chiso.CS_ID = 'id' 
                      // and (chiso.CS_NGAYNHAP = (select max(T.CS_NGAYNHAP) from chiso
                      // where chiso.ID = 'id'))";

                      $result = $con->query($sql);
                      $stt = 0;
                      while ($row = $result->fetch_assoc()) {
                        $stt = $stt + 1;
                        echo "<tr>
                      <td >" . $stt . " </td>
                      <td >" . $row['ND_HOVATEN'] . "</td>
                      <td >" . $row['CS_BMI'] . "</td>
                      <td >" . $row['CS_DUONGHUYET'] . "</td>
                      <td >" . $row['CS_HUYETAP'] . "</td>
                      <td >" . $row['CS_CHOLESTEROL'] . "</td>
                      <td >" . $row['CS_NHIPTIM'] . "</td>
                      
                      </tr>";
                      }

                      echo "</tbody></table>";
                      $con->close();
                      ?>


                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer py-4  ">

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
            <h5 class="mt-3 mb-0">C???u h??nh giao di???n</h5>
            <p>Xem c??c t??y ch???n b???ng ??i???u khi???n c???a ch??ng t??i.</p>
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
            <h6 class="mb-0">M??u thanh b??n</h6>
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
            <h6 class="mb-0">Ch??? ?????</h6>
            <p class="text-sm">Ch???n m??u cho trang web</p>
          </div>
          <div class="d-flex">
            <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          </div>
          <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
          <!-- Navbar Fixed -->
          <div class="mt-3 d-flex">
            <h6 class="mb-0">Thanh ??i???u h?????ng</h6>
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
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/chartjs.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/material-dashboard.min.js?v=3.0.4"></script>
  <?php
  } else {
    header("location: ../healthapp_web/pages/samples/login.php");
  }
  ?>
</body>

</html>