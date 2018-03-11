<!DOCTYPE html >
<html>
	<head>
		<meta  charset="utf-8" />
		<meta name="viewport" content=
			"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.5, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
		<link href="css/music_index.css" rel="stylesheet" />
		<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"  />
		<title>悦阅读书</title>
		<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="js/music_index.js"></script>
	</head>
<body>
	<div id="header">
		<div class="logo-nav">
			<a href ="index.php">
				<img src="img/logo.png" width="150" height="40" alt = "悦阅"/>
			</a>
		</div>
		
		<!--start search-form-->
		<form name="search-form" action="search_music.php" method="post">
			<div class="search">
				<input type="text" class="search-input" id="search-text"
					name="search-text"
					maxlength="40" onblur="this.placeholder='Search Here...'"
					onfocus="this.placeholder=''" placeholder="Search Here..."/>
				<button type="submit" id="search-btn"name="search-btn"
					style="display: none;">
					搜索
				</button>
				<label class="search-btn" for="search-btn">
					<i class="search-icon" aria-hidden="true"></i>
				</label>
			</div>
		</form>
		<!--end search-form-->
		
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
							<span>|</span>
							<a href="register.php" class="login-nav-link"rel="nofollow" location>
							注册
							</a>'; 
						}
					?>
			</div>
		</div>	
	</div>
	<!--end header-->
	
	<!--start content-->
	<div id="content">
		<div id="center-con">
			<!--start left-->
			<div id="left-con">
				<!--book-display-->
				<div class="books-display">
					<!--nav-one-->
					<div class="dis-hd">
						<h2 class="hd-title">新音乐速递</h2>
					</div>
					<div class="dis-bd">
						<div class="book-items">
							<!--boook item-->
							
						
							<!--end boook item-->
							
							
						</div>
						<!--end boook items-->
						<div class="pager-bar1">
							
			            </div>
					</div>
					
					<!--nav-two-->
					<div class="dis-hd">
						<h2 class="hd-title">最受关注音乐榜</h2>
					</div>
					<div class="dis-bd">
						<div class="hot-book-items">
							
							<!--end boook item-->
							
							
						</div>
						<!--end boook items-->
						<div class="pager-bar2">
								
				        </div>
					</div>
					<!--end nav-two-->
					
					<!--nav-three-->
					<div class="dis-hd">
						<h2 class="hd-title">最受欢迎乐评</h2>
					</div>
					<div class="dis-bd">
						<div class="comment-items">
							<!--boook item-->
							
							
							<!--end boook item-->
	
						</div>
						<!--end boook items-->
						<div class="pager-bar3">
								
				           	</div>
					</div>
					<!--end nav-three-->
					
					<!--nav-four-->
					<div class="book-info">
						
								
					
					</div>
					
					<div class="pager-bar4">
									
					</div>
				    <!--end nav-four-->   
				
					
					
				</div>
				<!--book-display-->
				
				
			</div>
			<!--end left-->
			
			
			<!--start right-->
			<div id="right-con">
				<!--tag-->
				<div class="book-tag">
					<!--tag head-->
					<div class="tag-hd">
						<h2>
							<span>热门标签</span>
						</h2>
					</div>
					<!--tag body-->
					<div class="tag-bd">
						<!--tag items-->
						<div class="tag-items">
							
							<!--tag 1-->
							<div class="tag1">
								<div class="tag-title">
									<h3>
										<span>形式</span>
									</h3>
								</div>
								<div class="tags">
									<div>
										<a href="javascript:void(0);">流行</a>
									</div>
									<div>
										<a href="javascript:void(0);">轻音乐</a>
									</div>
									<div>
										<a href="javascript:void(0);">摇滚</a>
									</div>
									<div>
										<a href="javascript:void(0);">古典</a>
									</div>
									<div>
										<a href="javascript:void(0);">电子</a>
									</div>
									<div>
										<a href="javascript:void(0);">民谣</a>
									</div>
									<div>
										<a href="javascript:void(0);">说唱</a>
									</div>
									<div>
										<a href="javascript:void(0);">爵士</a>
									</div>
								</div>	
							</div>	
							
							<!--tag 2-->
							<div class="tag2">
								<div class="tag-title">
									<h3>
										<span>地区</span>
									</h3>
								</div>
								<div class="tags">
									<div>
										<a href="javascript:void(0);">大陆</a>
									</div>
									<div>
										<a href="javascript:void(0);">港台</a>
									</div>
									<div>
										<a href="javascript:void(0);">日本</a>
									</div>
									<div>
										<a href="javascript:void(0);">韩国</a>
									</div>
									<div>
										<a href="javascript:void(0);">美国</a>
									</div>
									<div>
										<a href="javascript:void(0);">英国</a>
									</div>
									<div>
										<a href="javascript:void(0);">意大利</a>
									</div>
									<div>
										<a href="javascript:void(0);">其他</a>
									</div>
								</div>	
							</div>
							
							<!--tag 3-->
							<div class="tag3">
								<div class="tag-title">
									<h3>
										<span>音乐人</span>
									</h3>
								</div>
								<div class="tags">
									<div>
										<a href="javascript:void(0);">热门</a>
									</div>
									<div>
										<a href="javascript:void(0);">冷门</a>
									</div>
									<div>
										<a href="javascript:void(0);">乐队</a>
									</div>
									<div>
										<a href="javascript:void(0);">solo</a>
									</div>
									<div>
										<a href="javascript:void(0);">翻唱</a>
									</div>
								</div>	
							</div>
							
							
							<!--tag 4-->
							<div class="tag4">
								<div class="tag-title">
									<h3>
										<span>专题</span>
									</h3>
								</div>
								<div class="tags">
									<div>
										<a href="javascript:void(0);">怀旧</a>
									</div>
									<div>
										<a href="javascript:void(0);">新音乐</a>
									</div>
									<div>
										<a href="javascript:void(0);">90后</a>
									</div>
									<div>
										<a href="javascript:void(0);">80后</a>
									</div>
									<div>
										<a href="javascript:void(0);">开心</a>
									</div>
									<div>
										<a href="javascript:void(0);">奋斗</a>
									</div>
								</div>
							</div>	
							
							
							
							
							<!--end tag-->
						</div>
						<!--end tag items-->
					</div>
					<!--end tag body-->
				</div>
				<!--end tag-->
			</div>
			<!--end right-con-->
		</div>	
	</div>
	<!--end content-->
	
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
	
</body>

</html>