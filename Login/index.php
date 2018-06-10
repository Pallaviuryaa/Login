<?php
   if(isset($_POST['sign_up_btn']))
   {
       
       $con= mysqli_connect("localhost", "root", "", "userdata") or die(mysqli_error($con));
               
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
       $email=$_POST['email'];
       $address=$_POST['address'];
       $password=$_POST['password'];
       
       $sqlquery = "insert into users (fname, lname, email, address, password) values ('$fname', '$lname', '$email', '$address', '$password')";
       
       $sqlres = mysqli_query($con, $sqlquery);
       
       echo '<script>alert("Sign up success, Go back and navigate to Login")</script>';
   }
   
   session_start();
   if(isset($_SESSION['uname']))
   {
       header('location:welcome');
   }
   
   
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="col-xs-4 col-xs-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>Sign Up<h2/>
                </div>
                
                <div class="panel-body">
                    <form action="index.php" method="post" class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" name="fname" placeholder="First name" class="form-control" required="true">
                        <label for="lname">Last Name:</label>
                        <input type="text" name="lname" placeholder="Last name" class="form-control" required="true">
                        <label for="email">Email:</label>
                        <input type="email" name="email" placeholder="Email" class="form-control" required="true">
                        <label for="address">Address:</label>
                        <input type="text" name="address" placeholder="Address" class="form-control" required="true">
                        <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" required="true">
                        <input type="submit" class="btn btn-success" value="Sign Up" name="sign_up_btn" style="margin: 20px 0px 0px 0px;">
                        <input type="reset" class="btn btn-danger" value="Clear" style="margin: 20px 0px 0px 0px;">
                    </form>
                </div>
                <div class="panel-footer">
                    Login <a href="login.php">here</a>
                </div>
            </div>
        </div>
        
    </body>
</html>
