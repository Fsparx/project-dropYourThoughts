<?php
require_once('config/db.php');
$query = "SELECT * FROM datatable";
$result = mysqli_query($con, $query);


$totalMessages = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
    <div>
        <h2 class="header">Dashboard</h2>

        <p>Total Messages: <?php echo $totalMessages; ?></p>

        <table>
            <tr>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>toemail</th>
                <th>message</th>
                <th>Operation</th>
            </tr> 
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                
                $totalMessages++;
            ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['mobile_number']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">suspend</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
