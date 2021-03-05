<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

<?php

$tsuki=$_POST['tsuki'];

$yasai[]='';
$yasai[]='ブロッコリー';
$yasai[]='カリフラワー';
$yasai[]='レタス';
$yasai[]='みつば';
$yasai[]='アスパラガス';
$yasai[]='セロリ';
$yasai[]='ナス';
$yasai[]='ピーマン';
$yasai[]='オクラ';
$yasai[]='さつまいも';
$yasai[]='大根';
$yasai[]='ほうれんそう';

print $tsuki;
print '月は';
print $yasai[$tsuki];
print 'が旬です。';

?>
</body>
</html>