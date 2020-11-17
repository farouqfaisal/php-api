<?php
include 'connection_db.php';
$name = isset($_POST['name']) ? $_POST['name'] : '';

$query = mysqli_query($conn, "select * from location where name = '$name'");
$data = mysqli_fetch_array($query);

if (count($data) > 0) {
  $return['latitude'] = $data['latitude'];
  $return['longitude'] = $data['longitude'];
  $return['message'] = 'success';
  echo json_encode($return);
}else {
  $return['message'] = 'data not found';
  echo json_encode($return);
}
?>
