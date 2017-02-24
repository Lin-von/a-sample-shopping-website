<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Products</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<!--fonts-->
		<link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		
		<!--fonts-->
        <!--form-css-->
        <link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
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

                        <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav nav-font">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">商品<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.php">足球鞋</a></li>

                                        <li class="divider"></li>
                                        <li><a href="#">配件</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">品牌<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.php?brand=adidas">Adidas</a></li>
                                        <li><a href="products.php?brand=nike">Nike</a></li>
                                        <li><a href="products.php?brand=puma">Puma</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">男士<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.php">足球鞋</a></li>

                                        <li class="divider"></li>
                                        <li><a href="#">配件</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">女子<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.php">足球鞋</a></li>

                                        <li class="divider"></li>
                                        <li><a href="#">配件</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">儿童<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.php">足球鞋</a></li>

                                        <li class="divider"></li>
                                        <li><a href="#">配件</a></li>

                                    </ul>
                                </li>


                                <div class="clearfix"></div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
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
                    <li class="active">商品</li>
                </ol>
            </div>
        </div>
        <?php
        header("Content-Type: text/html;charset=utf-8");
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "maindb_10312";

        // 创建连接
        $conn = new mysqli($servername, $username, $password, $dbname);
        // 检测连接
        if ($conn->connect_error) {
            die("连接失败: " . $conn->connect_error);
        }
        mysqli_set_charset ($conn,utf8);
            $brand = $_GET['brand'];
            $series = $_GET['series'];
            if($brand!="")
            {

                $sql = "SELECT DISTINCT name,price FROM item_10312 WHERE brand = '$brand' ";
            }
            else if($series!="")
            {

                $sql = "SELECT DISTINCT name,price FROM item_10312 WHERE series = '$series' ";
            }
            else
            {
                $sql = "SELECT DISTINCT name,price FROM item_10312";
            }
        $result = $conn->query($sql);
        //$row = $result->fetch_assoc();
        $conn->close();
        ?>
        <div class="products-gallery">
           <div class="container">
               <div class="col-md-9 grid-gallery">
                   <?php
                   if ($result->num_rows > 0) {
                       // 输出每行数据
                       while($row = $result->fetch_assoc()) { ?>


                           <div class="col-md-4 grid-stn simpleCart_shelfItem">
                               <!-- normal -->
                               <div class="ih-item square effect3 bottom_to_top">
                                   <div class="bottom-2-top">
                                       <div style="height: 169.98px;width: 254.98px;" class="img"><img style="height: 215.86px; width: 254.97px;" src="images/<?php echo $row["name"];?>.png" alt="/" class="img-responsive gri-wid"></div>
                                       <div class="info">
                                           <div class="pull-left styl-hdn">
                                               <h3><?php echo $row["name"];?></h3>
                                           </div>
                                           <div class="pull-right styl-price">
                                               <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">￥<?php echo $row["price"];?></span></a></p>
                                           </div>
                                           <div class="clearfix"></div>
                                       </div></div>
                               </div>
                               <!-- end normal -->
                               <div class="quick-view">
                                   <a href="single.php?name=<?php echo $row["name"];?>&price=<?php echo $row["price"];?>">立即查看</a>
                               </div>
                           </div>

                  <?php     }
                   } else {
                       echo "没有该类商品";
                   }
                   ?>


                    <div class="clearfix"></div>
               </div>


               <div class="col-md-3 grid-details">
                    <div class="grid-addon">
                        <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>品牌</h4>
                         <div class="tab1">
                             <ul class="place">
                                 <a href="products.php" ><li class="sort">全部商品</li></a>

                                 <div class="clearfix"> </div>
                             </ul>

                         </div>
                         <div class="tab1">
							 <ul class="place">								
								 <li class="sort">Adidas</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="products.php?series=X"><p>X</p></a>
									<a href="products.php?series=ACE"><p>ACE</p></a>
									<a href="products.php?series=MESSI"><p>MESSI</p></a>

						     </div>
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort">Nike</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="products.php?series=刺客"><p>刺客</p></a>
									<a href="products.php?series=毒蜂"><p>毒蜂</p></a>
									<a href="products.php?series=鬼牌"><p>鬼牌</p></a>
									<a href="products.php?series=传奇"><p>传奇</p></a>
						     </div>
					      </div>
						  <div class="tab3">
							 <ul class="place">								
								 <li class="sort">Puma</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="products.php?series=Evopower"><p>Evopower</p></a>
									<a href="products.php?series=Evospeed"><p>Evospeed</p></a>

						     </div>
					      </div>						  
						  <!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->					 
				 </section>

                    </div>
               </div>
            <div class="clearfix"></div>
            </div> 
        </div>
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