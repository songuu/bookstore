<!DOCTYPE html >
<html>
	<head>
		<meta  charset="utf-8" />
		<meta name="viewport" content=
			"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
		<link href="css/user_information.css" rel="stylesheet" />
		<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"  />
		<title>悦阅</title>
	</head>
<body>
	<div id="header">
		<div class="logo-nav">
			<a href ="index.php">
				<img src="img/logo.png" width="140" height="38" alt = "悦阅"/>
			</a>
		</div>
		
		<!--start search-form-->
		<form name="search-form" action="#" method="post">
			<div class="search">
				<input type="text" class="search-input" name="search-text"
					maxlength="40" required="required" onblur="this.placeholder='Search Here...'"
					onfocus="this.placeholder=''" placeholder="Search Here..."/>
					<button type="submit" class="search-btn">Search</button>
				</div>
		</form>
		<!--end search-form-->
		
		<div class="login-nav">
			<div class="login-nav-info">
				<a href="login.php" class="login-nav-link"
								rel="nofollow">登录</a>
				<a href="register.php" class="login-nav-link"
								rel="nofollow">注册</a>
			</div>
		</div>	
	</div>
	<!--end header-->
	<div id="content">
		<!--user info  left-->
		<div class="user-info-items">
			<h2 class="user-info-title">个人信息</h2>
			<p class="user-info-item">
				<span class="item-name">账户昵称：</span>
				<sapn class="item-val">随心</sapn>
			</p>
			<p class="user-info-item">
				<span class="item-name">登录账户：</span>
				<sapn class="item-val">17748133657</sapn>
			</p>
			<p class="user-info-item">
				<span class="item-name">邮&emsp;&emsp;箱：</span>
				<sapn class="item-val">1938448696@qq.com</sapn>
			</p>
			<p class="user-info-item">
				<span class="item-name">用户类型：</span>
				<sapn class="item-val">普通会员</sapn>
			</p>
			<p class="user-info-item">
				<span class="item-name">注册时间：</span>
				<sapn class="item-val">2017-10-31 19:19:19</sapn>
			</p>
			<p class="user-info-item">
				<span class="item-name">上次登录：</span>
				<sapn class="item-val">2017-10-31 19:19:19</sapn>
			</p>
			
		</div>
		<!--end user info-->
		<!--up load  right-->
		<div class="up-load">
			<h2>上传分享</h2>
			<!-- onload form-->
			
			<form id="uploadForm" action="#" method="post" enctype="multipart/form-data">
				<select id="load-choose"name="load-type"style="width: 289px;">
					<option value="none">请选择上传类型</option>
					<option value="book">书籍</option>
					<option value="music">音乐</option>
					<option value="movie">电影</option>
				</select>
		    	<p>
		    		<input type="text" name="book_name" class="basic_input" placeholder="名称"/>
		    	</p>
		    	<p>
		    		<input type="text" name="writer"class="basic_input" placeholder="作者/歌手/演员"/>
		    	</p>
		    	<p>
		    		<input type="text" name="publisher"class="basic_input"placeholder="出版社"/>
		    	</p>
		    	<p>
		    		<input type="text" name="pub_time"class="basic_input"placeholder="出版时间"/>
		    	</p>
		    	<p>
		    		<input type="text" name="book_type"class="basic_input"placeholder="类型"/>
		    	</p>
		    	<p>
		    		<label class="pick-file" for="piker">选择文件</label>
		    		<input type="file"id="piker" name="piker"
		    			class="btn"multiple="multiple"
		    			style="position:absolute;clip:rect(0 0 0 0);"/>
		    		<p id="file-name" >
		    			未选择文件
		    		</p>
		    	</p>
		    	<p>
		    		<input type="submit" value="上传" class="sub_btn"/>
		    	</p>
        	
			</form>
			<!-- end onload form-->
		</div>
		<!--end up load-->
	</div>
	
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
	
	<!--<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>-->
	<script type="text/javascript">
		var pike = document.getElementById('piker');
			pike.addEventListener('change', function() {
			    var t_files = this.files;
			    var str = '';
			    for (var i = 0, len = t_files.length; i < len; i++) {
			        console.log(t_files[i]);
			        str += t_files[i].name + '<br/>';
			    };
			    document.getElementById('file-name').innerHTML = str;
			}, false);
	</script>
</body>
</html>