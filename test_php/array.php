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
        echo "<br>";
        echo "<br>";

        
        // 連想配列に値を代入する
        $personal_data = ["name" => "侍太郎", "age" => 36, "gender" => "男性"];

        // 連想配列の値を出力する
        print_r($personal_data);
        echo "<br>";

        // "age"の値を更新する
        $personal_data["age"] = 37;

        // 新しい要素（キーと値）を追加する
        $personal_data["address"] = "東京都";

        // 連想配列の値を出力する
        print_r($personal_data);
        echo "<br>";

        // キー"gender"の値を出力する
        print_r($personal_data["gender"]);
        echo "<br>";
        ?>
    </p>

</body>
</html>