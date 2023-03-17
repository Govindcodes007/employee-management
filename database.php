<!DOCTYPE html>
<html>
    <head>
        <title>My Website</title>
   </head>
   <body>
     <h1 align="center" style="color:red">Employee Details</h1>
    </br>
    <table border="2" align="center" height="300" width="400" style="background-color:DodgerBlue;">
    <thead>
        
        <th>Eid</th>
        <th>Ename</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Salary</th>
        <th>Update</th>    
        <th>Delete</th>
    </thead>
    <tbody>
        <?php
          
          require('connection.php');
          $query1=mysqli_query($conn, "select * from employee");
          while($row=mysqli_fetch_array($query1))
          {
           ?>
           <tr>
            <td><?php echo $row['eid'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['salary'];?></td>
            <td><button><a href="/MyPrj/update.php?id=<?php echo
            $row['eid']; ?>"/>Update</button></td>
            <td><button><a href="/MyPrj/Delete.php?id=<?php echo
            $row['eid']; ?>"/>Delete</button></td>
            
          </tr>
        <?php  } ?> 
    </tbody>
    </table>
   </body>
</html> 