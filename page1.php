
<?php
 require_once('config/db.php');
 $query="select * from datatable";
 $query1="select * from commentdata";
 $result=mysqli_query($con,$query);
 
 
 $user=$_GET['uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
    <link rel="stylesheet" href="contentpage/page1.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contentpage/comment.css">
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("jfbF6V-BbAOILe_lf");
   })();
</script>
<script src="contentpage/page1.js"></script>

</head>
<body>


<nav>
  <div class="container">
    <ul>
      <li><a href="#one">Home</a></li>
      <li><a href="#two">Form</a></li>
     
    </ul>
  </div>
</nav>

<section id="one">
  <h1>
  <div class="gridview">
    <?php
      
      while($row= mysqli_fetch_assoc($result))
      {
        if($row['status']==1){
        ?>
         <div class="viewdiv">
        <p class="namedata"><?php echo $row['name']; ?></p>
        <hr color="#161616">
        <p class="messagefrom" ><?php echo $row['message']; ?></p>
        <hr color="#343434">
        <form action="addcomment.php?id=<?php echo $row["id"];?>&uname=<?php echo $user?>" method="post" class="form1">
          <input class="inputname1" placeholder="Add comment" name="comment">
          <button class="btn" type="submit">Submit</button>
        </form>
        <hr color="#161616">
        <?php
        $resultc=mysqli_query($con,$query1);
          while($rowdata=mysqli_fetch_assoc($resultc)){
            if($row["id"]==$rowdata["id"]){
              ?>
              <p style="font-size:medium"><?php echo $rowdata['username']?></p>
              <p style="font-size:small"><?php echo $rowdata["comment"]?></p>
              <hr color="#161616">
              <?php
            }
          }
        ?>
        </div>
        <?php
        }
      }
    ?>
  </div>
  </h1>
  
</section>

<section id="two" >
  <h1><div id="formdiv">
    
  <form action="connect.php?user=<?php echo $user ?>" method="post">
    <p class="text1" >Hello&#9995;</p>
    <input style="display:none" type="text" class="inputname" id="name"placeholder="Name" name="username">
    <input type="number" class="inputname" id="mob" placeholder="Mobile Number" name="mobilenum" maxlength="10" minlength="10" onmouseleave ="checknumber()">
    <input type="email" class="inputname" id="email" placeholder="ToEmail" name="email">
    <textarea type="email" class="message" id="message" placeholder="Message" name="message"></textarea><br>
    <button class="btn" onclick="sendEmail()" type="submit">Submit</button>
  </form>
<script>
  function checknumber(){
    var mob=document.getElementById("mob").value;
    if(mob.length!=10)
    {
      alert("Enter ten number only");
    }
    
  }
</script>
  </div></h1>
</section>

    
</body>
</html>