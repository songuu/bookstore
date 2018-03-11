<center>
<table width="265" height="205" border="0" cellpadding="0" cellspacing="0">
	<tr>
	  	<td width="100" align="right" valign="middle" class="l_td">用户名：</td>
		<td align="left" valign="middle" class="l_td"><?php echo @$_SESSION[name]; ?></td>
	</tr>
	<tr>
	  	<td width="100" align="right" valign="middle" class="l_td">等级：</td>
		<td align="left" valign="middle" class="l_td"><?php echo @$_SESSION[grades]; ?></td>
	</tr>
	<tr>
	  	<td width="100" align="right" valign="middle" class="l_td">上传数量：</td>
		<td align="left" valign="middle" class="l_td"><?php echo @$_SESSION[counts]; ?></td>
	</tr>
<form name="form1" method="post" action="">
	<tr>
	  <td colspan="2" align="center" valign="middle" class="l_td">&nbsp;</td>
    </tr>
</form>
</table>
</center>