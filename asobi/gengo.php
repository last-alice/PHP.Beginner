<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

<?php

    $seireki=$_POST['seireki'];

    $wareki=gengo($seireki);
    print $wareki;

    function gengo($seireki)
    {
        if(1868<=$seireki && $seireki<=1911)
        {
            $gengo='明治';
        }

        if(1912<=$seireki && $seireki<=1925)
        {
            $gengo='大正';
        }

        if(1926<=$seireki && $seireki<=1988)
        {
            $gengo='昭和';
        }

        if(1989<=$seireki)
        {
            $gengo='平成';
        }

    return($gengo);
    }

?>

</body>
</html>