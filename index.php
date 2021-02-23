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
// var_dump($fruits);
// foreach($fruits as $values){
//     echo $values->getName();
//     echo $values->getColor();
//     echo $values->getTaste();
// }
// var_dump($apple->getName());

/** Films class
 * @author Angela Caterina Gallo angela@gmail.com
 * @copyright 2021 Angela
*/
class Film{
    public $title;
    public $filmDirector;
    public $year;

    public function __construct( string $title,  string $filmDirector,  int $year){
        $this->title  = $title;
        $this->filmDirector  = $filmDirector;
        $this->year  = $year;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getFilmDirector(){
        return $this->filmDirector;
    }
    public function getYear(){
        return $this->year;
    }
}
$film1 = new Film('A Clockwork Orange', 'Stanley Kubrick', 1971);
$film2 = new Film('The Dark Knight', 'Christopher Nolan', 2008);
$film3 = new Film('Fight Club', 'David Fincher', 1999);
$film4 = new Film('Catch Me If You Can', 'Steven Spielberg', 2002);
$film5 = new Film('Forrest Gump', 'Robert Zemeckis', 1994);
$film6 = new Film('A Clockwork Orange', 'Stanley Kubrick', 1971);
$film7 = new Film('The Dark Knight', 'Christopher Nolan', 2008);
$film8 = new Film('Fight Club', 'David Fincher', 1999);
$film9 = new Film('Catch Me If You Can', 'Steven Spielberg', 2002);
$film10 = new Film('Forrest Gump', 'Robert Zemeckis', 1994);
$films = [$film1, $film2, $film3, $film4, $film5, $film6, $film7, $film8, $film9, $film10];
// var_dump($films);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400&display=swap" rel="stylesheet">
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
                                <!-- Modo 1: utilizzo di una funzione GET -->
                                <!-- <h3><?php echo $values->getName()?></h3>
                                <p>Color: <?php echo $values->getColor()?></p>
                                <p>Taste: <?php echo $values->getTaste()?></p> -->

                                <!-- Modo 2: applico direttamente il valore che voglio prendere -->
                                <h3><?php echo $values->name ?></h3>
                                <p>Color: <?php echo $values->color ?></p>
                                <p>Taste: <?php echo $values->taste ?></p>
                            </div>
                        <?php }
                    ?>
                </div>
            </section>
            <section id="film">
                <h2>Films</h2>
                <div class="container">
                    <?php 
                        foreach($films as $value){?>
                            <div class="card">
                                <h3><?php echo $value->getTitle()?></h3>
                                <p><?php echo $value->getFilmDirector()?></p>
                                <p><?php echo $value->getYear()?></p>
                            </div>
                        <?php }
                    ?>
                </div>
            </section>
        </main>
    </body>
</html>