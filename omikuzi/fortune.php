<?php
$lots = [1,2,3,4,5,6,7];
if(isset($_POST['btn'])){
    $lots = array_rand($lots);
    switch($lots){
        case 0:
            $res ='大吉';
            $num = 1;
            break;
        case 1:
            $res ='中吉';
            $num = 2;
            break;
        case 2:
            $res ='小吉';
            $num = 3;
            break;
        case 3:
            $res ='吉';
            $num =4;
            break;
        case 4:
            $res ='半吉';
            $num =5;
            break;
        case 5:
            $res ='末吉';
            $num =6;
            break;
        case 6:
            $res ='凶';
            $num =7;        
    }
}else{
    header('Location:button.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>おみくじ</title>
    </head>
    <body>
        <h1>結果</h1>
        <h2><?= $res; ?></h2>
        <p>
            <a href="detail.php?num=<?= $num; ?>">結果の詳細</a>
        </p>
        <p>
            <a href="button.php">
                <button type="button">もう一度おみくじを引く</button>
            </a>
        </p>
    </body>
</html>