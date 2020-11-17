<?php
include 'connection_db.php';
$lat = isset($_POST['latitude']) && $_POST['latitude'] != '' ? $_POST['latitude'] : 0;
$lng = isset($_POST['longitude']) && $_POST['longitude'] != '' ? $_POST['longitude'] : 0;
$status = isset($_POST['status']) ? $_POST['status'] : '';

$query = mysqli_query($conn, "select * from location where latitude = $lat and longitude = $lng and status = '$status'");
$data = mysqli_fetch_array($query);

if (count($data) > 0) {
  $return['name'] = $data['name'];
  $return['status'] = $data['status'];
  $return['message'] = 'success';
  echo json_encode($return);
}else {
  $return['message'] = 'data not found';
  echo json_encode($return);
}
?>
