<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/logo.png">
    <link rel="icon" type="image/png" href="../../assets/img/logo.png">
    <title>
        Sửa bệnh
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
    include '../../connectsql.php';
    session_start();
    if (isset($_SESSION['NV_MAIL'])) {
        $email = $_SESSION['NV_MAIL'];
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
                            <span class="nav-link-text ms-1">Trang chủ</span>
                        </a>
                    </li>
                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Danh mục</h6>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="../loaiduoc/loaiduoc.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">category</i>
                            </div>
                            <span class="nav-link-text ms-1">Loại dược</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="../duoc/duoc.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">vaccines</i>
                            </div>
                            <span class="nav-link-text ms-1">Dược phẩm</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="../loaibenh/loaibenh.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">category</i>
                            </div>
                            <span class="nav-link-text ms-1">Loại bệnh</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="benh.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">sick</i>
                            </div>
                            <span class="nav-link-text ms-1">Bệnh</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white  " href="../bantin/bantin.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">newspaper</i>
                            </div>
                            <span class="nav-link-text ms-1">Bản tin</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white active bg-gradient-primary" href="khambenh.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">fitness_center</i>
                            </div>
                            <span class="nav-link-text ms-1">Lịch sử khám bệnh</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white active bg-gradient-primary" href="sotiem.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">fitness_center</i>
                            </div>
                            <span class="nav-link-text ms-1">Lịch sử tiêm chủng</span>
                        </a>
                    </li>
                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Quản lý dữ liệu</h6>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white " href="../nguoidung/nguoidung.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">face</i>
                            </div>
                            <span class="nav-link-text ms-1">Người dùng</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="../lichhen/lichhen.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">calendar_month</i>
                            </div>
                            <span class="nav-link-text ms-1">Lịch hẹn</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="../chiso/chiso.php">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">format_list_numbered</i>
                            </div>
                            <span class="nav-link-text ms-1">Chỉ số</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="../nhanvien/nhanvien.php">
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
                        <a class="nav-link text-white " href="../pages/profile.html">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Thông tin cá nhân</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="sidenav-footer position-absolute w-100 bottom-0 ">
                <div class="mx-3">
                    <a class="btn bg-gradient-primary mt-4 w-100" href="pages/samples/logout.php" type="button">Đăng xuất</a>
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
                        <!-- tk -->
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                            <!--  -->
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
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3" style="text-align: center;">Sửa lịch sử khám bệnh</h6>
                    </div>
                </div>
                <br>
                <?php
                include '../../connectsql.php';
                $id = $_GET['id_ls'];
                $sql_nd = "SELECT* FROM nguoidung";
                $query_nd = mysqli_query($con, $sql_nd);

                $sql_up = "SELECT * FROM khambenh join nguoidung  on khambenh.ND_ID=nguoidung.ND_ID where KB_ID= '$id'";
                $query_up = mysqli_query($con, $sql_up);
                $row_up = mysqli_fetch_assoc($query_up);

                if (isset($_POST['submit'])) {
                    $nd = $_POST['nguoidung'];
                    $cd = $_POST['chuandoan'];
                    $tu = $_POST['thuocuong'];
                    $nn = $_POST['nhacnho'];
                    $nk = $_POST['ngaykham'];

                    // $sql_sua = "UPDATE duoc SET D_HINHANH='$a' D_TENDUOC='$t', D_THONGTINCHITIET= '$ct', D_GHICHU='$gc',LD_ID='$lt' WHERE D_ID=$id ";
                    $sql_sua = "UPDATE `khambenh` SET `ND_ID`='$nd',`KB_CHUANDOAN`='$cd',`KB_THUOCUONG`='$tu',`KB_NHACNHO`='$nn',`KB_NGAYKHAM`='$nk' WHERE KB_ID= $id";
                    $query = mysqli_query($con, $sql_sua);
                    $_SESSION['message'] = "Đã sửa";
                    header('location: khambenh.php');
                }

                ?>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="">Người dùng</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="nguoidung" class="form-control" value="<?php echo $row_up['ND_ID']; ?>" required placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Chuẩn đoán</label>
                            <div class="input-group input-group-outline">
                                <textarea type="text" name="chuandoan" class="form-control" value="<?php echo $row_up['KB_CHUANDOAN']; ?>" required placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Thuốc uống</label>
                            <div class="input-group input-group-outline">
                                <textarea type="text" name="thuocuong" class="form-control" value="<?php echo $row_up['KB_THUOCUONG']; ?>" required placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">NHắc nhở</label>
                            <div class="input-group input-group-outline">
                                <textarea type="text" name="nhacnho" class="form-control" value="<?php echo $row_up['KB_NHACNHO']; ?>" required placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Ngày khám</label>
                            <div class="input-group input-group-outline">
                                <input type="date" name="ngaykham" class="form-control" value="<?php echo $row_up['KB_NGAYKHAM']; ?>" required placeholder="">
                            </div>
                        </div>


                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-fw" name="submit">Sửa</button>
                </form>
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