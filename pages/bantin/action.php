<?php
include '../../connectsql.php';
$output = '';

if(isset($_POST['query'])){
  $search = $_POST['query'];
  $stmt = $con->prepare("SELECT * FROM bantin WHERE BT_CHUDE like CONCAT('%',?,'%')");
  $stmt->bind_param("ss", $search,$search);
}else{
  $stmt=$con->prepare("SELECT * FROM bantin");
}
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows>0){
  $output= "<thead>
  <tr>
    <th> Sửa </th> 
    <th> Xóa </th> 
    <th> ID </th> 
    <th> ẢNH </th> 
    <th> CHỦ ĐỀ </th> 
    <th> NỘI DUNG </th>
    <th> NGÀY TẠO </th>  
  </tr>
  </thead>
  <tbody>
  ";
  while($row=$result->fetch_assoc()){
    $output .="
    <tr>                    <td>".$row['BT_ANH']."</td>
                            <td>".$row['BT_ID']."</td>
                            <td>".$row['BT_CHUDE']."></td>
                            <td>".$row['BT_NOIDUNG']."</td>
                            <td>".$row['created_at']."</td>
                          </tr>";    }
                          $output .= "</tbody>";
                          echo $output;
    }else{
      echo "<h4>ko thay</h4>";
    }
?>
