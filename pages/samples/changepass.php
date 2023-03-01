<?php
	include '../../connectsql.php';
	if(!empty($_POST['save'])){
		$op=$_POST['oldpass'];
		$np=$_POST['newpass'];
		$cnp=$_POST['cnewpass'];
		if($np==$cnp){
			$query ="SELECT * FROM nhanvien WHERE NV_MATKHAU='$op'";
			$result= mysqli_query($con, $query);
			$count = mysqli_num_rows($result);
			if($count>0){
				$query ="UPDATE nhanvien set NV_MATKHAU='$np'";
				mysqli_query($con, $query);
				$_SESSION['message']= "Mật hẩu xác nhận ko khớp";
			}
		}else{
			echo "Sai";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/logo.png">
	<link rel="icon" type="image/png" href="../../assets/img/logo.png">
	<title>
		Đổi mật khẩu
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
	<main class="main-content  mt-0">
		<div class="page-header align-items-start min-vh-100" style="background-image: url('https://hinhanhdephd.com/wp-content/uploads/2020/07/hinh-nen-galaxy-wallpaper-fullhd-dep-nhat-1.jpg');">
			<span class="mask bg-gradient-dark opacity-6"></span>
			<div class="container my-auto">
				<div class="row">
					<div class="col-lg-4 col-md-8 col-12 mx-auto">
						<div class="card z-index-0 fadeIn3 fadeInBottom">
							<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
								<div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
									<h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Đổi mật khẩu</h4>
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
							<?php
                //  message
                if (isset($_SESSION['message'])) {
                  echo '<h6 class="alert alert-warning">' . $_SESSION['message'] . '</h6>';
                  unset($_SESSION['message']);
                } // message 
                ?>
							<div class="card-body">
								<form class="text-start" enctype='multipart/form-data' action="" method="POST">
									<div class="input-group input-group-outline my-3">
										<label class="form-label">Mật khẩu cũ</label>
										<input type="password" name="oldpass" class="form-control">
									</div>
									<div class="input-group input-group-outline mb-3">
										<label class="form-label">Mật khẩu mới</label>
										<input type="password" name="newpass" class="form-control">
									</div>
									<div class="input-group input-group-outline mb-3">
										<label class="form-label">Nhập lại mật khẩu mới</label>
										<input type="password" name="cnewpass" class="form-control">
									</div>
									<div class="text-center">
										<button type="submit" name="save" class="btn bg-gradient-primary w-100 my-4 mb-2">Đổi</button>
									</div>

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