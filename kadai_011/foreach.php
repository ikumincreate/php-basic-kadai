<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charest="UTF-8">
  <title>PHP基礎編 課題011</title>
</head>

<body>
  <p>
    <?php
    $onion = [
      '名前' => '玉ねぎ',
      '値段' => '200',
      '産地' => '北海道',
    ];

    // 連想配列$onionのキーと値を1つずつ順番に出力する
    foreach ($onion as $key => $value) {
      echo "{$key}：{$value} <br>";
    }
    ?>
  </p>
</body>