<?php
	session_start();
?>
<!DOCTYPE html >
<html>
	<head>
		<meta  charset="utf-8" />
		<meta name="viewport" content=
			"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
		<link href="css/index.css" rel="stylesheet" />
		<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"  />
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="js/jquery.plugin.min.js" type="text/javascript"></script>
		<title>悦阅</title>
	</head>
<body>
	<div id="header">
		<div class="logo-nav">
			<a href ="index.php">
				<img src="img/logo.png" width="180" height="40" alt = "悦阅"/>
			</a>
		</div>
		
		
		<div class="login-nav">
			<div class="login-nav-info">
				<?php
						if(@$_SESSION[name]) {
							echo '
							<a href="message.php" class="login-nav-link" rel="nofollow" location>' . @$_SESSION[name] . '
							</a>
							<a href="logout.php" class="login-nav-link" rel="nofollow" location>
							登出
							</a>';} 
						else {
							echo '
							<a href="login.php" class="login-nav-link" rel="nofollow" location>
							登录
							</a>
							<a href="register.php" class="login-nav-link"rel="nofollow" location>
							注册
							</a>'; 
						}
					?>
			</div>
		</div>
		
	</div>
	<!--end header-->
	<!--start banner-->
	<div id="banner">
		<!--start banner_img-->
		<ul id="banner_img">
			<!--start item1-->
			<li class="item1">
				<div class="wrapper">
					<div class="ad_txt">
						<h2>书籍</h2>
							<p>当你困惑时，书给你启迪当你迷惘时，书给你指路。
								<br/>当你落寞时，书给你勇气。当你悲伤时，书给你欢愉。
								<br/>当你狂躁时，书给你冷静。当你成功时，书给你导航。</p>
								<a href="book_index.php" >进入书的海洋&gt;</a>
					</div>
					<div class="ad_img">
						<img src="img/book.png"
							 width="506" height="404" alt="书籍" />	
					</div>
				</div>
			</li>
			<!--end item1-->
			
			<!--start item2-->
			<li class="item2">
				<div class="wrapper">
					<div class="ad_txt">
						<h2>音乐</h2>
						<p>音乐是一位好老师。
							<br/>它会将你的心灵从喧嚣和冗杂之中带出，
							<br/>带到一片静土，使你那烦躁的心平静下来。
							<br/>音乐是你开心时的朋友，音乐也是你失意时的伙伴。</p>
						<a href="music_index.php" >进入音乐净土&gt;</a>
					</div>
					<div class="ad_img">
						<img src="img/music.png" 
							width="506" height="404" alt="音乐" />
					</div>
				</div>
			</li>
			<!--end item2-->
			
			<!--start item3-->
			<li class="item3">
				<div class="wrapper">
					<div class="ad_txt">
						<h2>电影</h2>
						<p>一部伟大的影片是一部含义如此
							<br/>清新、富于想象、引人入胜或令人激奋的影片，
							<br/>它使我们对人生有新的看法。</p>
						<a href="movie_index.php" >了解更多&gt;</a>
					</div>
					<div class="ad_img">
						<img src="img/movie.png" 
						width="506" height="404" alt="电影" />
					</div>
				</div>
			</li>
			<!--end item3-->
		</ul>
		<!--end banner_img-->
		
		<!--start banner_ctr-->
		<div id="banner_ctr">
			<!--start drag_ctr-->
			<div id="drag_ctr">
				
			</div>
			<!--end drag_ctr-->
			<ul>
				<li class="first-item"></li>
				<li>书籍</li>
				<li>音乐</li>
				<li>电影</li>
				<li class="last-item"></li>
			</ul>
			<!--start drag_arrow-->
			<div id="drag_arrow">
				
			</div>
			<!--end drag_arrow-->
		</div>
		<!--end banner_ctr-->
	
	</div>
	<!--end banner-->
	
	<!--start footer-->
		<div id="footer">
		<div class="copyright-con">
			<span class="copyright">
   				 © 2017 yueyue.com, all rights reserved
			</span>
			<span class="other-link">
				<a href="###">关于悦阅 </a> -
				<a href="###">免费声明 </a> -
				<a href="###">联系我们</a>  -
				<a href="###">帮助中心</a>
			</span>
		</div>	
	</div>
	<!--end footer-->
	
	<script type="text/javascript" src="js/fashionfoucs.js"></script>
	
</body>
</html>
