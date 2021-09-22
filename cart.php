<?php
 require 'includes/common.php';
 if(!isset($_SESSION['email']))
 {
    header('location:login.php');
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
       $user_id = $_SESSION["id"];
       $query = "SELECT p.id, p.details, p.price ,up.quantity,up.timeoforder FROM sql6439142.shop p INNER JOIN sql6439142.users_shop up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";

       $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
       


       if(mysqli_num_rows($result) == 0){
           echo '<h4 class="container panel-margin">Add products to cart first! . Goto <a href="products.php">Products</a> page.</h4>';
       }else{
           $total = 0;
   ?>
      <div id="contai">
           <div id="main">
        <div class="container " style="margin-top: 10%;margin-bottom:20%; width:100%">
            <table style="border: 5px solid black; border-collapse: collapse ;width: 60%; margin-left: 20%;" class=" table table-hover">
                <tbody>
                    <tr>
                        <th>Item Number</th>  <th>Item Name</th> <th>quantity</th> <th>Price</th>  <th></th>
                    </tr>
                    <tr>
                    <?php while($row = mysqli_fetch_array($result)){ ?>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row["details"] ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php $total += $row["price"]*$row['quantity']; echo"Rs.". $row["price"]*$row['quantity']; ?> </td>
                       <td>
                        <a href="cart-remove.php?id= <?php echo $row['id'] ;?>" class="btn btn-primary"> Remove</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr><td> </td><td></td><td>Total :</td><td>Rs.<?php echo $total; ?></td><td><a href="success.php" class="btn btn-primary">Confirm order</a></td></tr>
                </tbody>
            </table>

        </div>
                    </div>
                    </div>
        <?php
       }
      
       ?>
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
