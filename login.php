<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<title>LOGIN PAGE</title>
	<style type="text/css">

		table{
			margin-top: 150px;
			border:1px solid;
			background-color: 	#FFB6C1;
			}
			td
			{
				border :0px;
				padding: 10px;
			}
			th
			{
				border-bottom: 1px solid;
				background-color: #add8e6;
			}		
	</style>
<body style="background-color: 		#98FB98;">
</head>
<body>
	<div id="form">
		<form action="quiz.php" method="POST">
		<table align="center">
			<tr>
				<th colspan="2"><h2 align="center">LOGIN</h2></th>
			</tr>
		<tr>
			<td>Username: </td>
			<td><input type="text" name="unmae"></td>
		</tr>
		<tr>
			<td>Password </td>
			<td><input type="password" name="pwd"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="Login"></td>
		</tr>
		
	</form>
</div>

</body>
</html>