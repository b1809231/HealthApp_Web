<?php
if (session_id() === '') {
    session_start();
}
include_once(__DIR__ . '../../../connectsql.php');
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/logo.png">
    <link rel="icon" type="image/png" href="../../assets/img/logo.png">
    <title>
        In chỉ số người dùng
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
    <style>
        @page {
            size: A4
        }
    </style>
</head>

<body class="A4">
    <?php
    $id = $_GET['id_nd'];
    $sql = <<<EOT
    SELECT `CS_ID`,  `CS_NGAYNHAP`,  `CS_BMI`, `CS_DUONGHUYET`, `CS_HUYETAP`, `CS_CHOLESTEROL`,`CS_NHIPTIM`,`CS_CANNANG`,`CS_CHIEUCAO`,`ND_HOVATEN` ,`ND_SODIENTHOAI`,`ND_DIACHI`,`ND_EMAIL`
    FROM `nguoidung` nd
    JOIN `chiso` cs ON nd.ND_ID=cs.ND_ID
    WHERE nd.ND_ID=$id
EOT;
    $resultsql = mysqli_query($con, $sql);
    $datasql;    
    while ($row = mysqli_fetch_array($resultsql, MYSQLI_ASSOC)) {
        $datasql[] = array(
            // 'kb_id' => $row['KB_ID'],
            // 'nd_ht' => $row['ND_HOVATEN'],
            // 'nd_sdt' => $row['ND_SODIENTHOAI'],
            // 'nd_m' => $row['ND_EMAIL'],
            // 'nd_dc' => $row['ND_DIACHI'],
            //'kb_ngay' => $row['created_at'],
            'bmi' => $row['CS_BMI'],
            'nn' => $row['CS_NGAYNHAP'],
            'dh' => $row['CS_DUONGHUYET'],
            'ha' => $row['CS_HUYETAP'],
            'c' => $row['CS_CHOLESTEROL'],
            'nt' => $row['CS_NHIPTIM'],
            'cn' => $row['CS_CANNANG'],
            'cc' => $row['CS_CHIEUCAO'],
        );
        $in= array(
            'cs_id' => $row['CS_ID'],
            'nd_ht' => $row['ND_HOVATEN'],
            'nd_sdt' => $row['ND_SODIENTHOAI'],
            'nd_m' => $row['ND_EMAIL'],
            'nd_dc' => $row['ND_DIACHI'],
        );
    }
    $datads['danhsach'] = $datasql;
    ?>

    <section class="sheet padding-10mm" style="margin: auto;">
        <!-- Thông tin phòng tư vấn-->
        <table border="0" width="100%" cellspacing="0">
            <tbody>
                <tr>
                    <td align="center"><img src="../../assets/img/logo.png" width="100px" height="100px" /></td>
                    <td align="center">
                        <b style="font-size: 2em;">HEALTTHAPP - Đồng hành cùng bạn</b><br />
                        <small>Cung cấp chỉ số đã nhập của người dùng </small>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <!-- Thông tin khách hàng -->
        <p><i><u>Thông tin người dùng</u></i></p>
        <table border="0" width="100%" cellspacing="0">
            <tbody>
                <tr>
                    <td width="30%">Người dùng:</td>
                    <td><b><?= $in['nd_ht'] ?></b></td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><b><?= $in['nd_dc'] ?></b></td>
                </tr>
                <tr>
                    <td>Số điện thoại/mail:</td>
                    <td><b><?= $in['nd_sdt'] ?>
                            (<?= $in['nd_m'] ?>)</b></td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <!-- Thông tin khám bệnh -->
        <p><i><u>Chi tiết chỉ số</u></i></p>
        <table border="1" width="100%" cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th>Ngày</th>
                    <th>BMI</th>
                    <th>Đường huyết</th>
                    <th>Huyết áp</th>
                    <th>Cholesterol toàn phần</th>
                    <th>Nhịp tim</th>
                    <th>Cân nặng</th>
                    <th>Chiều cao</th>                    
                </tr>                            
                <tr>
                    <th></th>
                    <th>16 ≤ BMI < 17: Gầy độ II</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>                    
                </tr>
                <tr>
                    <th></th>
                    <th>17 ≤ BMI < 18.5: Gầy độ I</th>
                    <th>70 mg/dL <</th>
                    <th>huyết áp tâm thu < 120mmHg</th>
                    <th>< 130 mg/dL : bình thường</th>
                    <th></th>
                    <th></th>
                    <th></th>                    
                </tr>
                <tr>
                    <th></th>
                    <th>18.5 ≤ BMI < 25: Bình thường</th>
                    <th>< 92 mg/dL</th>
                    <th>huyết áp tâm trương < 80mmHg</th>
                    <th>> 160 mg/dL: nguy hại</th>
                    <th>60-100 nhịp/phút</th>
                    <th></th>
                    <th></th>                    
                </tr>
                <tr>
                    <th></th>
                    <th>25 ≤ BMI < 30: Thừa cân</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>                    
                </tr>
                <tr>
                    <th></th>
                    <th>30 ≤ BMI 35: Béo phì độ 1</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>                    
                </tr>
                
            </thead>            
            <tbody>


                <?php foreach ($datads['danhsach'] as $data) : ?>
                    <tr>
                        
                    <td align="left"><?= $data['nn'] ?></td>
                        <td align="left"><?= $data['bmi'] ?></td>
                        <td align="left"><?= $data['dh'] ?></td>
                        <td align="left"><?= $data['ha'] ?></td>
                        <td align="left"><?= $data['c'] ?></td>
                        <td align="left"><?= $data['nt'] ?></td>
                        <td align="left"><?= $data['cn'] ?></td>
                        <td align="left"><?= $data['cc'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br />
        <br />
        <br />

        <table border="0" width="100%">
            <tbody>
                <tr>
                    <td align="center">
                        <small>Cảm ơn đã sử dụng hệ thống </small>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
   </body>
   </html>