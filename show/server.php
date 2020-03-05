<?php
 include __DIR__ . '/../database.php';

 $idRoom = $_GET['id'];

 $sql = "SELECT * FROM `stanze` WHERE `id`= $idRoom ";
 $result = $conn->query($sql);
 if ($result && $result->num_rows > 0) {
   $rooms =  $result->fetch_assoc();
   // var_dump($rooms); die();
 }
 elseif ($result) {
   echo "0 results";
 }
 else {
   echo "query error";
 }
 $conn->close();

 ?>
