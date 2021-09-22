<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
    header('location:index.php');
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
        <div class="container" style="margin-bottom: 67px; ">
            <div class="row" style="margin-top: 8%; margin-left: 30%;">
                <div class="col-xs-6">
                    <h1>SIGN UP</h1>

                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control" name="email" required>

                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control" name="password" required>

                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Contact" class="form-control" name="contact"  pattern="^\d{3}-\d{3}-\d{4}$" required >

                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="City" class="form-control" name="city" >

                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Address" class="form-control" name="address" >

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">submit</button>
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