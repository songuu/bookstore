var curPage = 1; //当前页面
var total, pageSize, totalPage; //总记录数，每页显示数，总页数

//获取数据
function getData(page, ele, eleBar) {

	$.ajax({
		type: "post",
		url: "book_pages.php",
		async: true,
		data: {
			'pageNum': page - 1
		},
		dataType: 'json',
		beforeSend: function() {
			$(ele).append("<div class='load'>loading...</div>"); //加载
		},
		success: function(json) {
			$(".dis-hd").css("display", "block");
			$(".dis-bd").css("display", "block");
			$(ele).empty(); //清空内容
			total = json.total; //总记录数
			pageSize = json.pagesize; //每页显示条数
			curPage = page; //当前页
			totalPage = json.totalpage; //总页数
			var str = "";
			var list = json.list;
			$.each(list, function(index, array) { //遍历json
				str += "<div class='book-item'>" +
					"<a href='javascript:void(0);' class='book-imglink' id='" + array['id'] + "'>" +
					"<img src='img/book_picture/a" + array['id'] + ".jpg'width='90' height='120' alt='书籍图片'>" +
					"</a>" +
					"<h3 class='book-name' id='" + array['id'] + "'>" +
					"<a href='javascript:void(0);'>" + array['name'] + "</a>" +
					"</h3>" +
					"<span class='book-writer'>" + array['writer'] + "</span>" +
					"</div>";
			});
			$(ele).append(str);
			getPageBar(eleBar);
		},
		complete: function() { //分页
			//alert('complete');
		},
		error: function() {
			$(ele).html("<div class='load'>数据加载失败！</div>");
		}
	});
}
//评论内容
function getComment(page, ele, eleBar) {

	$.ajax({
		type: "post",
		url: "comment.php",
		async: true,
		data: {
			'pageNum': page - 1
		},
		dataType: 'json',
		beforeSend: function() {
			$(ele).append("<div class='load'>loading...</div>"); //加载
		},
		success: function(json) {
			$(".dis-hd").css("display", "block");
			$(ele).empty(); //清空内容
			total = json.total; //总记录数
			pageSize = json.pagesize; //每页显示条数
			curPage = page; //当前页
			totalPage = json.totalpage; //总页数
			var str = "";
			var list = json.list;
			$.each(list, function(index, array) { //遍历json
				str += "<div class='comment-item'>" +
					"<div class='book-con'>" +
					"<a href='javascript:void(0);'; class='book-imglink' id='" + array['id'] + "'>" +
					"<img src='img/book_picture/a" + array['id'] + ".jpg' width='90' height='120' alt='书籍图片'>" +
					"</a>" +
					"</div>+"
				"<div class='comment-con'>" +
				"<h3 class='book-name' id='" + array['id'] + "'>" +
					"<a href='javascript:void(0);'>" + array['name'] + "</a>" +
					"</h3>" +
					"<span class='comment-user'>" + array['username'] + "</span><br/>" +
					"<span class='book-comment'>" + array['comment'] + "</span>" +
					"</div>" +
					"</div>";
			});
			$(ele).append(str);
			getPageBar(eleBar);

		},
		complete: function() { //分页

			//alert('complete');
		},
		error: function() {
			$(ele).html("<div class='load'>数据加载失败！</div>");
		}
	});
}

function getInfo(id, ele) {

	$.ajax({
		type: "post",
		url: "info.php",
		async: true,
		data: {
			'pageID': id
		},
		dataType: 'json',
		beforeSend: function() {
			$(ele).append("<div class='load'>loading...</div>"); //加载
		},
		success: function(json) {
			$(".dis-hd").css("display", "block");
			$(ele).empty(); //清空内容
			//total = json.total;//总记录数
			//pageSize = json.pagesize;//每页显示条数
			//curPage = page;//当前页
			//totalPage = json.totalPage;//总页数
			var str = "";
			var list = json.list;
			$.each(list, function(index, array) { //遍历json
				str += "<div class='hd'>" +
					"<h2 class='hd-title'>" + array['name'] + "</h2>" +
					"</div>" +
					"<div class='info-items'>" +
					"<div class='pic-con'>" +
					"<a href='javascript:void(0);' class='book-imglink'id='" + array['id'] + "'>" +
					"<img src='img/book_picture/a'" + array['id'] + ".jpg' width='90' height='120' alt='书籍图片'>" +
					"</a>" +
					"</div>" +
					"<div class='top-con'>" +
					"<span class='publisher'>" + array['publiser'] + "</span>" +
					"<span class='publish-time'>" + array['publish_time'] + "</span>" +
					"<span class='writer'>" + array['writer'] + "</span>" +
					"</div>" +
					"<div class='bottom-con>" +
					"<div class='book-intro'>" +
					"<h2>内容简介</h2>" +
					"<span>" + array['introduce'] + "<span>" +
					"</div>" +
					"<div class='book-comm'>" +
					"<h2>书籍评论</h2>" +
					"<span>" + array['comment'] + "<span>" +
					"</div>" +
					"</div>" +
					"</div>";
			});
			$(ele).append(str);
			//getPageBar(eleBar);

		},
		complete: function() { //分页

			//alert('complete');
		},
		error: function() {
			$(ele).html("<div class='load'>数据加载失败！</div>");

		}
	});
}

