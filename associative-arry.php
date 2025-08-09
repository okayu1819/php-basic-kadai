<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>連想配列を作ってキーと値を出力しよう</title>
</head>
<body>
    <p>
        <?php
        // 連想配列を作成
        $vegetable_data = [
            "name" => "onion",
            "price" => 200,
            "weight" => 160,
        ];
        // キーと値を出力
        print_r($vegetable_data);
        ?>
    </p>
</body>
</html>