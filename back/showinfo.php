<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php session_start();?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <title>Crown - premium responsive admin template for backend systems</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript" src="js/plugins/spinner/ui.spinner.js"></script>
    <script type="text/javascript" src="js/plugins/spinner/jquery.mousewheel.js"></script>

    <script type="text/javascript" src="js/jquery-ui.min.js"></script>

    <script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.flot.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.sparkline.min.js"></script>

    <script type="text/javascript" src="js/plugins/forms/uniform.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.cleditor.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/autogrowtextarea.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.dualListBox.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.inputlimiter.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/chosen.jquery.min.js"></script>

    <script type="text/javascript" src="js/plugins/wizard/jquery.form.js"></script>
    <script type="text/javascript" src="js/plugins/wizard/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/wizard/jquery.form.wizard.js"></script>

    <script type="text/javascript" src="js/plugins/uploader/plupload.js"></script>
    <script type="text/javascript" src="js/plugins/uploader/plupload.html5.js"></script>
    <script type="text/javascript" src="js/plugins/uploader/plupload.html4.js"></script>
    <script type="text/javascript" src="js/plugins/uploader/jquery.plupload.queue.js"></script>

    <script type="text/javascript" src="js/plugins/tables/datatable.js"></script>
    <script type="text/javascript" src="js/plugins/tables/tablesort.min.js"></script>
    <script type="text/javascript" src="js/plugins/tables/resizable.min.js"></script>

    <script type="text/javascript" src="js/plugins/ui/jquery.tipsy.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.collapsible.min.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.progress.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.timeentry.min.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.colorpicker.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.breadcrumbs.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.sourcerer.js"></script>

    <script type="text/javascript" src="js/plugins/calendar.min.js"></script>
    <script type="text/javascript" src="js/plugins/elfinder.min.js"></script>

    <script type="text/javascript" src="js/custom.js"></script>

    <script type="text/javascript" src="js/charts/chart.js"></script>

    <!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>

<body>

<!-- Left side content -->
<div  id="leftSide">
    <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" /></a></div>

    <div class="sidebarSep mt0"></div>

    <!-- Search widget -->

    <div class="sideProfile">
        <a href="#" title="" class="profileFace"><img src="images/user.png" alt="" /></a>
        <span>欢迎您 <strong> <?php echo $_SESSION['user'];?> </strong></span>
        <span>您的职位： 系统管理员</span>
        <div class="clear"></div>

    </div>



    <div class="sidebarSep"></div>
    <!-- General balance widget -->




    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <li class="dash"><a href="index.php" title="" class="active"><span>主页</span></a></li>


        <li class="ui"><a href="showinfo.php" title=""><span>信息查看</span></a></li>
        <li class="forms"><a href="addinfo.php" title="" ><span>添加信息</span></a></li>

    </ul>
</div>


<!-- Right side -->
<div style="height: 800px;" id="rightSide">
    <?php session_start();?>
    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="images/userPic.png" alt="" /></a><span>欢迎您  <?php echo $_SESSION['user'];?>!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="index.php" title=""><img src="images/icons/topnav/profile.png" alt="" /><span>个人中心</span></a></li>

                    <li><a href="index.php" title=""><img src="images/icons/topnav/settings.png" alt="" /><span>系统管理</span></a></li>
                    <li><a href="../logout.php" title=""><img src="images/icons/topnav/logout.png" alt="" /><span>注销</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Responsive header -->


    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo $_SESSION['user'];?></h5>
                <span>您可以在这里管理您的整个系统</span>
            </div>
            <div class="middleNav">
                <ul>
                    <li class="mUser"><a href="index1.php" title="主页"class="tipN"><span class="users"></span></a></li>
                    <li class="mMessages"><a href="addinfo.php" title="添加信息" class="tipN"><span class="messages"></span></a>

                    </li>

                    <li class="mOrders"><a href="showinfo.php" title="查看信息"class="tipN"><span class="orders"></span></a>

                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="line"></div>

    <!-- Page statistics and control buttons area -->
    <div class="statsRow">
        <div class="wrapper">
            <div class="controlB">
                <ul>
                    <li><a href="addinfo.php" title=""><img src="images/icons/control/32/plus.png" alt="" /><span>添加信息</span></a></li>
                    <!--<li><a href="#" title=""><img src="images/icons/control/32/hire-me.png" alt="" /><span>添加分销商信息</span></a></li>

                    <li><a href="#" title=""><img src="images/icons/control/32/statistics.png" alt="" /><span>Check statistics</span></a></li>
                    -->
                    <li><a href="showinfo.php" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>信息查看</span></a></li>

                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="line"></div>
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



    ?>


    <!-- Main content wrapper -->
    <div class="wrapper">


        <!-- Widgets -->
        <div class="widgets">
            <div class="oneTwo">

            <?php
            $sql = "SELECT * FROM person_10312 ORDER BY pid";
            $result = $conn->query($sql);
            //$row = $result->fetch_assoc();

            ?>
                <!-- Partners list widget -->
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/users.png" alt="" class="titleIcon" /><h6>人员信息</h6></div>
                    <ul class="partners">
                        <?php
                        if ($result->num_rows > 0) {
                        // 输出每行数据
                        while($row = $result->fetch_assoc()) { ?>
                        <li>
                            <a href="#" title="" class="floatL"><img src="images/user.png" alt="" /></a>
                            <div class="pInfo">
                                <a href="#" title=""><strong><?php echo $row["name"];?>    <br>     职位:<?php echo $row["position"];?></strong></a>
                                <br>
                                <p style="float: left">电话号码:<?php echo $row["tel"];?></p>
                                <p style="float: left; margin-left: 20px;">Email:<?php echo $row["email"];?></p>
                                <p style="float: left; margin-left: 20px;">身份证号码:<?php echo $row["idcard"];?></p>
                            </div>

                            <div class="clear"></div>
                        </li>
                        <?php     }
                        } else {
                            echo "暂无人员记录";
                        }
                        ?>
                    </ul>
                </div>


            </div>

            <!-- 2 columns widgets -->
            <div class="oneTwo">

                <?php
                $sql = "SELECT * FROM agency_10312 ORDER BY aid";
                $result = $conn->query($sql);
                //$row = $result->fetch_assoc();
                //echo $result->num_rows;
                $conn->close();
                ?>


                <!-- New users widget -->
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/add.png" alt="" class="titleIcon" /><h6>分销商信息</h6></div>

                    <?php
                    if ($result->num_rows > 0) {
                    // 输出每行数据

                    while($row = $result->fetch_assoc()) { ?>
                    <div class="wUserInfo">
                        <a href="#" title="" class="wUserPic"><img src="images/user.png" alt="" /></a>
                        <ul class="leftList">
                            <li><a href="#" title=""><strong><?php echo $row["name"];?></strong></a></li>
                            <li><a href="#" title="">地址:<?php echo $row["address"];?></a></li>
                        </ul>
                        <ul class="rightList">
                            <li><a href="#" class="green"><strong>代理费:￥<?php echo $row["payin"];?></strong></a></li>
                            <li><a href="#" class="red">Tel:<?php echo $row["tel"];?></a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <?php     }
                    } else {
                        echo "暂无分销商记录";
                    }
                    ?>



                </div>



            </div>
            <div class="clear"></div>
        </div>

    </div>

    <!-- Footer line -->


</div>

<div class="clear"></div>

</body>
</html>