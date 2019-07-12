
<?php
// -- おみくじの処理 -- 
$fortunes = array('大吉', '中吉', '小吉', '末吉', '吉', '凶', '大凶');
$fortune = $fortunes[rand(0, count($fortune-1))];

// -- 日付の取得 --
// - タイムゾーンの設定 -
date_default_timezone_get('Asia/Tokyo');

// - $dateにその日の日付を代入 -
$date = date("Y年m月d日");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <p class="text-center">あなたの<?php echo($date); ?>の運勢は・・・</p>
        <h1 class="text-center"><?php echo($fortune); ?>です！</h1>
    </div>
</body>
</html>