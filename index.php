<?php
 require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle store</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        
    
   </head>

    <body>
      <?php
      require 'includes/header.php';
      ?>
            <div id="banner-image">
                <div class="container">
                    <div id="banner-content">
                        <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <a href="shop.php?type=shop"><button class="btn btn-danger btn-lg active">Shop Now</button></a>

                     </div>

                </div>

            </div>
            <div class="container" style="margin-top: 50px; margin-bottom: 25px;">
             <div class="row">
                <div class="col-sm-4">
                    <a href="product.php?type=dresses" class="thumbnail"><img src="images_d/dress1.jpg" class="img-responsive" alt="" ></a>
                    <div class="caption">
                        <h2>Dresses</h2>
                        <p>Choose among the best quality fabric in the world.</p>

                    </div>

                </div>
                <div class="col-sm-4">
                <a href="product.php?type=watches" class="thumbnail"><img src="images_w/watch2.jpg" class="img-responsive" alt="" ></a>
                <div class="caption">
                    <h2>Watches</h2>
                    <p>Original watches from the best brands.</p>

                </div>
                </div>
                <div class="col-sm-4">
                    <a href="product.php?type=shoes" class="thumbnail"><img src="images_s/shoes1.jpg" class="img-responsive" alt="" ></a>
                    <div class="caption">
                        <h2>Shoes</h2>
                        <p>Choose among the best available in the world.</p>

                    </div>
                </div>
                </div>
             </div>
             <?php
             require 'includes/footer.php';
             ?>
       
    </body>
</html>