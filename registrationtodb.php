<?php
    require_once("config/db.php");
    $uname=$_POST['username'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $email=$_POST['email'];
    echo $uname;
    
    echo"hiiii";
    if($pass==$cpass)
    {
        
    $stmt=$con->prepare("insert into userdata(usernam,password,email)
    values(?,?,?)");
    $stmt->bind_param("sss",$uname,$pass,$email);
    $stmt->execute();
    $stmt->close();
    $con->close();
    }
    else{
        echo "password not matching";
    }
    header( "refresh:1;url=http://127.0.0.1/rdbms_project/login.php" );
?>