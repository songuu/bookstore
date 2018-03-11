var curPage = 1;//当前页面
var total,pageSize,totalPage;//总记录数，每页显示数，总页数

//获取数据
function getData(page,ele,eleBar){
	$.ajax({
		type:"post",
		url:"books.php",
		async:true,
		data:{'pageNum':page - 1},
		datatype:'json',
		beforeSend:function(){
			$(ele).append("<div>loading...</div>");//加载
		},
		success:function(json)(){
			$(ele).empty();//清空内容
			total = json.total;//总记录数
			pageSize = json.pageSize;//每页显示条数
			curPage = page;//当前页
			totalPage = json.totalPage;//总页数
			var str = "";
			var list = json.list;
			$.each(list,function(index,array){//遍历json
				str += "<div class='book-item'>" +
							"<a href='javascript:void(0);' class='book-imglink'>"+
								"<img src='"+ array['id']+".jpg'width='90' height='120' alt='书籍图片'>"+
							"</a>"+
							"<h3 class='book-name'>"+
								"<a href='javascript:void(0);'>"+array['name']+"</a>"+
							"</h3>"+
							"<span class='book-writer'>"+array['writer']+"</span>"+
						"</div>";
			});
			$(ele).append(str);
		},
		complete:function(){//分页
			getPageBar(eleBar);
		},
		error:function(){
			alert("数据加载失败！");
		}
	});
}
//评论内容
function getComment(page,ele,eleBar){
	$.ajax({
		type:"post",
		url:"comment.php",
		async:true,
		data:{'pageNum':page - 1},
		datatype:'json',
		beforeSend:function(){
			$(ele).append("<div>loading...</div>");//加载
		},
		success:function(json)(){
			$(ele).empty();//清空内容
			total = json.total;//总记录数
			pageSize = json.pageSize;//每页显示条数
			curPage = page;//当前页
			totalPage = json.totalPage;//总页数
			var str = "";
			var list = json.list;
			$.each(list,function(index,array){//遍历json
				str += "<div class='comment-item'>"+
							"<div class='book-con'>"+
								"<a href='javascript:void(0);' class='book-imglink'>"+
									"<img src='"+ array['id']+".jpg' width='90' height='120' alt='书籍图片'>"+
								"</a>"+
							"</div>+"
							"<div class='comment-con'>"+
								"<h3 class='book-name'>"+
									"<a href='javascript:void(0);'>"+array['name']+"</a>"+
								"</h3>"+
								"<span class='comment-user'>"+ array['username'] +"</span><br/>"+
								"<span class='book-comment'>"+ array['comment'] +"</span>"+
							"</div>"+
						"</div>";
			});
			$(ele).append(str);
		},
		complete:function(){//分页
			getPageBar(eleBar);
		},
		error:function(){
			alert("数据加载失败！");
		}
	});	
}

