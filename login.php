<?php
    session_start();
    include("includes/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/styles/login_styles.css">

</head>
<body>
    <div class="wrapper">
        <div class="title"> Login </div>
        <form class="login-form" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="field">
                <input type="text" class="form-control" name="user_name" required="">
                <label style="font-size:small"> User Name</label>
            </div>
            <div class="field">
                <input type="password" class="form-control" name="user_password" required="">
                <label style="font-size:small" >Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login" name="user_login">
            </div>
	    </form>
    </div>
</body>
</html>

<?php
    #Cheking if the form is submitted using the submit button
    if (isset ($_POST['user_login'])) {
        #Retrieving the user input from the form
        $user_name = mysqli_real_escape_string ($connection, $_POST['user_name']);
        $user_password = $_POST['user_password'];
        $get_user = "SELECT * from users WHERE user_name='$user_name' AND user_password='$user_password'";
        $run_user = mysqli_query($connection, $get_user);
        $count = mysqli_num_rows ($run_user);
        if ($count==1) {
            $_SESSION['user_name'] = $user_name;
            echo "<script>alert ('You Are Logged In') </script>";
            header("location: dashboard.php");
            die();
        } else {
            echo "<script>alert ('Name / Password Wrong') </script>";
        }
    }