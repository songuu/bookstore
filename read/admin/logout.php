<?php
	session_start();
	session_destroy();
?>
<script language="javascript">
	alert("已经安全退出!");
	location="admin_login.php";
</script>