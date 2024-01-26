<?php
require_once('config/db.php');
 $id=$_GET['id'];
 
 $comment=$_POST['comment'];
 $uname=$_GET['uname'];
 $time=date("d-m-y h:i:s");
 
 $stmt=$con->prepare("insert into commentdata(id,comment,username,time)
    values(?,?,?,?)");
 $stmt->bind_param("isss",$id,$comment,$uname,$time);
 $stmt->execute();
$stmt->close();
 $con->close();
 header( "refresh:1;url=http://127.0.0.1/rdbms_project/page1.php?uname=$uname#one" );
?>