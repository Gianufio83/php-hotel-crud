<?php
 include 'database.php';
 $idRoom = $_POST['id'];
 if (empty($idRoom )) {
  die('NO ID');
 }

 $sql = "SELECT * FROM `stanze` WHERE `id`= $idRoom";
 $result = $conn->query($sql);
 if ($result) {
   echo "CANCELLAZIONE AVVENUTA";
 }
 else {
   echo "CANCELLAZIONE NON AVVENUTA";
 }

 $conn->close();

 ?>
