<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
 <p>
         <?php
         // クラスを定義する
         class Food {

             // プロパティを定義する                        
             private $name;
             private $price;

             // メソッドを定義する
             public function set_price(string $price) {
                $this->price = $price;
             }
            
             public function show_price() {
             echo $this->price . '<br>';
             }

             //　コンストラクタを定義する
             public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
             }
        }

        // クラスを定義する
        class Animal {

            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // メゾットを定義する
            public function set_height(string $height) {
                $this->height =$height;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }

            //　コンストラクタを定義する
            public function __construct(string $name, int $height, string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化
        $food = new Food('potato',250);
        print_r($food);

        echo '<br>';

        // インスタンス化
        $animal = new Animal('dog',60,5000);
        print_r($animal);

        echo '<br>';

        // メソッドにアクセスして実行する
        $food->show_price();

        // メソッドにアクセスして実行する
        $animal->show_height();
        
        ?>
     </p>
  </body>
 
 </html>