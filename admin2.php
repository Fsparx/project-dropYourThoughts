<?php
 require_once('config/db.php');
 $query="select * from datatable";
 
 $result=mysqli_query($con,$query)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div>
    <h2 class="header">Dashboard</h2>
    <table>
  
    <tr>
      
      <th>Name</th>
      <th>Mobile Number</th>
      <th>toemail</th>
      <th>message</th>
      <th>Operation</th>
    </tr> 
    <?php
      while($row= mysqli_fetch_assoc($result))
      {
        ?>
       <tr>  
        <td><?php echo $row['name']; ?></td>
        
        <td ><?php echo $row['mobile_number']; ?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['message'];?></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>" >suspend</a></td>
      </tr> 
        <?php
      }
    ?>
  </thead>
    
</table>
    
   </div>

</body>
</html>