//登陆验证
function chk_log(){
	if(this.login.name.value == ""){
		alert("请输入用户名!");
		this.login.name.focus();
		return false;
	}
	if(this.login.password.value == ""){
		alert("请输入密码!");
		this.login.password.focus();
		return false;
	}
}
//注册验证
function reg_chk(){
	var a=1;
	if(this.reg_form.userId.value == ""){
		alert("请输入注册帐号!");
		this.reg_form.userId.focus();
		a=a+1;
	}
	if(this.reg_form.password.value == ""){
		alert("请输入密码!");
		this.reg_form.password.focus();
		a=a+1;
	}
	if(this.reg_form.password.value.length < 3){
		alert("密码长度最少为3位");
		this.reg_form.password.focus();
		a=a+1;
	}
	if(this.reg_form.password.value != this.reg_form.cpassword.value){
		alert("两次密码输入不一致");
		this.reg_form.password.focus();
		a=a+1;
	}
	if(a!=1){
		return true;
	}else{
		return false;
	}
}
function a(){
	b=reg_chk();
	if(b==false){
		new_element=document.createElement("script");
 		new_element.setAttribute("type","text/javascript");
		new_element.setAttribute("src","js/pre-next.js");
 		document.body.appendChild(new_element);
	}
	else{
		alert('aa');
	}
}
//邮箱验证
function reg_email(){
	if(this.reg.email.value != ""){
		var mailObj = this.reg.email;
		var email_ch= /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if(!email_ch.test(mailObj.value)){
			alert("请输入正确的邮箱地址！");
			mailObj.focus();
			return false;	
		}
	}
}

//退出登录
function logout_chk(){
	if(confirm("确定要退出登录吗？")){
		window.location="logout.php";
	} 
	else
     return false; 
}
function chk_search(){
	if(this.search.name.value==''){
		alert ("请输入书名");
	}
	if(this.search.writer.value==''){
		alert ("请输入作者");
	}
}








