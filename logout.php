<?php
	require 'includes/common.php';
	if(!isset($_SESSION["email"])){
		header("location: index.php");
	}else{
		session_unset();// to unset the session variables.
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Lifestyle store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    
   </head>
	
	<body>
		<?php
		require 'includes/header.php';
			
		?>
        <div class="container panel-margin"style="margin-top:250px ; margin-bottom: 250px;">
            <div class="alert alert-success">
                You have successfully logged out. Click <a href="index.php" style="color:blue;">here</a> to go back to index page.
            </div>
        </div>
		<?php
			require 'includes/footer.php';
		?>
	</body>
</html>