<?php
    require 'includes/common.php';
    $item_id = $_GET["id"];
    $type=$_GET['type'];
    $ty=$_GET['ty'];
    $user_id = $_SESSION["id"];
    ?>
    <?php
    if(isset($_POST['submit']))
    {
        $quan=$_POST['quantity'];
        $query = "INSERT INTO oD1vDCB9Nu.users_shop(user_id, item_id,quantity, status,timeoforder) VALUES('$user_id', '$item_id','$quan', 'Added to cart',CURRENT_TIMESTAMP())";

              $query_result = mysqli_query($conn, $query)or die(mysqli_error($conn));
              $type=$type."?type=".$ty;
          
         header("location: $type");
    }
    ?>
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>

    </head>
    </html>
    <body>
    <div class="container" style="margin-bottom: 56px;" >
            <div class="row" style="margin-top: 10%; margin-left: 30%;">
                <div class="col-xs-6">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>Please enter the quantity of the product</h4>
                        </div>
                        <div class="panel-body" style="margin-bottom: 35px;">
  <form  method="POST" action="cart-add.php?id=<?php echo $item_id ?>&type=<?php echo $type ?>&ty=<?php echo $ty ?>">
                                <div class="form-group">
                                    <input type="number" placeholder="quantity" class="form-control input-lg" name="quantity" required>

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                               
                            </form>
</body>
</html>
         