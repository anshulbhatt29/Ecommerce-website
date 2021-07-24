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

  
      
       $user_id = $_SESSION["id"];
       $query = "SELECT item_id FROM oD1vDCB9Nu.users_shop WHERE user_id = '$user_id'";
       $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $m="The details of your order are: ";
       while($row = mysqli_fetch_array($result)){
           $item_id = $row["item_id"];
           $query1="SELECT details from oD1vDCB9Nu.shop WHERE id='$item_id'";
           $r= mysqli_query($conn, $query1) or die(mysqli_error($conn));
           $query2="SELECT quantity,timeoforder from oD1vDCB9Nu.users_shop WHERE item_id='$item_id' and user_id='$user_id' ";
           $r1=mysqli_query($conn, $query2) or die(mysqli_error($conn));
           $roww= mysqli_fetch_array($r);
           $roww1= mysqli_fetch_array($r1);
           $m1= $roww['details']."  "."quantity: ".$roww1['quantity']."  time of order :".$roww1['timeoforder']."<br>";
           $m=$m.$m1;
         
           $query1 = "UPDATE oD1vDCB9Nu.users_shop SET status = 'Confirmed' WHERE item_id = '$item_id'";
           $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
       }
       $query1 = "  DELETE FROM oD1vDCB9Nu.users_shop  WHERE user_id ='$user_id' ";
       $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
       $subject="About your order";
    
       $emmail=mail("anshulbhatt690@gmail.com",$subject,$m);
       if($emmail)
       echo "success";
       else echo "failure";
   

       ?>
       <?php 
      // require 'includes/footer.php';
       //<p><?php echo  $m;></p>
       ?>
     </body>
</html>