//获取分页条 
function getPageBar(eleBar){ 
    //页码大于最大页数 
    if(curPage>totalPage) curPage=totalPage; 
    //页码小于1 
     if(curPage<1) curPage=1; 
     pageStr = "";
    //如果是第一页 
    if(curPage==1){ 
        pageStr += "<span>首页</span>&ensp;<span>上一页</span>"; 
    }else{ 
        pageStr += "&ensp;<span><a href='javascript:void(0);' id='1'>首页</a></span>"+
        "&ensp;<span><a href='javascript:void(0);' id='"+(curPage-1)+"'>上一页</a></span>";
    } 
     
    //如果是最后页 
    if(curPage>=totalPage){ 
        pageStr += "&ensp;<span>下一页</span>&ensp;<span>尾页</span>"; 
    }else{ 
        pageStr += "&ensp;<span><a href='javascript:void(0);' id='"+(parseInt(curPage)+1)+"' >下一页</a></span>"+
        "&ensp;<span><a href='javascript:void(0);' id='"+totalPage+"'>尾页</a></span>";
    }     
   
    pageStr += "&ensp;<span>"+curPage  +"/"+totalPage+"</span>"+"&ensp;<span>共"+total+"条</span>"; 
    $(eleBar).html(pageStr); 
} 

$(function(){
	//第一次加载
	//console.log(1);
	getData(1,".book-items",".pager-bar1");
	getData(1,".hot-book-items",".pager-bar2");
	getComment(1,".comment-items",".pager-bar3");
	//点击触发局部刷新
	$(".pager-bar1").on("click","span a",function(){
		//alert(1);
		$(".pager-bar4").css("display","none");
		$(".book-info").css("display","none");
		$(".dis-bd").css("display","block");
		$(".dis-hd").css("display","block");
		var id = $(this).attr('id');
		//alert(id);
		if(id){
			getData(id,".book-items",".pager-bar1");
			
		}
	});
	$(".pager-bar2").on("click","span a",function(){
		$(".pager-bar4").css("display","none");
		$(".book-info").css("display","none");
		$(".dis-bd").css("display","block");
		$(".dis-hd").css("display","block");
		var id = $(this).attr('id');
		//console.log(id);
		if(id){
			getData(id,".hot-book-items",".pager-bar2");
			
		}
	});
	$(".pager-bar3").on("click","span a",function(){
		$(".pager-bar4").css("display","none");
		$(".book-info").css("display","none");
		$(".dis-bd").css("display","block");
		$(".dis-hd").css("display","block");
		var id = $(this).attr('id');
		//console.log(id);
		if(id){
			getComment(id,".comment-items",".pager-bar3");
			
		}
	});
	/*$(".pager-bar4 span a").on("click",function(){
		$(".pager-bar4").css("display","block");
		$(".book-info").css("display","block");
		$(".dis-bd").css("display","none");
		$(".dis-hd").css("display","none");
		var id = $(this).attr('id');
		//console.log(id);
		if(id){
			getInfo(id,".book-info");
			
		}
	});*/
	$(".dis-bd").on("click",".book-name",function(){
		$(".pager-bar4").css("display","block");
		$(".book-info").css("display","block");
		$(".dis-bd").css("display","none");
		$(".dis-hd").css("display","none");
		var id = $(this).attr('id');
		//console.log(id);
		if(id){
			getInfo(id,".book-info");	
		}
	});
	$(".dis-bd").on("click",".book-imglink",function(){
		$(".pager-bar4").css("display","block");
		$(".book-info").css("display","block");
		$(".dis-bd").css("display","none");
		$(".dis-hd").css("display","none");
		var id = $(this).attr('id');
		//console.log(id);
		if(id){
			getInfo(id,".book-info");	
		}
	});
});
	