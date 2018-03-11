<?php
	session_start();
	include_once "conn/conn.php";
	$page=intval(@$_POST['pageNum']);
	$total=$conn->getall('select id from comment_book');
	$pagesize=8;
	$totalpage=ceil(sizeof($total) / $pagesize);
	$startpage=$page*$pagesize;
	$arr['total']=sizeof($total);
	$arr['pagesize']=$pagesize;
	$arr['totalpage']=$totalpage;
	$query=$conn->query("select id,name,writer from comment_book order by id asc limit $startpage,$pagesize");
	while(!$query->EOF){
		$arr['list'][]=array(
			'id'=>$query->fields['id'],
			'name'=>$query->fields['name'],
			'writer'=>@$query->fields['writer'],
		);
		$query->MoveNext();
	}
	echo json_encode($arr);
?>