<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
	<link rel="stylesheet" href="./style/style.css">
	<script type="text/javascript" src="./js/jquery182.js"></script>
	<script type="text/javascript" src="./js/index.js"></script>
</head>
<body>
	<?php require("init.php");?>

	<div class="layout">
	<div id="tips"></div>
		<form action="" method="post" id="user_form">
			<table class="w100 tb">
				<tr>
					<td colspan='2' class="size28" >用户注册</td>
				</tr>
				<tr>
					<td class="size28">用户名:</td>
					<td><input type="text" name="user_name" class="size28" id="user_name"></td>
				</tr>
				<tr>
					<td class="size28">密码:</td>
					<td><input type="text" name="user_password" class="size28" id="user_password"></td>
				</tr>
				<tr>
					<td colspan='2' align="center">
						<input type="submit" name="reg" value="注册" class="btn size28">
						<input type="submit" name="login" value="登录" class="btn size28">
					</td>
				</tr>
			</table>

		</form>
		
		<?php
		if (isset( $_REQUEST['reg'])) {
			$user_name = trim($_REQUEST['user_name']);
			$user_password = trim($_REQUEST['user_password']);
			$user = new UserModel( $db );
			if ($user->add_user($user_name,$user_password)) {
				echo "注册成功！";
			}else{
				echo "注册失败！";
			}
		}
	?>
	<?php
		if (isset( $_REQUEST['login'])) {
			$user_name = trim($_REQUEST['user_name']);
			$user_password = trim($_REQUEST['user_password']);
			$user = new UserModel( $db );
			if ($user->user_login($user_name,$user_password)) {
				echo "登录成功！";
			}else{
				echo "登录失败！";
			}
		}
	?>
	</div>
</body>
</html>