function getPageBar(pageBar){
	//$((pageBar+' .pager a')).removeClass('now_page');
	//页码大于最大页数
	if(curPage > totalPage) curPage = totalPage;
	//页码小于1
	if(curPage < 1) curPage = 1;
	//如果第一页
	

	if(curPage == 1){
		pageStr = "<div class='pager'>"+
					"<a href='javascript:void(0);'class='now_page' rel='1'>1</a>"+
					"<a href='javascript:void(0);' rel='2'>2</a>"+
					"<a href='javascript:void(0);' rel='3'>3/a>"+
					"<a href='javascript:void(0);' rel='4'>4</a>"+
					"<a href='javascript:void(0);' rel='5'>5</a>"+
					"<a href='javascript:void(0);'class='next_page' rel='"+ parseInt((curPage) + 1)+"'>下一页</a>"+
					"<a href='javascript:void(0);'class='last_page' rel='" + parseInt(totalPage) +"'>尾页</a>"+
					"</div>";
	}
	if(curPage == totalPage){
		pageStr = "<div class='pager'>"+
					"<a href='javascript:void(0);'class='first_page' rel='1'>首页</a>"+
					"<a href='javascript:void(0);'class='prev_page' rel='"+ parseInt((curPage) - 1)+"'>上一页</a>"+
					"<a href='javascript:void(0);' rel='1'>1</a>"+
					"<a href='javascript:void(0);' rel='2'>2</a>"+
					"<span>...</span>"+
					"<a href='javascript:void(0);' rel='"+ parseInt((curPage) - 1)+"'>"+ (totalPage-1) +"</a>"+
					"<a href='javascript:void(0);'class='now_page' rel='" + parseInt(totalPage) +"'>"+ totalPage +"</a>"+	
					"</div>";
	}
	if(1<curPage<6){
		pageStr = "<div class='pager'>"+
					"<a href='javascript:void(0);'class='first_page' rel='1'>首页</a>"+
					"<a href='javascript:void(0);'class='prev_page' rel='"+ parseInt((curPage) - 1)+"'>上一页</a>"+
					"<a href='javascript:void(0);' rel='1'>1</a>"+
					"<a href='javascript:void(0);' rel='2'>2</a>"+
					"<a href='javascript:void(0);' rel='3'>3</a>"+
					"<a href='javascript:void(0);' rel='4'>4</a>"+
					"<a href='javascript:void(0);' rel='5'>5</a>"+
					"<a href='javascript:void(0);' class='next_page' rel='"+ parseInt((curPage) + 1)+"'>下一页</a>"+
					"<a href='javascript:void(0);' class='last_page' rel='" + parseInt(totalPage) +"'>尾页</a>"+
					"</div>";
		//.$((pageBar + " .pager a[rel=curPage]").toString()).addClass("now_page");
	}
	else{
		pageStr = "<div class='pager'>"+
					"<a href='javascript:void(0);' class='first_page' rel='1'>首页</a>"+
					"<a href='javascript:void(0);' class='prev_page'rel='"+ parseInt((curPage) - 1)+"'>上一页</a>"+
					"<a href='javascript:void(0);' rel='1'>1</a>"+
					"<a href='javascript:void(0);' rel='2'>2</a>"+
					"<span>...</span>"+
					"<a href='javascript:void(0);' rel='"+ parseInt((curPage)-1)+"'>"+ (curPage-1) +"</a>"+
					"<a href='javascript:void(0);' rel='"+ parseInt(curPage)+"'>"+ curPage +"</a>"+
					"<a href='javascript:void(0);' class='next_page' rel='"+ parseInt((curPage) + 1)+"'>下一页</a>"+
					"<a href='javascript:void(0);' class='last_page' rel='" + parseInt(totalPage) +"'>尾页</a>"+
					"</div>";
	}
	$(pageBar).html(pageStr);	
}
$(function(){
	//第一次加载
	getData(1,".book-items",".pager-bar1");
	getData(1,".hot-book-items",".pager-bar2");
	getComment(1,".comment-items",".pager-bar3");
	//点击触发局部刷新
	$(".pager-bar1 .pager a").click(function(){
		var rel = $(this).attr('rel');
		//console.log(rel);
		if(rel){
			getData(rel,".book-items",".pager-bar1");
			$(".pager-bar1 .pager a[rel=rel]").addClass('now_page');
		}
	});
	$(".pager-bar2 .pager a").click(function(){
		var rel = $(this).attr('rel');
		//console.log(rel);
		if(rel){
			getData(rel,".hot-book-items",".pager-bar2");
			$(".pager-bar2 .pager a[rel=rel]").addClass('now_page');
		}
	});
	$(".pager-bar1 .pager a").click(function(){
		var rel = $(this).attr('rel');
		//console.log(rel);
		if(rel){
			getComment(rel,".comment-items",".pager-bar3");
			$(".pager-bar3 .pager a[rel=rel]").addClass('now_page');
		}
	});
});
