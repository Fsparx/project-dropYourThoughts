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
<form action="loginfromdb.php" method="post" id="">
    <p class="text1" >Login&#9995;</p>
    <input type="text" class="inputname" id="name"placeholder="Email" name="user">
    <input type="password" class="inputname" id="mob" placeholder="Password" name="pass">
    
    <div style="display:flex, justify-content:space-between">
        <button class="btn" type="submit">Submit</button>
        <a href="http://127.0.0.1/rdbms_project/registration.php">Gotoregistration</a>
    </div>
  </form>
</div>
</body>
</html>