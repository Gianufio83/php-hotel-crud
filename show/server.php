<?php
include 'database.php';
if (empty($_GET['id'])) {
  die('Nessun Id camera');
}
$idRoom = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id` = ?");
$stmt->bind_param("i", $idRoom);
$stmt->execute();
$result = $stmt->get_result();
if ($result && $result->num_rows > 0) {
  $rooms = $result->fetch_assoc();
} elseif ($result) {
  echo "0 results";
} else {
  echo "query error";
}
$conn->close();
 // include __DIR__ . '/../database.php';
 //
 // $idRoom = $_GET['id'];
 //
 // $sql = "SELECT * FROM `stanze` WHERE `id`= $idRoom ";
 // $result = $conn->query($sql);
 // if ($result && $result->num_rows > 0) {
 //   $rooms =  $result->fetch_assoc();
 //   // var_dump($rooms); die();
 // }
 // elseif ($result) {
 //   echo "0 results";
 // }
 // else {
 //   echo "query error";
 // }
 // $conn->close();


 ?>
