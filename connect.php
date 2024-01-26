<?php
    $username=$_GET['user'];
    $mobnum=$_POST['mobilenum'];
    $toemail=$_POST['email'];
    $message=$_POST['message'];
    $time=date("d-m-y h:i:s");
    $conn= new mysqli('localhost','root','','datas');
$status=1;
    $stmt=$conn->prepare("insert into datatable(name,mobile_number,email,message,time,status)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("sisssi",$username,$mobnum,$toemail,$message,$time,$status);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header( "refresh:3;url=http://127.0.0.1/rdbms_project/page1.php?uname=$username#one" );
?>