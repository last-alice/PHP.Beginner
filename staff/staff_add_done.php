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

$staff_name=$_POST['name'];
$staff_pass=$_POST['pass'];

$staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
$staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');
//var_dump("1");
$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='';
//var_dump("why");
$dbh = new PDO($dsn, $user, $password);
//var_dump("koko");
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//var_dump("3");
$sql='INSERT INTO mst_staff (name,password) VALUES (?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$staff_name;
$data[]=$staff_pass;
$stmt->execute($data);
//var_dump("4");
$dbh=null;
//var_dump("5");
print $staff_name;
print 'さんを追加しました。<br>';

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	//var_dump($e);
	exit();
}

?>

<a href="staff_list.php"> 戻る</a>

</body>
</html>