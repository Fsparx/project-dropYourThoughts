<?php      
    require_once('config/db.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
        
        $sql = "select * from userdata where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        $name=$row['usernam']  ;
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            echo $row['usernam'];
            header( "refresh:1;url=http://127.0.0.1/rdbms_project/page1.php?uname=$name" );
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";
            header( "refresh:1;url=http://127.0.0.1/rdbms_project/login.php" );  
        }     
?>  