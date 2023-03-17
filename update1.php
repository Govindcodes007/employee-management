<?php
require('connection.php');
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if(isset($_POST['submit']))
{
    $ename=$_POST['ename'];
    $gender=$_POST['gender'];
    $salary = ($_POST['salary']);
    $email = ($_POST['email']);
      
    
  $sql = "UPDATE employee SET name='$ename',gender='$gender',salary='$salary',email='$email' WHERE eid='$id'";

  if ($conn->query($sql) === TRUE) {
     echo "Record updated successfully";
   } else {
  echo "Error updating record: " . $conn->error;
  }

   $conn->close();
}
}

?>