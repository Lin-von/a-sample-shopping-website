<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta charset utf="8">
    <!--fonts-->
    <link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>

    <!--fonts-->
    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--coustom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <!--shop-kart-js-->
    <script src="js/simpleCart.min.js"></script>
    <!--default-js-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!--bootstrap-js-->
    <script src="js/bootstrap.min.js"></script>
    <!--script-->
    <!-- FlexSlider -->
    <script src="js/imagezoom.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <!-- //FlexSlider-->
</head>
<?php session_start();?>
<body>
<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="index.php">FOOTBALL SHOES</a>
            </div>
            <div class="login-bars">
                <?php if(!isset($_SESSION['user'])) {?>
                    <a class="btn btn-default log-bar" href="register.php" role="button">注册</a>
                    <a class="btn btn-default log-bar" href="signup.php" role="button">登录</a>
                <?php }
                else {?>

                    <a style="background-color: gainsboro;" class="btn btn-default log-bar" href="back/index.php" role="button">个人管理中心</a>
                    <a style="background-color: gainsboro;" class="btn btn-default log-bar" href="logout.php" role="button">注销</a>
                    <p style="font-family: 微软雅黑;font-size: 1.5em;color: gainsboro;float: left"><?php echo $_SESSION['user']?> &nbsp;</p>
                    <div class="cart box_1">
                        <a href="checkout.php">
                            <h3>
                                <div class="total">
                                    <span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div></h3>
                        </a>
                        <p><a href="checkout.php" class="simpleCart_empty">查看购物车</a></p>
                        <div class="clearfix"> </div>
                    </div>
                <?php }?>
            </div>
            <div class="clearfix"></div>
        </div>
        <!---menu-----bar--->
        <div class="header-botom">
            <div class="content white">
                <nav class="navbar navbar-default nav-menu" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--/.navbar-header-->


                    <!--/.navbar-collapse-->
                    <div class="clearfix"></div>
                </nav>
                <!--/.navbar-->
                <div class="clearfix"></div>
            </div>
            <!--/.content--->
        </div>
        <!--header-bottom-->
    </div>
</div>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">首页</a></li>

            <li class="active">结果</li>
        </ol>
    </div>
</div>
<!-- reg-form -->
<div class="reg-form">
    <div class="container">
        <div class="reg">
            <h3>
                <?php
                $from=$_GET['from'];
                if($from=="incart") echo "添加成功";
                if($from=="buy") echo "购买成功";

                ?></h3>

        </div>
    </div>
</div>
<div style="position: fixed; bottom: 0px;left: 20%;" class="footer-grid">
    <div class="container">
        <div class="col-md-2 re-ft-grd">
            <h3>Categories</h3>
            <ul class="categories">
                <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Kids</a></li>
                <li><a href="#">Formal</a></li>
                <li><a href="#">Casuals</a></li>
                <li><a href="#">Sports</a></li>
            </ul>
        </div>
        <div class="col-md-2 re-ft-grd">
            <h3>Short links</h3>
            <ul class="shot-links">
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Delivery</a></li>
                <li><a href="#">Return Policy</a></li>
                <li><a href="#">Terms & conditions</a></li>
                <li><a href="contact.php">Sitemap</a></li>
            </ul>
        </div>
        <div class="col-md-6 re-ft-grd">
            <h3>Social</h3>
            <ul class="social">
                <li><a href="#" class="fb">facebook</a></li>
                <li><a href="#" class="twt">twitter</a></li>
                <li><a href="#" class="gpls">g+ plus</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="col-md-2 re-ft-grd">
            <div class="bt-logo">
                <div class="logo">
                    <a href="index.php" class="ft-log">N-AIR</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="copy-rt">
        <div class="container">
            <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
        </div>
    </div>
</div>
</body>
</html>