<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題16</title>
</head>
<body>
    <p>
        <?php
        // クラスFoodを作成
        class Food {
            private $name;
            private $price;

            // プロパティの初期化
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // priceプロパティを出力する関数
            public function show_price() {
                echo $this->price . '<br>';
            }
        }
        class Animal {
            private $name;
            private $height;
            private $weight;

            // プロパティの初期化
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // heightプロパティを出力する関数
            public function show_height() {
                echo "{$this->height}<br>";
            }            
        }

        // クラスFoodのインスタンス化
        $potato = new Food('potato', 250);

        // クラスAnimalのインスタンス化
        $dog = new Animal('dog', 60, 5000);

        print_r($potato);
        echo '<br>';

        print_r($dog);
        echo '<br>';
        
        $potato->show_price();
        $dog->show_height();

        ?>
    </p>
</body>
</html>