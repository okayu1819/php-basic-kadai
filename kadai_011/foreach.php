<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreachを使って連想配列の値とキーを出力する</title>
</head>
<body>
    <p>
        <?php
        // 連想配列を定義
        $vegetables = [
            "名前" => "玉ねぎ",
            "値段" => 200,
            "産地" => "北海道"
        ];

        // foreachを使って連想配列の値とキーを出力
        foreach($vegetables as $key => $value) {
            echo "{$key}：{$value}<br>";
        }
        ?>
    </p>
</body>
</html>