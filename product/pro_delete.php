<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

<?php

try
{

	$pro_code = $_GET['procode'];

	$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
	$user='root';
	$password='';
	$dbh = new PDO($dsn,$user,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql = 'SELECT name FROM mst_product WHERE code=?';
	$stmt = $dbh->prepare($sql);
	$data[] = $pro_code;
	$stmt->execute($data);

	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	$pro_code = $rec['name'];

	$dbh = null;

}
catch(Exception $e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

	商品削除<br>
		<br>
	商品コード<br>
	<?php print $pro_code; ?>
		<br>
	商品名<br>
	<?php print $pro_name; ?>
		<br>
	この商品を削除してよろしいですか？<br>
		<br>
	<form method = "post" action = "pro_delete_done.php">
	<input type = "hidden" name = "code" value = "<?php print $pro_code; ?>">
	<input type = "button" onclick = "history.back()" value = "戻る">
	<input type = "submit" value = "OK">
</form>

</body>
</html>