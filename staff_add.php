<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

スタッフ追加<br>
<br>
<form method="POST" action="staff_add_check.php">
スタッフ名を入力してください。<br>
<input type="text" name="name" style="width:200px;"><br>
パスワードを入力してください。<br>
<input type="password" name="pass" style="width:100px;"><br>
パスワードをもう一度入力してください。<br>
<input type="password" name="pass2" style="width:100px;"><br>
<br>
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">
</form>

</body>
</html>