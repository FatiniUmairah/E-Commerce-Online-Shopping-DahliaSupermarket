<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale-1">
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id = "bg-login">
  <div class = "box-login">
    <h2>Login</h2>
    <form name = "form" method="POST" action="login0.php">
    <input class = "input-control" type = "text" name = "id" placeholder = "User ID"> 
    <input class = "input-control" type = "password" name = "pass" placeholder="Password"> 
    <center><input class = "btn" type = "submit" name = "submit" value = "Login"></center>
    </form>
    <p align="center" style="padding-top: 15%">New User? <a href="signup.php"><u>Create an account<u></a></p>
  </div>
</body>
</html>