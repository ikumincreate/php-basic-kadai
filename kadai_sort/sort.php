<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編 課題sort</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($order) {
            $nums = [15, 4, 18, 23, 10 ];
            $array = $nums;
            if ($order == true){
                // 昇順ソート
                echo '昇順にソートします。 <br>';
                sort($array);
                foreach($array as $array) {
                echo $array. '<br>';
                }
            } else {
                // 降順ソート
                echo '降順にソートします。 <br>';
                rsort($array);
                foreach($array as $array) {
                echo $array. '<br>';
                }
            }
        }   

        sort_2way(true);
        sort_2way(false);
        ?>
    </p>
</body>

</html>