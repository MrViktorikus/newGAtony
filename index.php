<!DOCTYPE html>
<?php
session_start();
//$_SESSION["user"] = NULL;
?>
<html lang="en">
    <head>
        <title>Cranes Crown</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--<link type="text/css" rel="stylesheet" href="css/navtest.css">-->
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="jquery-1.11.2.min.js"></script>
        <script src="js/unslider.min.js"></script>
        <script src="js/index.js"></script>
        <script src="js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/cartButton.js"></script>

    </head>
    <body>
        <div id="wrapper">
            <div class="jumbotron backgroundheader navbar navbar-default navbar-fixed-top nav-shado">
                <div class="container">
                    <div class=" navbar navbar-static-top navigation">
                        <a class="logo col-sm-5" href="index.php"><h1>Cranes Crown</h1></a>
                        <div class='navigation2 col-sm-7'>
                            <li><a href="index.php">Home</a></li>  
                            <li class="dropdown">

                                <a href="shop.php" class="dropdown-toggle" >Shop<b class="caret"></b></a>                      

                                <ul class="dropdown-menu mega-menu droppdown">

                                    <li class="mega-menu-column ">
                                        <ul>
                                            <li class="nav-header">Kille</li>
                                            <li class="undermen"><a href="#">Hoodie</a></li>
                                            <li class="undermen"><a href="#">T-shirt</a></li>
                                            <li class="undermen"><a href="#">Shirt</a></li>
                                            <li class="undermen"><a href="#">Shorts</a></li>
                                            <li class="undermen"><a href="#">Jeans</a></li>
                                            <li class="undermen"><a href="#">Trousers</a></li>
                                        </ul>
                                    </li>    

                                    <li class="mega-menu-column">
                                        <ul>
                                            <li class="nav-header">Tjej</li>
                                            <li class="undermen"><a href="#">Hoodie</a></li>
                                            <li class="undermen"><a href="#">T-shirt</a></li>
                                            <li class="undermen"><a href="#">Shirt</a></li>
                                            <li class="undermen"><a href="#">Shorts</a></li>
                                            <li class="undermen"><a href="#">Jeans</a></li>
                                            <li class="undermen"><a href="#">Trousers</a></li>
                                        </ul>
                                    </li> 

                                    <li class="mega-menu-column">
                                        <ul>                            
                                            <li class="nav-header">Barn</li>
                                            <li class="undermen"><a href="#">Hoodie</a></li>
                                            <li class="undermen"><a href="#">T-shirt</a></li>
                                            <li class="undermen"><a href="#">Shirt</a></li>
                                            <li class="undermen"><a href="#">Shorts</a></li>
                                            <li class="undermen"><a href="#">Jeans</a></li>
                                            <li class="undermen"><a href="#">Trousers</a></li>
                                        </ul>
                                    </li> 

                                </ul>


                            </li>

                            <li><a href="contact.php">Contact</a></li>
                            <?php
                            include "cartDesign.php";
                            ?>
                            <div class="login LS-dropdown">
                                <?php
                                if (isset($_SESSION["user"])) {
                                    if ($_SESSION["user"] != NULL) {
                                        echo "<div class=loggedin>";
                                        echo "Logged in as " . $_SESSION["user"];
                                        echo "</div>";
                                        echo "<form method='POST' action='signout.php'>";
                                        echo "<input class = 'productbuttondesign sigout' type='submit' name='action' value='signout'></input>";
                                        echo "</form>";                                   
                                        
                                    }
                                } else {
                                    echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Login | Signup<b class='caret'></b></a>";
                                }
                                ?>
                                <div class="dropdown-menu login-menu LS-droppdown">
                                    <div class="row"> 

                                        <div class="col-sm-6 login">
                                            <form method = 'POST' action ='signup.php'>
                                                <h2>Signup</h2>
                                                <h3 class ='user'>Username:</h3>
                                                <input name = 'username' type = 'text' placeholder = 'Username' required>
                                                <h3 class = 'user'>Password:</h3>
                                                <input name = 'password' type = 'password' placeholder = 'Password' required>
                                                <input class = 'productbuttondesign send' type ='submit' name = 'action' value = 'Sign Up'>
                                            </form>
                                        </div>

                                        <div class = 'col-sm-6 login'>
                                            <form method = 'POST' action = 'login.php'>
                                                <h2>Login</h2>
                                                <h3 class = 'user'>Username:</h3>
                                                <input name = 'username' type = 'text' placeholder = 'Username' required>
                                                <h3 class = 'user'>Password:</h3>
                                                <input name = 'password' type = 'password' placeholder = 'Password' required>
                                                <input class = 'productbuttondesign send' type = 'submit' name = 'action' value = 'Login'>
                                            </form>
                                            ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="slider">

                    <div class="banner">
                        <ul>
                            <li><a href=""><img class="imgBanner"href="#" src="img/tröja.jpg"></a></li>
                            <li><a href=""><img class="imgBanner"href="#" src="img/tröja.jpg"></a></li>
                            <li><a href=""><img class="imgBanner"href="#" src="img/tröja.jpg"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 underslider">
                        <img class="img-responsive img"href="#" src="img/example.jpg">
                        <h3>Male</h3>
                    </div>
                    <div class="col-sm-4 underslider">
                        <img class="img-responsive img"href="#" src="img/example.jpg">
                        <h3>Female</h3>
                    </div>
                    <div class="col-sm-4 underslider">
                        <img class="img-responsive img"href="#" src="img/example.jpg">
                        <h3>Children</h3>
                    </div>
                </div>

                <ul class="nav nav-tabs indexproduktnav">
                    <li><a href="#">Best Selling</a></li>
                    <li><a href="#">Sale</a></li>
                    <li><a href="#">New Products</a></li>        
                </ul>

                <div class="row">
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/example.jpg">
                        <h3>Male</h3>
                    </div>
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/example.jpg">
                        <h3>Female</h3>
                    </div>
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/example.jpg">
                        <h3>Children</h3>
                    </div>
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/example.jpg">
                        <h3>Male</h3>
                    </div>
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/example.jpg">
                        <h3>Female</h3>
                    </div>
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/example.jpg">
                        <h3>Children</h3>
                    </div>
                </div>
            </div>
            <div class="jumbotron backgroundfooter">
                <div class="container navbar">

                    <div class="col-sm-4 footercontent">
                        <h2>© 2014 Clothes Store </h2>
                        <p>By David KB, Viktor RT <br>
                            Albin S, Tony T</p>
                    </div>
                    <div class="col-sm-4 footercontent">
                        <h2>Find us</h2>
                        <p>Adress: Berzeliusgatan 96</p>
                        <p>City: Linköping</p>
                        <p>Phone nr: 013-27092204</p>
                    </div>
                    <div class="col-sm-4 footercontent">
                        <h2>Follow us</h2>
                        <div id="share-buttons">
                            <a href="http://www.facebook.com" target="_blank">
                                <img src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>
                            <a href="http://twitter.com/" target="_blank">
                                <img src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>
                            <a href="https://plus.google.com/" target="_blank">
                                <img src="http://www.simplesharebuttons.com/images/somacro/google.png" alt="Google" /></a>
                            <a href="http://reddit.com/" target="_blank">
                                <img src="http://www.simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" /></a>
                            <a href="http://www.simplesharebuttons.com">
                                <img src="http://www.simplesharebuttons.com/images/somacro/email.png" alt="Email" /></a> 
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>