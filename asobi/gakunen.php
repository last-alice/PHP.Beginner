<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

<?php

    $gakune = $_POST['gakunen'];

    switch($gakune)
        {
            case '1':
                $kousha = 'あなたの校舎は南校舎です。';
                $bukatsu = '部活動にはスポーツ系と文科系があります。';
                $mokuhyou = 'まずは学校に慣れましょう。';
                break;

            case '2':
                $kousha = 'あなたの校舎は西校舎です。';
                $bukatsu = '学園祭目指して全力で取り組みましょう。';
                $mokuhyou = '今しかできないことを見つけよう。';
                break;

            case '3':
                $kousha = 'あなたの校舎は東校舎です。';
                $bukatsu = '受験に就職に忙しくなります。後輩へ譲っていきましょう。';
                $mokuhyou = '将来の道を作ろう。';
                break;

            default:
                $kousha = 'あなたの校舎は3年生と同じです。';
                $bukatsu = '部活はありません。';
                $mokuhyou = '早く卒業しましょう。';
                break;
        }

    print '校舎　'.$kousha.'<br>';
    print '部活　'.$bukatsu.'<br>';
    print '目標　'.$mokuhyou.'<br>';

?>

</body>
</html>