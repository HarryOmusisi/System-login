<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #95a5a6">
<div id="main-wrapper">
    <center> <h2>Home page</h2>
        <h3><?php
            echo $_SESSION['username'];
            ?></h3>

        <img src="images/profile.png"class="avatar">
    </center>


    <center><form class="myform" action="home.php"method="post">
            <input name="logout" type="submit" id="logout_btn"value="Log out"/><br>
    </form></center>
</div>

</form>
<?php
if(isset($_POST['logout'])) {
    session_destroy();
    header('location:index.php');
}
?>

</body>
</html>