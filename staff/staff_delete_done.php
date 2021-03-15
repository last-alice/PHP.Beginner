<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> ろくまる農園</title>
</head>
<body>

<?php

try
{

	$staff_code = $_POST['code'];

	$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
	$user='root';
	$password='';
	$dbh = new PDO($dsn,$user,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql = 'DELETE FROM mst_staff WHERE code = ?';
	$stmt = $dbh->prepare($sql);
	$data[] = $staff_code;
	$stmt->execute($data);

	$dbh = null;

}
	catch (Exception $e)
{
		print 'ただいま障害により大変ご迷惑をお掛けしております。';
		exit();
}

?>

	削除しました。<br>
		<br>
	<a href="staff_list.php"> 戻る</a>

</body>
</html>