<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		td{
			text-align:middle;
		}
	</style>
</head>
<body>
	<form action="__APP__/Message/doMessage" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>留言标题:</td>
				<td>
					<input type="text" name="title"></input>
				</td>
			</tr>
			<tr>
				<td>留言内容:</td>
				<td>
					<textarea name="content" rows="3"></textarea>
				</td>
			</tr>
			<tr>
				<td>上传附件:</td>
				<td>
					<input type="file" name="file"></input>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="msubmit"></input>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>