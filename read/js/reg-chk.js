

$(function(){
	$("#reg-box").scrollable({
			onSeek: function(event, i) {
				$("#progressbar li").removeClass("active").eq(i).addClass("active");
			},
			onBeforeSeek:function(event,i){
				var err_str = "";
				if(i==1){
					var err_show1 = $(".prompt-msg #err-msg1");
					
					var user = $("#userId").val();
					if(user==""){
						err_str = "请输入电话号码！";
						err_show1.html(err_str);
						return false;
					}
					
      				var ret = /^1[34578]\d{9}$/;
      				if(!ret.test(user)){
       				 	err_str = "电话号码错误！";
						err_show1.html(err_str);
						return false;
       				 
     				}
      								
					var pass = $("#pass").val();
					var cpass = $("#cpass").val();
					if(pass==""){
						err_str = "请输入密码！";
						err_show1.html(err_str);
						return false;
					}
					
					if(pass.length <6){
						err_str = "密码长度不低于6位！";
						err_show1.html(err_str);
						return false;
					}
					
					if(cpass == ""){
						err_str = "请确认密码！";
						err_show1.html(err_str);
						return false;
					}
					
					if(pass != cpass){
						err_str = "两次密码不一致！";
						err_show1.html(err_str);
						return false;
					}
				}
				if(i == 2){
					var err_show2 = $(".prompt-msg #err-msg2");
					var email = $("#email").val();
				    var ret = /^\d{5,12}@[qQ][qQ]\.(com|cn)$/;
				    if(!ret.test(email)){
				        err_str = "QQ邮箱的格式错误！";
						err_show2.html(err_str);
						return false;
				    }
				    if(email ==""){
				    	err_str = "请输入你的QQ邮箱！";
						err_show2.html(err_str);
						return false;
				    }
				}
				if(i == 3){
					var err_show3 = $(".prompt-msg #err-msg3");
					var nickName = $("nickName").val();
					if(nickName == ""){
						err_str = "请输入昵称！";
						err_show3.html(err_str);
						return false;
					}
				}
			}
	});
});