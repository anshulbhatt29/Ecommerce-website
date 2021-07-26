<?php
include'includes/common.php';
if(isset($_SESSION['email']))
{
    header('location:index.php');

}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <?php include 'includes/header.php'?>
        <div class="container" style="margin-bottom: 56px;" >
            <div class="row" style="margin-top: 10%; margin-left: 30%;">
                <div class="col-xs-6">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body" style="margin-bottom: 35px;">
                            <p class="text-warning">Login to make a purchase</p>
                            <form  method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control input-lg" name="email" required>

                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="form-control input-lg" name="password" required>

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                               
                            </form>

                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="signup.php" style="color:blue">Register</a></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    
       <?php 
       require 'includes/footer.php';
       ?>
    </body>
</html>
