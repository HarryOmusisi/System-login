<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #95a5a6">
    <div id="main-wrapper">
       <center> <h2>Login Form</h2>
           <img src="images/profile.png"class="avatar">
       </center>


<form class="myform" action="index.php"method="post">
    <center><label>Username</label><br>
    <input type="text"class="inputValues"placeholder="Type your username"/>
    <br>
    <label>Password</label><br>
    <input type="password"class="inputValues"placeholder="Input password"/><br>

    <input type="submit"id="login-btn"value="Login"/><br>
    <input type="button" id="register-btn"value="Register"/><br>
    </center>
    </div>

</form>

</body>
</html>