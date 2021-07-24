
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                        <a href="index.php" class="navbar-brand">Lifestyle store</a>
                  </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                        if(isset($_SESSION['email']))
                        {?>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"> Cart</span></a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"> Settings</span></a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
                        <?php }
                        else {?>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"> Signup</span></a></li>
                        <?php } ?>
                    </ul>
                   </div> 
                 </div>

                </div>
        
            </div>
        </nav>