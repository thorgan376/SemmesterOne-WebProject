<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">  
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./css/styleneed.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/search.css">
</head>
<body>
<?php
 require "database.php";
 if(isset($_GET['search'])){
 $product = new product;   
 $data = $product->searchbox($_GET['search']);
 $numberproduct = $data["numberofsearch"];
 $productsearcharr = $data["productsearcharr"];
 $noresult = "Result found";
 $buttonbg[0] = "./image/buttonbg1.jpg";
 $buttonbg[1] = "./image/buttonbg2.jpg";
 $buttonbg[2] = "./image/buttonbg3.jpg";
 $buttonbg[3] = "./image/buttonbg4.jpg";
 $buttonbg[4] = "./image/buttonbg5.jpg";
 $buttonbg[5] = "./image/buttonbg6.jpg";
 if($numberproduct==0){
    $noresult = "No result found";
    for($i=$numberproduct;$i<6;$i++){
        $buttonbg[$i] = "";
     }
 }else{
     for($i=$numberproduct;$i<6;$i++){
        $buttonbg[$i] = "";
     }
 }
}else{
    $noresult = "No result found";
}
?>
    <div style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div>
                        <h1><a href="./index.php">
                            <img src="./image/logofix6.png" style="height: 65px; ">
                        </a></h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row border">
                        <div class="search-box">
                            <div>
                                <form id="form-search" role="form" method="GET" action="./index.php">
                                    <div>
                                        <div class="input-group ml-4" style="width: 100%">
                                            <input type="text" name="search" value="" id="search" class="form-control"
                                                   placeholder="Search what you want...">
                                            <span class="input-group-btn">
                                            <button id="btn-search" class="btn btn" style="background-color: rgb(254, 209, 1);">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
        </div>
    </div>
    </div>
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    <li><a class="taskbar" href="./shoppage.php">Shop Me</a></li>
                        <li><a class="taskbar" href="./index.php">Home</a></li>
                        <li><a class="taskbar" href="./contactus.php">Contact Us</a></li>
                        <li><a class="taskbar" href="./contactus.php">About Us</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
    <h3 style="margin: 0 auto; text-align:center; line-height: 130px; background-color:rgb(77, 77, 77); color:white;"><?php echo $noresult; ?></h3>
    <form action="./productsearch.php" method="GET">
    <button type="submit" name="<?php echo $productsearcharr[0][4]; ?>" value="<?php echo $productsearcharr[0][3]; ?>" 
        class="productchoosebutton" style="background-image: url(<?php echo $buttonbg[0]; ?>);">    
        <img src="<?php echo $productsearcharr[0][1]; ?>" alt="" class="productimginfo imageproductbutton">
        <p class="productnamesearch"><?php echo $productsearcharr[0][0]; ?></p>
        <p class="productpricesearch"><?php echo $productsearcharr[0][2]; ?></p>
    </button><br>
    <button type="submit" name="<?php echo $productsearcharr[1][4]; ?>" value="<?php echo $productsearcharr[1][3]; ?>" 
        class="productchoosebutton" style="background-image: url(<?php echo $buttonbg[1]; ?>);">      
        <img src="<?php echo $productsearcharr[1][1]; ?>" alt="" class="productimginfo imageproductbutton">
        <p class="productnamesearch"><?php echo $productsearcharr[1][0]; ?></p>
        <p class="productpricesearch"><?php echo $productsearcharr[1][2]; ?></p>
    </button><br>
    <button type="submit" name="<?php echo $productsearcharr[2][4]; ?>" value="<?php echo $productsearcharr[2][3]; ?>" 
        class="productchoosebutton" style="background-image: url(<?php echo $buttonbg[2]; ?>);">  
        <img src="<?php echo $productsearcharr[2][1]; ?>" alt="" class="productimginfo imageproductbutton">
        <p class="productnamesearch"><?php echo $productsearcharr[2][0]; ?></p>
        <p class="productpricesearch"><?php echo $productsearcharr[2][2]; ?></p>
    </button><br>
    <button type="submit" name="<?php echo $productsearcharr[3][4]; ?>" value="<?php echo $productsearcharr[3][3]; ?>" 
        class="productchoosebutton" style="background-image: url(<?php echo $buttonbg[3]; ?>);">    
        <img src="<?php echo $productsearcharr[3][1]; ?>" alt="" class="productimginfo imageproductbutton">
        <p class="productnamesearch"><?php echo $productsearcharr[3][0]; ?></p>
        <p class="productpricesearch"><?php echo $productsearcharr[3][2]; ?></p>
    </button><br>
    <button type="submit" name="<?php echo $productsearcharr[4][4]; ?>" value="<?php echo $productsearcharr[4][3]; ?>" 
        class="productchoosebutton" style="background-image: url(<?php echo $buttonbg[4]; ?>);">    
        <img src="<?php echo $productsearcharr[4][1]; ?>" alt="" class="productimginfo imageproductbutton">
        <p class="productnamesearch"><?php echo $productsearcharr[4][0]; ?></p>
        <p class="productpricesearch"><?php echo $productsearcharr[4][2]; ?></p>
    </button><br>
    <button type="submit" name="<?php echo $productsearcharr[5][4]; ?>" value="<?php echo $productsearcharr[5][3]; ?>" 
        class="productchoosebutton" style="background-image: url(<?php echo $buttonbg[5]; ?>);">    
        <img src="<?php echo $productsearcharr[5][1]; ?>" alt="" class="productimginfo imageproductbutton">
        <p class="productnamesearch"><?php echo $productsearcharr[5][0]; ?></p>
        <p class="productpricesearch"><?php echo $productsearcharr[5][2]; ?></p>
    </button><br>
    </form>
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 footeraboutus">
                    <div class="footer-about-us">
                        <h2>E<span>Pro</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt 
                            id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, 
                            modi aliquid eveniet eligendi iure at?</p>
                    </div>
                </div>
                
                
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><p>Fan</p></li>
                            <li><p>Air conditioner</p></li>
                            <li><p>Light bulb</p></li>
                            <li><p>Fridge</p></li>
                            <li><p>Microwave</p></li>
                        </ul>                        
                    </div>
                </div>
                <div class="subscribebox">
                    <div>
                        <h2 class="subheader">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div>
                            <form action="./index.php">
                                <input type="email" name="subscribe" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2021 ePro. All Rights Reserved.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
if(isset($_GET['fanid']))
{
redirect("http://localhost:83/fan.php?fanid=".$_GET['fanid']);
}
if(isset($_GET['airconditionerid']))
{
redirect("http://localhost:83/airconditioner.php?airconditionerid=".$_GET['airconditionerid']);
}
if(isset($_GET['fridgeid']))
{
redirect("http://localhost:83/fridge.php?fridgeid=".$_GET['fridgeid']);
}
if(isset($_GET['lightbulbid']))
{
redirect("http://localhost:83/lightbulb.php?lightbulbid=".$_GET['lightbulbid']);
}
if(isset($_GET['microwaveid']))
{
redirect("http://localhost:83/microwave.php?microwaveid=".$_GET['microwaveid']);
}
function redirect($url){
echo '<script>window.location="'.$url.'"</script>';
}
?>
</body>
</html>