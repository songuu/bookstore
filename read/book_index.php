<?php
	session_start();
?>
<!DOCTYPE html >
<html>
	<head>
		<meta  charset="utf-8" />
		<meta name="viewport" content=
			"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.5, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
		<link href="css/book_index.css" rel="stylesheet" />
		<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"  />
		<title>悦阅读书</title>
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	</head>
<body>
	<div id="header">
		<div class="logo-nav">
			<a href ="index.php">
				<img src="img/logo.png" width="150" height="40" alt = "悦阅"/>
			</a>
		</div>
		
		<!--start search-form-->
		<form name="search-form" action="search_books.php" method="post">
			<div class="search">
				<input type="text" class="search-input" id="search-text"
					name="search-text"
					maxlength="40" onblur="this.placeholder='Search Here...'"
					onfocus="this.placeholder=''" placeholder="Search Here..."/>
				<button type="submit" id="search-btn" name="search-btn"
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
						<h2 class="hd-title">新书速递</h2>
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
						<h2 class="hd-title">最受关注图书榜</h2>
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
						<h2 class="hd-title">最受欢迎书评</h2>
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
					
					<!--
						<div class="pager-bar4">
									
						</div>
					-->
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
										<span>文学</span>
									</h3>
								</div>
								<div class="tags">
									<div>
										<a href="javascript:void(0);">小说</a>
									</div>
									<div>
										<a href="javascript:void(0);">儿童文学</a>
									</div>
									<div>
										<a href="javascript:void(0);">散文</a>
									</div>
									<div>
										<a href="javascript:void(0);">诗歌</a>
									</div>
									<div>
										<a href="javascript:void(0);">名著</a>
									</div>
									<div>
										<a href="javascript:void(0);">童话</a>
									</div>
									<div>
										<a href="javascript:void(0);">当代文学</a>
									</div>
									<div>
										<a href="javascript:void(0);">随笔</a>
									</div>
								</div>	
							</div>	
							
							<!--tag 2-->
							<div class="tag2">
								<div class="tag-title">
									<h3>
										<span>生活</span>
									</h3>
								</div>
								<div class="tags">
									<div>
										<a href="javascript:void(0);">旅行</a>
									</div>
									<div>
										<a href="javascript:void(0);">励志</a>
									</div>
									<div>
										<a href="javascript:void(0);">散文</a>
									</div>
									<div>
										<a href="javascript:void(0);">教育</a>
									</div>
									<div>
										<a href="javascript:void(0);">美食</a>
									</div>
									<div>
										<a href="javascript:void(0);">家居</a>
									</div>
									<div>
										<a href="javascript:void(0);">职场</a>
									</div>
									<div>
										<a href="javascript:void(0);">爱情</a>
									</div>
								</div>	
							</div>
							
							<!--tag 3-->
							<div class="tag3">
								<div class="tag-title">
									<h3>
										<span>文化</span>
									</h3>
								</div>
								<div class="tags">
									<div>
										<a href="javascript:void(0);">历史</a>
									</div>
									<div>
										<a href="javascript:void(0);">哲学</a>
									</div>
									<div>
										<a href="javascript:void(0);">传记</a>
									</div>
									<div>
										<a href="javascript:void(0);">艺术</a>
									</div>
									<div>
										<a href="javascript:void(0);">中国历史</a>
									</div>
									<div>
										<a href="javascript:void(0);">军事</a>
									</div>
									<div>
										<a href="javascript:void(0);">人文</a>
									</div>
									<div>
										<a href="javascript:void(0);">心理学</a>
									</div>
								</div>	
							</div>
							
							
							<!--tag 4-->
							<div class="tag4">
								<div class="tag-title">
									<h3>
										<span>科技</span>
									</h3>
								</div>
								<div class="tags">
									<div>
										<a href="javascript:void(0);">科普</a>
									</div>
									<div>
										<a href="javascript:void(0);">互联网</a>
									</div>
									<div>
										<a href="javascript:void(0);">科学</a>
									</div>
									<div>
										<a href="javascript:void(0);">编程</a>
									</div>
									<div>
										<a href="javascript:void(0);">算法</a>
									</div>
									<div>
										<a href="javascript:void(0);">交互设计</a>
									</div>
								</div>
							</div>	
							
							<!--tag 5-->
							<div class="tag5">
								<div class="tag-title">
									<h3>
										<span>经济</span>
									</h3>
								</div>
								<div class="tags">
									<div>
										<a href="javascript:void(0);">管理</a>
									</div>
									<div>
										<a href="javascript:void(0);">经济学</a>
									</div>
									<div>
										<a href="javascript:void(0);">商业</a>
									</div>
									<div>
										<a href="javascript:void(0);">创业</a>
									</div>
									<div>
										<a href="javascript:void(0);">理财</a>
									</div>
									<div>
										<a href="javascript:void(0);">股票</a>
									</div>
									<div>
										<a href="javascript:void(0);">策划</a>
									</div>
									<div>
										<a href="javascript:void(0);">金融</a>
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
	<script type="text/javascript" src="js/book_index.js"></script>
</body>

</html>