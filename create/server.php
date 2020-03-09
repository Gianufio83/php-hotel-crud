<?php

include __DIR__ . '/../database.php';

if (empty($_POST['beds'])) {
  die('Non hai inserito il numero di letti');
}
if (empty($_POST['floor'])) {
  die('Non hai inserito il numero del piano');
}
if (empty($_POST['room_number'])) {
  die('Non hai inserito il numero di stanza');
}

$beds = $_POST['beds'];
$floor = $_POST['floor'];
$roomNumber = $_POST['room_number'];
// INSERT INTO table_name
// VALUES (value1, value2, value3, ...);

$stmt = $conn->prepare("INSERT INTO `stanze` (`beds`, `floor`, `room_number`, `created_at`, `updated_at`) VALUES (?, ?, ?, NOW(), NOW())");
$stmt->bind_param("iii", $beds, $floor, $roomNumber);
$stmt->execute();
// var_dump($stmt->execute()); die();
$insertId = $stmt->insert_id;

if(!$insertId) {
  echo 'KO';
}
else{
  header("Location: $basePath/show/show.php?id=$insertId");
}
$conn->close();
