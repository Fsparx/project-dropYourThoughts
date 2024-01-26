<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contentpage/page1.css">
</head>
<body>
    <style>
        body{
            background-color:#161616;
        }
        </style>
    <div id="formdiv">
<form action="registrationtodb.php" method="post" id="">
    <p class="text1" >Register&#9995;</p>
    <input type="text" class="inputname" id="name"placeholder="Name" name="username">
    <input type="email" class="inputname" id="name"placeholder="Email" name="email">
    
   
    <input type="password" class="inputname" id="mob" placeholder="Password" name="pass">
    <input type="password" class="inputname" id="email" placeholder="Confirm Password" name="cpass">
    <div style="display:flex, justify-content:space-between">
        <button class="btn" type="submit">Submit</button>
        <a href="http://127.0.0.1/rdbms_project/login.php">Gotologin</a>
    </div>
  </form>
</div>
</body>
</html>