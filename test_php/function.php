<?php
// 型宣言と異なるデータ型の場合にエラーを発生させる
declare(strict_types = 1);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>関数の基礎</title>
</head>
<body>
    <p>
        <?php
        // 朝の挨拶を出力する関数を定義
        function say_good_morning() {
            echo 'おはようございます！<br>';
            echo '昨日はよく眠れましたか？<br>';
            echo '今日も一日頑張りましょう！<br>';
        }

        // 夜の挨拶を出力する関数を定義
        function say_good_evening() {
            echo 'こんばんは<br>';
            echo '今日も一日お疲れさまでした。<br>';
        }

        // 朝の挨拶をする関数を呼びだし
        say_good_morning();

        // 夜の挨拶をする関数を呼び出し
        say_good_evening();
        ?>
    </p>
    <p>
        <?php
        // 引数$priceに送料を加算し、その値を出力する関数を定義
        function calculate_total($price) {
            $total = $price + 500;

            echo "{$total}円<br>";
        }

        // 関数を呼び出し、引数として購入金額を渡す
        calculate_total(1200);

        // 引数$priceと$shipping_feeを加算して、その値を出力する関数を定義
        function add_two_arguments($price, $shipping_fee) {
            $total = $price + $shipping_fee;

            echo "{$total}円<br>";
        }

        // 関数を呼び出し、引数として購入金額と送料を渡す
        add_two_arguments(1200,500);
        ?>

        <p>
            <?php
            // 与えられた引数$sumを2倍にして、その値を戻り値として返す関数を定義
            function double($num) {
                return $num * 2;
            }

            // 関数の戻り値を出力
            echo double(30);
            ?>
        </p>

        <p>
            <?php
            // 引数の型宣言を行い、引数を整数型に限定する
            function type_hinting_argument(int $num) {
                return $num * 2;
            }

            // 型宣言と同じデータ型の引数を渡す（declareを記述しているため、型が異なるとエラーが発生する）
            echo type_hinting_argument(1);
            ?>
        </p>

        <p>
            <?php
            // 戻り値の型宣言を行い、戻り値を整数型に限定する
            function type_hinting_return_value($num):int {
                return $num * 2;
            }

            // 型宣言と同じデータ型の戻り値を返す（declareを記述しているため、型が異なるとエラーが発生する）
            echo type_hinting_return_value(1);
            ?>
        </p>
    </p>
</body>
</html>