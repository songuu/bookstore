 
 function change() {
 	code = $(".getCode");
 	var arrays = new Array(
 		'1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
 		'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
 		'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't',
 		'u', 'v', 'w', 'x', 'y', 'z',
 		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
 		'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
 		'U', 'V', 'W', 'X', 'Y', 'Z'
 	);
 	codes = ''; 
 	for(var i = 0; i < 4; i++) {
 		var r = parseInt(Math.random() * arrays.length);
 		codes += arrays[r];
 	}
 	console.log(codes);
 	code.html(codes);
 }
 change();
 code.click(change);
 $("#sub-btn").click(function() {
 	var err_mes = $(".err-mes");
 	err_mes.html("");
 	var username = $("#userName").val();
 	var pwd = $("password").val();
 	var inputCode = $("#checkedCode").val().toUpperCase(); 
 	if(username == ""){
 		err_mes.html("请输入账号！"); 
 		return false;
 	}
 	if(pwd == ""){
 		err_mes.html("请输入密码！"); 
 		return false;
 	}
 	if(inputCode.length == 0) { 
 		err_mes.html("请输入验证码！"); 
 		return false;
 	} 
 	if(inputCode != codes.toUpperCase()) {
 		err_mes.html("验证码输入错误!请重新输入"); 
 		change(); //刷新验证码
 		$("#checkedCode").val("");
 		return false;
 	}
 	return true;
 });
 $(".get-pwd-link").click(function(){
 		$(".login-con-box").fadeOut(1500,"linear");
 		$(".get-pwd-outerbox").fadeIn(1500,"linear");
 });
 $(".to-login").click(function(){
 		$(".login-con-box").fadeIn(1500,"linear");
 		$(".get-pwd-outerbox").fadeOut(1500,"linear");
 });
 $(".get-pwd-btn").click(function(){
 		var mail = $(".get-pwd-text").val();
 		if(mail == ""){
 			alert("请输入指定信息！");
 			return false;
 		}
 		return true;
 });
