<?php

/** Fruits class
 * @author Angela Caterina Gallo angela@gmail.com
 * @copyright 2021 Angela
*/
class Fruit{
    public $name;
    public $color;
    public $taste;

    public function __construct( string $name,  string $color,  string $taste){
        $this->name  = $name;
        $this->color  = $color;
        $this->taste  = $taste;
    }
    public function getName(){
        return $this->name;
    }
    public function getColor(){
        return $this->color;
    }
    public function getTaste(){
        return $this->taste;
    }
}

$apple = new Fruit('apple' , 'green', 'sweet');
$lime = new Fruit('lime', 'green', 'sour');
$lemon = new Fruit('lemon', 'yellow', 'sour');
$orange = new Fruit('orange', 'orange', 'sweet');
$banana = new Fruit('banana', 'yellow', 'sweet');

// var_dump($apple, $lime , $lemon , $orange, $banana);
$fruits = [$apple, $lime , $lemon , $orange, $banana];
var_dump($fruits);
// foreach($fruits as $values){
//     echo $values->getName();
//     echo $values->getColor();
//     echo $values->getTaste();
// }
// var_dump($apple->getName());

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main id="main_content">
            <section id="fruits">
                <h2>Fruits</h2>
                <div class="container">
                    <?php 
                        foreach($fruits as $values){?>
                        <div class="card">
                            <h3><?php echo $values->getName()?></h3>
                            <p>Color: <?php echo $values->getColor()?></p>
                            <p>Taste: <?php echo $values->getTaste()?></p>
                        </div>
                        
                        <?php }
                    ?>
                </div>
            </section>
        </main>
    </body>
</html>