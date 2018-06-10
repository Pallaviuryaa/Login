<?php

if(isset($_POST['sbmt_btn_1']))
{
    session_start();
    
    $con = mysqli_connect("localhost", "root", "", "userdata") or die(mysqli_error($con));

    $text = $_POST['text_area_1'];
    $sql_query = "update data_1 set data ='".$text."' where data_id=1";
    
    $sql_res = mysqli_query($con, $sql_query);
    
    $sql_disp = "select data from data_1 where data_id=1" ;
    
    $disp_res = mysqli_query($con, $sql_disp);
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <!DOCTYPE html>
<html>
<head>
	<title>Content</title>

	<link rel="stylesheet" type="text/css" href="main.css">
	<h2>Question/Answer</h2>

	<p>Q.1) What is Charge ?</p>
        Ans.)<p id="para"> orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
	</p>
        <form id="form_1" action="right.php" method="post" style="display: none;">
            <textarea name="text_area_1" cols="100" rows="3" placeholder="Enter your text" class="form-control"></textarea><br>
            <input type="submit" name="sbmt_btn_1" class="btn btn-primary" value="Update"> 
        </form>
        <button id="edit" style="background-color: rgba(0,0,0,0.0);border:none;outline: none;"><span class="glyphicon glyphicon-pencil" style="font-size: 22px;margin:10px"></span></button>
        <span class="glyphicon glyphicon-trash" style="font-size: 22px"></span>
        

	<br><br>


	<p>Q.2) What is Charge ?</p>
           Ans.)<p id="p_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
	</p>
        
        <form id="form_2" action="right.php" method="post" style="display: none;">
            <textarea name="text_area_2" cols="100" rows="3" placeholder="Enter your text" class="form-control"></textarea><br>
            <input type="submit" name="sbmt_btn_2" class="btn btn-primary" value="Update"> 
        </form>
        
        <button id="edit_2" style="background-color: rgba(0,0,0,0.0);border:none;outline: none;"><span class="glyphicon glyphicon-pencil" style="font-size: 22px;margin:10px"></span></button>
        <span class="glyphicon glyphicon-trash" style="font-size: 22px"></span>
	

	<!--<script type="text/javascript" >
		var p = document.getElementById('para');
		var btn = document.getElementById('btnn');
		var txt = document.getElementById('theText');

  
  btn.onclick =function()
		{
			p.textContent = txt.value;
		};
	</script>-->
        
        <script>
        $(document).ready(function(){
            $("#edit").click(function(){
                $("#form_1").toggle();
            });
        });
        </script>
        
        <script>
        $(document).ready(function(){
            $("#edit_2").click(function(){
                $("#form_2").toggle();
            });
        });
        </script>
      
    </body>
</html>