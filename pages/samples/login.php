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

<body class="bg-gray-200">

  <!-- <?php
        error_reporting(0);
        session_start();
        include '../../connectsql.php';
        $email = $_POST['txtmail'];
        $matkhau = md5($_POST['txtpass']);


        $sql = "SELECT * From nhanvien where NV_MAIL='$email' AND NV_MATKHAU='$matkhau' AND NV_QUYENSD=0";
        //echo $sql;
        if ($result = $con->query($sql)) {
          //echo $sql;
          while ($row = $result->fetch_assoc()) {
            $_SESSION['NV_MAIL'] = $email;
            $_SESSION['NV_ID'] = $row['NV_ID'];
            header("location:  ../../index.php");
          }
        } else {
          $_SESSION['message'] = "Bạn nhập sai tài khoản hoặc mật khẩu"; //message to show
          header("Location: login.php");
          exit(0);
        }

        $con->close();
        ?> -->
  <?php
session_start();
include '../../connectsql.php';
if(isset($_POST['btn_summit']))
{
    $email = mysqli_real_escape_string($con, $_POST['txtmail']);
    $password = mysqli_real_escape_string($con, $_POST['txtmatkhau']);

    $query = "SELECT * From nhanvien where NV_MAIL='$email' AND NV_MATKHAU='$matkhau' AND NV_QUYENSD=0";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        $row = mysqli_fetch_array($query_run);

        // Authenticating Logged In User
        $_SESSION['authentication'] = true;

        // Storing Authenticated User data in Session
        $_SESSION['auth_user'] = [
            'user_id'=>$row['NV_ID'],
            'user_fullname'=>$row['NV_HOTEN'],
            'user_email'=>$row['MAIL'],
        ];

        $_SESSION['message'] = "You are Logged In Successfully"; //message to show
        header("Location: ../../index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Bạn nhập sai tài khoản hoặc mật khẩu"; //message to show
        header("Location: login.php");
        exit(0);
    }
}
?>


  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://hinhanhdephd.com/wp-content/uploads/2020/07/hinh-nen-galaxy-wallpaper-fullhd-dep-nhat-1.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Đăng nhập</h4>
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" href="">
                      </a>
                    </div>
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" href="">
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" href="">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <?php
                //  message
                if (isset($_SESSION['message'])) {
                  echo '<h6 class="alert alert-warning">' . $_SESSION['message'] . '</h6>';
                  unset($_SESSION['message']);
                } // message 
                ?>
                <form class="text-start" action="" method="POST">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="txtmail" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" name="txtpass" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="btn_summit" class="btn bg-gradient-primary w-100 my-4 mb-2">Đăng nhập</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                    Quên mật khẩu?
                    <a href="../pages/sign-up.html" class="text-primary text-gradient font-weight-bold">Vào đây</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">

      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="../../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>