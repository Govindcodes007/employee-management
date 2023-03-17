<?php include 'connection.php';
$id = $_GET['id'];
$select= "SELECT * FROM employee WHERE eid='$id'";

$data = mysqli_query($conn,$select);
$row = mysqli_fetch_array($data);
?>
<div>
<center><form method="post" action="/MyPrj/update1.php?id=<?php echo
            $row['eid']; ?>">
  <table border="2">
    <tr>
      <td>Emp name</td>
      <td><input type="text" name="ename"
        placeholder="Enter Emp Name" value="<?php echo $row['name'] ?>" required/>
      </td>
    </tr>
    <tr>
      <td>gender</td>
      <td>
        
      <input type="radio" name="gender" 
         value="<?php echo $row['gender']?>"
        <?php 
          if($row['gender']=='male')
          {
            echo "checked";
          }
        ?>
         >male</input>
      <input type="radio" name="gender" 
         value="<?php echo $row['gender']?>"
         <?php 
          if($row['gender']=='female')
          {
            echo "checked";
          }
        ?>
         >female</input>
      </td>
    </tr>
    <tr>
      <td>Enter Emp salary</td>
      <td><input type="text" name="salary" value="<?php echo $row['salary']?>" required></td>
    </tr>
    <tr>
        <td>Enter Emp Email</td>
        <td><input type="text" name="email" value="<?php echo $row['email']?>" required/></td>
    </tr>
    <tr>
    <td><input type="submit" name="submit" value="submit"></td>
    </tr>
 </table>
</form>
</center>
</div>