<?php
	session_start();
	include "conn/conn.php";
?>
<script type="text/javascript" src="js/admin_js.js"></script>
<table width="558" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="567" height="26" align="center" valign="middle"><font style=" font-size:13px; ">管 理 员 信 息 添 加</font></td>
  </tr>
  <tr>
    <td><table width="559" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="92"><table width="404" height="90" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="402" valign="top"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
              <form name="list" method="post" action="addmanager_chk.php">
              <tr>
                <td height="15" colspan="2">&nbsp;</td>
                </tr>
              <tr>
                <td width="131" height="30" align="right" valign="middle"> 管理员名称：</td>
                <td width="269" height="30" align="left" valign="middle"><input name="name" type="text"  id="names" size="30"></td>
              </tr>
              <tr>
                <td height="30" align="right" valign="middle">管理密码：</td>
                <td height="30" align="left" valign="middle"><input name="password" type="password"  id="password" size="30"></td>
              </tr>
              <tr>
                <td height="30" align="right" valign="middle">密码确认：</td>
                <td height="30" align="left" valign="middle"><input name="password2" type="password"  id="password2" size="30"></td>
              </tr>
			  <tr>
                <td height="30" align="right" valign="middle">管理权限：</td>
                <td height="30" align="left" valign="middle">                  <select name="grade"  id="select">
                  <option value="视频目录管理员" selected>图书目录管理员</option>
                  <option value="音频目录管理员">音乐目录管理员</option>
                  <option value="视频数据管理员">电影目录管理员</option>
                  <option value="音频数据管理员">图书数据管理员</option>
                  <option value="会员数据管理员">音乐数据管理员</option>
                  <option value="会员等级管理员">电影数据管理员</option>
                </select></td>
              </tr>
			  <tr>
                <td height="30" align="right" valign="middle">真实姓名：</td>
                <td height="30" align="left" valign="middle"><input name="realname" type="text"  id="realname" size="30"></td>
              </tr>
              <tr>
                <td height="30" colspan="2" align="center" valign="middle">
                    <input name="Submit" type="button"  value="添  加" class="submit" onClick="check();">
                    <input name="Submit2" type="button"  value="返  回" class="submit" onClick="javascript:top.window.close()"></td>
                </tr> </form>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>