
function switchTag(tag,content)
	{
			for(let i=1; i <=4; i++)
			{
				if ("tag"+i==tag)
				{
					//$('#'+tag+' '+'a')[0].className = "selectli"+i;
					
					//console.log($('#'+tag+' '+'a')[0]);
					document.getElementById(tag).getElementsByTagName("a")[0].className="selectli";
				}else{
					//$('#tag'+i+' '+'a')[0].className = "";
					
					//console.log($('#tag'+i+' '+'a')[0]);
					document.getElementById("tag"+i).getElementsByTagName("a")[0].className="";
				}
				if ("content"+i==content)
				{
					//$('#main-box #'+content).className = " ";
					//console.log($('#main-box #'+content).attr("id"));
					document.getElementById(content).className="";
				}else{
					//$('#main-box #content'+i).className = "hidecontent";
					//console.log($('#main-box #content'+i).attr("id"));
					document.getElementById("content"+i).className="hidecontent";
				}
				
			}
		}
		
$(function(){	
	$(".toRight").mouseover(function(){
		$(this).css("opacity",0.4);
	});
	$(".toRight").mouseout(function(){
		$(this).css("opacity",1);
	});
	$(".toLeft").mouseover(function(){
		$(this).css("opacity",0.4);
	});
	$(".toLeft").mouseout(function(){
		$(this).css("opacity",1);
	});
	
	$(".base-right").click(function(){	
			var current_tag = $(".nav-progress li a[class != '']");
			//console.log(current_tag);
			
			var current_content = $(".main-box1").children("div:visible");
			//console.log(current_content);
			//console.log(current_tag.attr('id'));
			if(current_tag.attr("id") != "4"){
				//以ID值来找唯一子节点
				var i = parseInt(current_tag.attr('id'))+1;
				var str = "a#"+i;
				//console.log(str);
				var next_tag = current_tag.parent('li').next("li")
				.find(str);
				
			}else{
				var next_tag = $(".nav-progress ul li:first a");
			}
			//console.log(next_tag);
			
			if(current_content.attr("id") != "content4"){
				var next_content = current_content.next();	
			}else{
				var next_content = $(".main-box1").children("div:first-child");
			}
			//console.log(next_content);
			
			current_content.attr("class","hidecontent");
			next_content.removeClass("hidecontent");
			current_tag.removeClass("selectli");
			next_tag.attr("class","selectli");
			//console.log(next_tag.length);
		
	});
	
	$(".base-left").click(function(){	
			var current_tag = $(".nav-progress li a[class != '']");
			//console.log(current_tag);
			
			var current_content = $(".main-box1").children("div:visible");
			//console.log(current_content);
			
			if(current_tag.attr("id") != "1"){
				var i = parseInt(current_tag.attr('id'))-1;
				var str = "a#"+i;
				var pre_tag = current_tag.parent('li').prev("li").find(str);
				//console.log(prev_tag.length);
			}else{
				var pre_tag = $(".nav-progress ul li:last a");
			}
			//console.log(next_tag);
			
			if(current_content.attr("id") != "content1"){
				var pre_content = current_content.prev();	
			}else{
				var pre_content = $(".main-box1").children("div:last-child");
			}
			//console.log(next_content);
			
			current_content.attr("class","hidecontent");
			pre_content.removeClass("hidecontent");
			current_tag.removeClass("selectli");
			pre_tag.attr("class","selectli");
			
		
	});
});