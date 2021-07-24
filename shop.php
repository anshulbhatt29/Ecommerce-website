<?php
require 'includes/common.php';
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
require 'includes/check-added-cart.php';
$typpe=$_GET['type'];
?>
        <div class="container" style="margin-top:10%;">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle store!</h1>
                <p>We have the best dresses, watches and shoes for you. No need to hunt around, we
                    have all in one place.</p>

            </div>
            <?php
               $query = "SELECT id, url,details,price FROM oD1vDCB9Nu.shop";

               $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
               while($row = mysqli_fetch_array($result)){
               

            ?>
            <div class="row text-center">
                <div class="col-sm-3 ">
                    <div class="items">
                        <a href="<?php echo $row['url'];?>"class="thumbnail" target="_blank"><img src="<?php echo$row['url'] ?>" class="img-responsive "></a> 
                        <div class="caption">
                            <h3><?php echo $row['details'];?></h3>
                            <p>Price:Rs.<?php echo $row['price'];?></p>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php } else{ ?>
                                <?php
                                if(check_if_added_to_cart( $row['id'])) {?>
                                   <a href="#" type="button" class="btn btn-block btn-success" disabled>Added to cart</a>
                                   <?php } else{ ?>
                                    <a href="cart-add.php?id=<?php echo $row['id']; ?>&type=shop.php&ty=<?php echo $typpe ;?>" type="button" name="add"  class="btn btn-primary btn-block">Add to cart</a>
                                   <?php } ?>
                                   <?php } $row = mysqli_fetch_array($result);?>


                        </div>
                    </div>

                  
                </div>
                    <div class="col-sm-3 ">
                     <div class="items">
                      <a href="<?php echo $row['url'] ;?>" class="thumbnail"target="_blank"> <img src="<?php echo$row['url'] ?>" class="img-responsive "></a>
                        <div class="caption">
                        <h3><?php echo $row['details'];?></h3>
                            <p>Price:Rs.<?php echo $row['price'];?></p>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php } else{ ?>
                                <?php
                                if(check_if_added_to_cart($row['id'])) {?>
                                   <a href="#" type="button" class="btn btn-block btn-success" disabled>Added to cart</a>
                                   <?php } else{ ?>
                                    <a href="cart-add.php?id=<?php echo $row['id']; ?>&type=shop.php&ty=<?php echo $typpe ;?>" type="button" name="add"  class="btn btn-primary btn-block">Add to cart</a>
                                   <?php } ?>
                                   <?php } $row = mysqli_fetch_array($result);?>

                        </div>

                     </div>
                    </div>
                    <div class="col-sm-3 ">
                        <div class="items">
                       <a href="<?php echo $row['url'];?>" class="thumbnail" target="_blank"> <img src="<?php echo $row['url'];?>" class="img-responsive "></a>
                        <div class="caption">
                        <h3><?php echo $row['details'];?></h3>
                            <p>Price:Rs.<?php echo $row['price'];?></p>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php } else{ ?>
                                <?php
                                if(check_if_added_to_cart($row['id'])) {?>
                                   <a href="#" type="button" class="btn btn-block btn-success" disabled>Added to cart</a>
                                   <?php } else{ ?>  
                           
                                    
                                    <a href="cart-add.php?id=<?php echo $row['id']; ?>&type=shop.php&ty=<?php echo $typpe ;?>" type="button" name="add"  class="btn btn-primary btn-block">Add to cart</a>
                                   <?php } ?>
                                   <?php } $row = mysqli_fetch_array($result);?>

                        </div>

                    </div>
                </div>
                    <div class="col-sm-3 ">
                        <div class="items">
                       <a href="<?php echo $row['url']; ?>" class="thumbnail" target="_blank" > <img src= "<?php echo $row['url'];?>"class="img-responsive"></a>
                        <div class="caption">
                        <h3><?php echo $row['details'];?></h3>
                            <p>Price:Rs.<?php echo $row['price'];?></p>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                            <?php } else{ ?>
                                <?php
                                if(check_if_added_to_cart($row['id'])) {?>
                                   <a href="#" type="button" class="btn btn-block btn-success" disabled>Added to cart</a>
                                   <?php } else{ ?>
                                    <a href="cart-add.php?id=<?php echo $row['id']; ?>&type=shop.php&ty=<?php echo $typpe ;?>" type="button" name="add"  class="btn btn-primary btn-block">Add to cart</a>
                                   <?php } ?>
                                   <?php } ?>

                        </div>

                    </div>
                </div>
            </div>
            <?php }?>
        </div>
       <?php
       require 'includes/footer.php';
       ?>
    </body>

</html>