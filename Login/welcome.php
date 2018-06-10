<?php

session_start();

if($_SESSION['uname']==true)
{
    $con= mysqli_connect("localhost", "root", "", "userdata");
    
    $sql_query= "select fname from users where email='".$_SESSION['uname']."'";
    
    $sql_res = mysqli_query($con, $sql_query);
    
    $sql_row = mysqli_fetch_array($sql_res);
    
    $_SESSION['name']=$sql_row['fname'];
}
else
{
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link type="text/css" rel="stylesheet" href="main.css">
    </head>
    
    <body>
        <div class="navbar navbar-default navbar-fixed-top" style="background-color: rgba(240,0,0,1);border:none;">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand" style="color:#000 !important"><b>LOGO</b></a>
                </div>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="" style="color:#000 !important;text-transform: uppercase"><b><?php echo $_SESSION['name']; ?></b></a></li>
                    
                    <li style="color:#000 !important">
                    
                        <div class="dropdown hidden-xs" style="margin: 15px 0px 0px 0px !important">
                            
                            <b class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></b>
                            
                            <ul class="dropdown-menu">
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                        
                        <div class="dropdown visible-xs" style="margin: 15px 0px 0px 15px !important">
                            
                            <b class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></b>
                            
                            <ul class="dropdown-menu">
                                <li><a href="logout.php">Logout</a></li>
                            <li><a href="#">Edit</a></li>
                            </ul>
                        </div>
                    
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="container">
            <div class="col-xs-3" >
                <iframe src="left.php"></iframe>
            </div>
            <div class="col-xs-9" >
                <iframe src="homepage.html" name="right_frame"></iframe>
            </div>
        </div>
    </body>
</html>

