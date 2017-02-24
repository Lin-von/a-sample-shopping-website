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
    <?php session_start(); global $flag; $flag=0;?>
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">男子<b class="caret"></b></a>
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
                    <li><a href="products.php">商品</a></li>
                    <li class="active">购物车</li>
                </ol>
            </div>
        </div>
        <!-- check-out -->

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
        $uname = $_SESSION['user'];

        $sql = "SELECT * FROM user_10312 WHERE name = '$uname' ";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $level = $row['level'];

        $sql = "SELECT cart_10312.*,item_10312.* FROM cart_10312 join item_10312 on cart_10312.gid=item_10312.gid WHERE cart_10312.uname = '$uname' ";

        $result = $conn->query($sql);

        $sql = "SELECT sum(cost) FROM cart_10312  WHERE uname = '$uname' ";
        $result1 = $conn->query($sql);
        $row1 = $result1->fetch_row();
        $sum=$row1[0];

        $conn->close();
        ?>

            <div class="check">
                <div class="container">	 
                    <div class="col-md-3 cart-total">
                        <a class="continue" href="products.php">继续购物</a>
                        <div class="price-details">
                            <h3>清单计算</h3>
                            <div style="width: 255px;height: 27px;" >
                            <span>总额</span>
                            <span class="total1"><?php echo $sum;?></span>
                            </div>
                            <div style="width: 255px;height: 27px;" >
                            <span>会员等级</span>
                            <span class="total1">LV<?php echo $row['level'];?></span>
                                </div >
                            <div style="width: 255px;height: 27px;" >
                            <span>折扣</span>
                            <span class="total1"><?php echo $sum*(0.1*$row['level'])."(".$row['level']."0%)";?></span>
                                </div >
                            <div class="clearfix"></div>				 
                        </div>
                        <hr class="featurette-divider">
                        <ul class="total_price">
                           <li class="last_price"> <h4>总额</h4></li>
                           <li class="last_price"><span><?php echo $sum*(1-0.1*$row['level']);?></span></li>
                           <div class="clearfix"> </div>
                        </ul> 
                        <div class="clearfix"></div>
                        <script>
                            function test() {
                                var cnt=<?php echo $result->num_rows;?>;
                                var flag;
                                var arr=document.getElementsByClassName("tip");
                                for(var i=0;i<arr.length;i++)
                                    if(arr[i].innerHTML=="超过购买上限") {flag=1; break;}
                                /*for(var i=0;i<arr.length;i++)
                               alert(arr[0].innerHTML=="超过购买上限");*/
                                if(cnt==0)
                                {
                                    alert("您的购物车是空的！");
                                    return;
                                }
                                else if(flag==1)
                                {
                                    alert("您有商品超过购买上限，请检查您的购物车！");
                                    return;
                                }
                                else window.location.href="clearout.php?price=<?php echo $sum*(1-0.1*$row['level']);?>";
                            }
                        </script>
                        <a class="order" href="#" onclick="test()">结算</a>
                    </div>
                    <div class="col-md-9 cart-items">
                        <h1>我的购物车(<?php echo $result->num_rows;?>)</h1>
                        <?php
                        if ($result->num_rows > 0) {
                        // 输出每行数据
                        while($row = $result->fetch_assoc()) { ?>
                        <div class="cart-header">
                             <div class="close1"><a href="delete.php?gid=<?php echo $row["gid"];?>"><span class="glyphicon glyphicon-remove" aria-hidden="true">删除该商品</span></a></div>
                               <div class="cart-sec simpleCart_shelfItem">
                                    <div class="cart-item cyc">
                                        <img src="images/<?php echo $row["name"];?>.png" class="img-responsive" alt=""/>
                                    </div>
                                   <div class="cart-item-info">
                                       <ul style="font-size: 1.5em;" class="qty">
                                           <li><p><?php echo $row["name"];?></p></li>

                                       </ul>
                                        <ul style="font-size: 1.2em;" class="qty">
                                            <li><p>尺码 : <?php echo $row["size"];?></p></li>
                                            <li><p>数量 : <?php echo $row["count"];?></p></li>
                                            <?php if($row["count"]>$row["remain"])  echo "<li><div style='color: red' class='tip'>超过购买上限</div></li>"; ?>
                                            <li><p>单价 : ￥<?php echo $row["price"];?></p></li>
                                        </ul>
                                    </div>
                                   <div class="clearfix"></div>

                              </div>
                         </div>
                            <br>
                        <?php     }
                        } else {
                            echo "您的购物车空空如也！";
                        }
                        ?>

                    </div>
                    <div class="clearfix"> </div>
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