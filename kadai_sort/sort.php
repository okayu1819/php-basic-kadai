<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ソート関数の実装</title>
</head>
<body>
    <p>
        <?php
        // 配列の定義
        $nums = [15, 4, 18, 23, 10];

        // 昇順/降順に配列をソートする関数を定義
        function sort_2way($array, $order) {
            if($order === 1) {
                sort($array, SORT_NUMERIC);
                echo "昇順にソートします。<br>";
                foreach($array as $value) {
                    echo "{$value}<br>";
                }
            }
            else {
                rsort($array, SORT_NUMERIC);
                echo "降順にソートします。<br>";
                foreach($array as $value) {
                    echo "{$value}<br>";
                }
            }
        }

        // 関数の呼び出し
        sort_2way($nums, 1);
        sort_2way($nums, 0);
        ?>
    </p>
</body>
</html>