<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo "hello ú ì";

?>
<?php
$today = date("H:i:s");
echo "" .$today;
$day = getdate();
$thu = $day['weekday'];
$ngay = $day['mday'];
$thang = $day['mon'];
$nam = $day['year'];
if($thu == "Saturday" && $today < "0:0:1"  )
?>
<p style="font-size: 20px"> <?php echo " " . $thu . "  " . $ngay . "/" . $thang . "/" . $nam; ?></p>