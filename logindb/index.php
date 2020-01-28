<?php
    session_start();
    require 'dbconfig/connect.php';

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
    <input name="username" type="text"class="inputValues"placeholder="Type your username"required/>
    <br>
    <label>Password</label><br>
    <input name="password" type="password"class="inputValues"placeholder="Input password"required/><br>

        <input name="login" type="submit"id="login-btn"value="Login"/><br>
   <a href="register.php"><input type="button" id="register-btn"value="Register"/><br></a>
    </center>
    </div>

</form>

    <?php
        if (isset($_POST['login']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $query="select * from users WHERE username='$username' AND password='$password'";
            $query_run=mysqli_query($conn,$query);

            if (mysqli_num_rows($query_run)>0) {
               ///valid
                $_SESSION['username']=$username;
                header('location:home.php');
            }
            else{
                //invalid
                    echo '<script type="text/javascript">alert("invalid credentials")</script>';

            }
        }
    ?>

</body>
</html>