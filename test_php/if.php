<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>条件分岐の基本</title>
</head>
<body>
    <p>
        <?php
        echo ("算術演算子を使った場合の戻り値を出力する");
        echo "<br>";
        echo 45 + 18;
        echo "<br>";

        echo ("比較演算子を使った場合の戻り値を出力する");
        echo "<br>";
        var_dump(45 > 18);
        echo "<br>";

        echo ("投下演算子を使った場合の戻り値を出力する");
        echo "<br>";
        var_dump("5" == 5);
        echo "<br>";

        echo ("厳密投下演算子を使った場合の戻り値を出力する");
        echo "<br>";
        var_dump("5" === 5);
        echo "<br>";
        ?>
    </p>

    <p>
        <?php
        // 変数$numに0~4までのランダムな整数を代入する
        $num = mt_rand(0,4);
        echo $num;
        echo "<br>";

        // 変数$numの値が4なら「大当たりです」、3なら「当たりです」それ以外なら「はずれです」という文字列を出力する
        if($num === 4) {
            echo "大当たりです";
        }
        else if($num === 3){
            echo "当たりです";
        }
        else {
            echo "はずれです";
        }
        ?>
    </p>

    <p>
        <?php
        $num = 20;
        // 変数$numの値を変数名とともに出力
        echo "変数の値は{$num}です";
        echo "<br>";

        // &&(かつ)を記述して、すべての条件が成り立つ場合にのみ処理を行う（変数$numの値が11~29）
        if($num >= 11 && $num <= 29) {
            echo '変数$numは10より大きく、30より小さいです';
        }
        else {
            echo '条件が成り立ちませんでした';
        }
        echo '<br>';

        $num = 30;
        // 変数$numの値を変数名とともに出力
        echo "変数の値は{$num}です";
        echo "<br>";
        
        // ||(または)を記述して、1つでも条件が成り立てば処理を行う（変数$numの値が10または30）
        if($num === 10 || $num === 30) {
            echo '変数$numは10または30です';
        }
        else {
            echo '条件が成り立ちませんでした';
        }
        ?>
    </p>
</body>
</html>