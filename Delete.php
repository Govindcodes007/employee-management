<?php
require('connection.php');
$id = $_GET['id'];
 
  $sql = "DELETE FROM employee WHERE eid='$id'";

  if ($conn->query($sql) === TRUE) {
     
     include('database.php');
   } else {
  echo "Error deleting record: " . $conn->error;
  }

   $conn->close();
?>

</br>
