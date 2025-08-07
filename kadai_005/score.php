<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題 テストの平均点を計算しよう</title>
</head>
<body>
    <?php
        // 生徒10人の平均点をブラウザに出力する
        $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

        // 合計点を計算する
        $total = 0;
        foreach ($scores as $score) {
            $total += $score;
        }
        // 平均点を計算する
        $average = $total / count($scores);
        // 平均点を出力する 
        echo $average;
    ?>
</body>
</html>