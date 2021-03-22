<?php
    session_start();
    session_regenerate_id(true);
    if(isset($_SESSION['login'])==false)
    {
        print 'ログインされていません。<br>';
        print '<a href = "../staff_login/staff_login.html">ログイン画面へ</a>';
        exit();
    }
    else
    {
        print $_SESSION['staff_name'];
        print 'さんログイン中<br>';
        print '<br>';
    }
?>

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
    require_once('../common/common.php');

	$post=sanitize($_POST);
    $staff_name=$post['name'];
    $staff_pass=$post['pass'];

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