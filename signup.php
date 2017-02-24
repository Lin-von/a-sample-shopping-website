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
        <link href="css/drag.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="js/drag.js" type="text/javascript"></script>
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
        <script type="text/javascript">
            function subcheck() {
                var a=document.getElementById("check").innerHTML;
                
                if(a=="拖动滑块验证") {alert("请完成验证！"); return false;}
                else return true;



            }
            </script>
        <!-- //FlexSlider-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.php">FOOTBALL SHOES</a>
                    </div>
                    <div class="login-bars">
                        <a class="btn btn-default log-bar" href="register.php" role="button">注册</a>
                        <a class="btn btn-default log-bar" href="signup.php" role="button">登陆</a>

                    </div>
        <div class="clearfix"></div>
                </div>
                <!---menu-----bar--->

                    <!--header-bottom-->
            </div>
        </div>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">首页</a></li>
                    <li class="active">登陆</li>
                </ol>
            </div>
        </div>

        <!--signup-->
        <!-- login-page -->
        <div class="login">
            <div class="container">
                <div class="login-grids">
                    <div class="col-md-6 log">
                             <h3>登陆</h3>
                             <div class="strip"></div>
                             <p>欢迎，请填写用户名和密码以登陆</p>

                             <form action="signin.php" method="post" onsubmit="return subcheck()">
                                 <h5>用户名:</h5>
                                 <input type="text" name="uname" value="">
                                 <h5>密码:</h5>
                                 <input type="password" name="upwd" value=""><br>
                                 <div id="drag"></div><br>

                                 <script type="text/javascript">
                                     $('#drag').drag();
                                 </script>

                                 <input type="submit" value="登陆">

                             </form>
                            <a href="#">忘记密码 ?</a>
                    </div>
                    <div class="col-md-6 login-right">
                            <h3>新用户</h3>
                            <div class="strip"></div>
                            <p>您可以在这里通过注册一个新用户来登陆以实现更便捷的访问</p>
                            <a href="register.php" class="button">点击注册</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
<!-- //login-page -->
        <!--signup-->
        <div class="footer-grid">
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