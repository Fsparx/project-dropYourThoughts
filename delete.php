<?php
require_once('config/db.php');
 $id=$_GET['id'];
 $row="select * from datatable where id=$id";
 $result=mysqli_query($con,$row);
 $getrow=mysqli_fetch_assoc($result);
 echo $getrow['status'];
 if($getrow['status']==1){
    $query1="update datatable set status=0  where id=$id";
 $data=mysqli_query($con,$query1);
 }
 else{
    $query1="update datatable set status=1  where id=$id";
    $data=mysqli_query($con,$query1);
 }
 
 
 
 header( "refresh:1;url=http://127.0.0.1/rdbms_project/admin.php" );
?>