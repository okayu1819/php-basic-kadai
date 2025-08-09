<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>配列の基本</title>
</head>
<body>
    <p>
        <?php
        // 配列に値を代入する
        $user_names = ['侍太郎', "侍一郎", "侍次郎", '侍三郎', "侍四郎"];

        // 配列の値を出力する
        print_r($user_names);
        echo "<br>";

        //  2番目の要素を更新する
        $user_names[1] = "侍花子";

        // 末尾に要素を追加する
        $user_names[] = "侍五郎";

        // 配列の値を出力する
        print_r($user_names);
        echo "<br>";

        // 配列の三番目の要素を出力する
        print_r($user_names[2]);
        ?>
    </p>

</body>
</html>