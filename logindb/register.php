<?php
    require 'dbconfig/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background: #34495e">
<div id="main-wrapper">
    <center> <h2>Registration Form</h2>
        <img src="images/profile.png"class="avatar">
    </center>


    <form class="myform" action="register.php"method="post">
        <center><label>Username</label><br>
            <input name="username" type="text"class="inputValues"placeholder="Type your username"required/>
            <br>
            <label>Password</label><br>
            <input name="password" type="password"class="inputValues"placeholder="Your password"required/><br>

            <label>Confirm Password</label><br>
            <input name="cpassword" type="password"class="inputValues"placeholder="Confirm password"required/><br>

            <input name="submit_btn" type="submit"id="signup-btn"value="Sign Up"/><br>
           <a href="index.php"><input type="button" id="back-btn"value="<<Back "/><br></a>
        </center>
</form>

    <?php
        if (isset($_POST['submit_btn']))    //check if the button is clicked or not
        {
//            echo '<script type="text/javascript">alert("sign up button clicked")</script>';
            $username=$_POST['username'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];

            if ($password==$cpassword)
            {
                $query="select * from users WHERE username='$username'";
                $query_run=mysqli_query($conn,$query);

            if (mysqli_num_rows($query_run)>0) {
                echo '<script type="text/javascript">alert("user already exists....")</script>';
                }
            else{

                    $query = "insert into users values ('$username','$password')";
                    $query_run = mysqli_query($conn, $query);
                    if ($query_run) {
                        echo '<script type="text/javascript">alert("User registered....Go to login page")</script>';
                    } else {
                        echo '<script type="text/javascript">alert("error!")</script>';
                    }
                }
            }else
            {
                echo '<script type="text/javascript">alert("Password does not much")</script>';
            }

        }
    ?>
</div>

</body>
</html>