<?php

if(isset($_POST['login_btn']))
{
    session_start();
    
    $con = mysqli_connect("localhost", "root", "", "userdata");
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sqlquery = "select email, password from users where email='".$email."' and password='".$password."'";
    
    $sql_res = mysqli_query($con, $sqlquery);
    
    if(mysqli_num_rows($sql_res)==1)
    {
        $_SESSION['uname'] = $email;
        
        header('location:welcome.php');
    }
    else
    {
        echo '<script>alert("Please check Username or Password and try again.")</script>';
    }
}
    
    session_start();
    if(isset($_SESSION['uname']))
    {
        header('location:welcome.php');
    }


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        
        <div class="col-xs-4 col-xs-offset-4" style="margin-top:100px">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>Login</h2>
                </div>
                <div class="panel-body">
                    <form class="form-group" action="login.php" method="post">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control" required="true">
                        
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" required="true">
                        <div style="margin: 10px 0px 0px 0px">
                            <input type="submit" class="btn btn-primary" value="Login" name="login_btn" style="margin: 10px 10px 10px 0px">
                         <input type="reset" class="btn btn-danger" value="Clear"  style="margin: 10px 10px 10px 0px">
                         </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Create account <a href="index.php">Here</a>
                </div>
            </div>
        </div>
      
    </body>
</html>

