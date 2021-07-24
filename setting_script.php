<?php
	require 'includes/common.php';

	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
    }
    else{
        $user_id = $_SESSION["id"];
        $email = $_SESSION["email"];
        $new_password = md5(mysqli_real_escape_string($conn, $_POST["newpassword"]));
        $retype_pass = md5(mysqli_real_escape_string($conn, $_POST["retype-password"]));

        if($new_password != $retype_pass){
            echo "The passwords do not match.Please try again.";
            header("location: settings.php");
        }else{
            $query="SELECT password FROM users WHERE  id = '$user_id'";//might change.
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $database_pass=$result['password'];
            if($database_pass!=$new_password)
            {
                echo "Please enter your correct old password.";
                header("location: settings.php");
            }
            else{
            $query = "UPDATE users SET password = '$new_password' WHERE email = '$email' AND id = '$user_id'";

            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            echo "Password has been updated successfully.";

            header("location: settings.php");
            }
        }
    }
?>