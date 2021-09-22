<?php
require 'includes/common.php';
if(!isset($_SESSION["email"])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
       <?php
       require 'includes/header.php';
       ?>
        <div class="container" style="margin-bottom: 225px; ">
            <div class="row" style="margin-top: 8%; margin-left: 32%;">
                <div class="col-xs-6">
                    <h3>Change Password</h3>

                    <form method="post" action="setting_script.php">
        
    
                        <div class="form-group">
                            <input type="password" placeholder="Old Password" required class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="New Password"required  class="form-control" name="newpassword" >

                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Re-type New Password" required  class="form-control" name="retype-password">

                        </div>
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>

                    </form>
        
                </div>
            </div>

        </div>
        <?php
       require 'includes/footer.php';
       ?>
    </body>
</html>