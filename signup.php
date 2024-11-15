<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale-1">
  <title>Sign Up Page</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id = "bg-login" style="margin-top: 240px; margin-bottom: 100px;">
  <div class = "box-login"> 
    <h2>Sign Up</h2>
    <form name = "form" method = "POST" action = "signup0.php">
    Username: <input class = "input-control" type = "text" name = "userId"><br>
    First Name: <input class = "input-control" type = "text" name = "firstName"><br>
    Last Name: <input class = "input-control" type = "text" name = "lastName"><br>
    Email: <input class = "input-control" type = "text" name = "email"><br>
    Contact No: <input class = "input-control" type = "text" name = "numPhone"><br>
    Address: <input class = "input-control" type = "text" name = "address"><br>
    Password: <input class = "input-control" type = "password" name = "pwd"><br>
    <center><input class = "btn" type = "submit" name = "submit" value = "Submit">
    <input class = "btn" type = "reset" name = "clear" value = "Clear"></center>
    </form>
  </div>
</body>
</html>
