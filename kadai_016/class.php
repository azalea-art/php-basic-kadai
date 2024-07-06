
<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
 <p>
         <?php

         class Food {
                       
         private $name;
         private $price;

             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
                  }

                  public function show_name() {
                    echo $this->name;
                }
                  public function Show_price() {
                    echo $this->price;
                  }
         }

         class Animal {
                    
          private $name;
          private $height;
          private $weight;

          public function __construct(string $name, float $height, float $weight) {
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight;
              
          }
          public function show_name() {
            echo $this->name;
        }
          public function Show_height() {
            echo $this->height;
          }
          public function Show_weight() {
            echo $this->weight;
          }
      }

         $Food = new Food('potato', 250);
         $Animal = new Animal('dog', 60 , 5000);

         print_r($Food);
         echo '<br>';
         print_r($Animal);
         echo '<br>';

         $Food->show_price();
        echo "<br>";
        $Animal->show_height();

         ?>
     </p>
 </body>
 
 </html>