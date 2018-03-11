<?php 
session_start(); 
//include "include/chec.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>悦阅后台管理</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
		<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
		<!-- BEGIN: load jquery -->
		<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
		<script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
		<!-- END: load jquery -->
		<!-- BEGIN: load jqplot -->
		<link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />
		<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
		<script language="javascript" type="text/javascript" src="js/jqPlot/jquery.jqplot.min.js"></script>
		<script type="text/javascript" src="js/jqPlot/plugins/jqplot.canvasTextRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqPlot/plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
		<script type="text/javascript" src="js/jqPlot/plugins/jqplot.donutRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqPlot/plugins/jqplot.bubbleRenderer.min.js"></script>
		<!-- END: load jqplot -->
		<script src="js/setup.js" type="text/javascript"></script>
		<script type="text/javascript">$(document).ready(function(){
			setupLeftMenu();
			setSidebarHeight();
			});
		</script>
</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding"><!--banner -->
                <div class="floatleft">
                    <img src="img/logo.png" alt="Logo" width="43px" height="28px"/></div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello Admin</li>
                            <li>
                            	<!--<?php  
                            	echo '
									<a href="message.php"  rel="nofollow" location>' . @$_SESSION[admin_name] . '
									</a>'; 
								?> 主要是用于后面显示-->                     	
                            	<?php
									if (@$_SESSION[admin_name]) {
									echo '
										<a href="message.php"  rel="nofollow" location>' . @$_SESSION[admin_name] . '
										</a>';
									} else {
									echo '
										<a href="login.php"  rel="nofollow" location>
											登出
										</a>';
									}
								?>
                            </li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                        <br />
                        <span class="small grey"><?php
						//登录时间显示
                        	?></span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="index.php"><span>主页</span></a> </li>
                <li class="ic-form-style"><a href="book.php"><span>图书</span></a>
                    <!--<ul>
                        <li><a href="form-controls.php">Forms</a> </li>
                        <li><a href="buttons.php">Buttons</a> </li>
                        <li><a href="form-controls.php">Full Page Example</a> </li>
                        <li><a href="table.php">Page with Sidebar Example</a> </li>
                    </ul>--下拉菜单-->
                </li>
				<li class="ic-typography"><a href="music.php"><span>音乐</span></a></li>
                <li class="ic-charts"><a href="movie.php"><span>电影</span></a></li>
                <li class="ic-grid-tables"><a href="administer.php"><span>管理员</span></a></li>
                <li class="ic-gallery dd"><a href="vip.php"><span>会员</span></a>
               		 <!--<ul>
                        <li><a href="image-gallery.php">Pretty Photo</a> </li>
                        <li><a href="gallery-with-filter.php">Gallery with Filter</a> </li>
                   </ul>--下拉菜单-->
                </li>

            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem">Menu 1</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a class="active">Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Menu 2</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Menu 3</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Menu 4</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid_10">
            <!--每个的内容-->
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
            Copyright <a href="#">BlueWhale Admin</a>. All Rights Reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
        </p>
    </div>
    
</body>
</html>
