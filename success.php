<?php
require 'includes/common.php';
if(!isset($_SESSION["email"])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html style="height:100%">
    <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="height:100%">
    <?php 
    require'includes/header.php';      
       $user_id = $_SESSION["id"];
       $query = "SELECT item_id FROM oD1vDCB9Nu.users_shop WHERE user_id = '$user_id'";
       $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $m="The details of your order are:  ";
       while($row = mysqli_fetch_array($result)){
           $item_id = $row["item_id"];
           $query1="SELECT details from oD1vDCB9Nu.shop WHERE id='$item_id'";
           $r= mysqli_query($conn, $query1) or die(mysqli_error($conn));
           $query2="SELECT quantity,timeoforder from oD1vDCB9Nu.users_shop WHERE item_id='$item_id' and user_id='$user_id' ";
           $r1=mysqli_query($conn, $query2) or die(mysqli_error($conn));
           $roww= mysqli_fetch_array($r);
           $roww1= mysqli_fetch_array($r1);
           $m1= $roww['details']." &nbsp; "."quantity:"."&nbsp;".$roww1['quantity']." &nbsp;  "." time of order :"." &nbsp; ".$roww1['timeoforder']."<br>";
           $m=$m.$m1;
         
           $query1 = "UPDATE oD1vDCB9Nu.users_shop SET status = 'Confirmed' WHERE item_id = '$item_id'";
           $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
       }
       $query1 = "DELETE FROM oD1vDCB9Nu.users_shop  WHERE user_id ='$user_id' ";
       $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
       $subject="About your order";
       $headers = 'From: anshulbhatt690@gmail.com'       . "\r\n" .
       'Reply-To: anshulbhatt690@gmail.com' . "\r\n" .
       'X-Mailer: PHP/' . phpversion();
       mail($_SESSION['email'],$subject,$m,$headers);
   

       ?>
       <div id="contai">
           <div id="main">
          <div class="container panel-margin"style="margin-top:170px" >
             <div class="alert alert-success">
               <p><?php echo  $m;?></p>

            </div>
          </div>
        <div class="container panel-margin">
            <div class="alert alert-success">
                Your order is confirmed. Thank you for shopping
                with us. <a href="shop.php?type=shop" style="color: blue;">​Click here​</a> to purchase any other item.

            </div>

        </div>
    </div>
    </div>
        <footer style="background-color: #101010;
  color: #9d9d9d;
  width: 100%;
  margin-top:-100px;
  clear:both;
  position:relative;" >
  <div>
      <center >
          <p>Copyright © Lifestyle store. All Rights Reserved </p>
      </center>
  </div>
</footer>
     </body>
</html>