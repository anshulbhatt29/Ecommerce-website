<?php 
require 'includes/common.php';
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);//This removes special characters from string.
$password=md5($password);
$query="SELECT * FROM epiz_30090771_Shop.users WHERE email='$email' AND password='$password' ";
$query_result=mysqli_query($conn, $query);
if(mysqli_num_rows($query_result)==0)
{
    $query="SELECT * FROM epiz_30090771_Shop.users WHERE email='$email' ";
    $query_result=mysqli_query($conn,$query);
    if(mysqli_num_rows($query_result)==0)
    {
       echo "User account doesn't exists .";
    }
    else{
        echo "Please enter the correct password.";

    } 

}
else{
    $row=mysqli_fetch_array($query_result);
    $_SESSION['email']=$email;
    $_SESSION['id']=$row['id'];
    header('location:index.php');
}

?>
