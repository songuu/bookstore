<?php
	include "conn/conn.php";
	header("Content-type:text/html;charset=utf-8");
	$wherelist = array();
	$urllist = array();
	if(empty($_POST['search-text'])){
		echo "<script>alert('没输入');history.go(-1);</script>";
		exit();
	}
	if (!empty($_POST['search-text'])) {
		$wherelist[] = " name like '%" . $_POST['search-text'] . "%'";
		$urllist[] = "name=" . $_POST['search-text'];
	
	}
	$where = "";
	if (count($wherelist) > 0) {
		$where = " where " . implode(' and ', $wherelist);
		$url = '&' . implode('&', $urllist);
	}
	$url = '&' . implode('&', $urllist);
	$sql = "select * from comment_book $where ";
	$totalnum = $conn->getall($sql);
	
	$num=sizeof($totalnum);
	$pagesize = 5;
	$maxpage = ceil(sizeof($totalnum) / $pagesize);
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	if ($page < 1) {
		$page = 1;
	}
	if ($page > $maxpage) {
		$page = $maxpage;
	}
	$limit = " limit " . ($page - 1) * $pagesize . ",$pagesize";
	$sql1 = "select * from comment_book {$where} order by id asc {$limit}";
	$res = $conn->query($sql1);
	/*$_SESSION['maxpage']=$maxpage;
	$_SESSION['page']=$page;
	$_SESSION['totalnum']=$totalnum;
	$_SESSION['res']=$res;*/
?>
<table border="1" width="700" center>
	<tr>
		 <td>编号</td>
		 <td>书名</td>
		 <td>出版商</td>
		 <td>作者</td>
		 <td>风格</td>
		 <td>类型</td>
		 <td>出版时间</td>
	</tr>
	<?php 
	while(!$res->EOF){?>
	<tr>
		 <td><?php echo $res->fields['id'] ?></td>
		 <td><?php echo $res->fields['name'] ?></td>
		 <td><?php echo $res->fields['pulisher'] ?></td>
		 <td><?php echo $res->fields['writer']?></td>
		 <td><?php echo $res->fields['style'] ?></td>
		 <td><?php echo $res->fields['type'] ?></td>
		 <td><?php echo $res->fields['pulish_time'] ?></td>
	</tr>
	<?php $res->MoveNext();} ?>
	<!--<tr>
	 <td colspan="6">
	<?php
	echo " 当前{$page}/{$maxpage}页 共{$num}条";
	echo " <a href='search.php?page=1{$url}'>首页</a> ";
	echo "<a href='search.php?page=" . ($page - 1) . "{$url}'>上一页</a>";
	echo "<a href='search.php?page=" . ($page + 1) . "{$url}'>下一页</a>";
	echo " <a href='search.php?page={$maxpage}{$url}'>尾页</a> ";
	?>
	</td>
	</tr>---显示所有的数据库元素>
</table>