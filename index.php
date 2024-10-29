<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

class Animal {

    public $color, $age, $weight;

    public function __construct($weight, $age, $color) {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getAge() {
        return $this->age;
    }

    public function getColor() {
        return $this->color;
    }
}

class Lion extends Animal {
    public $maneColor;

    public function __construct($weight, $age, $color, $maneColor) {
        parent::__construct($weight, $age, $color);
        $this->maneColor = $maneColor;
    }

    public function getManeColor() {
        return $this->maneColor;
    }

    public function roar() {
        echo "Лев!\n";
    }
}

class Rabbit extends Animal {
    public $earLength;

    public function __construct($weight, $age, $color, $earLength) {
        parent::__construct($weight, $age, $color);
        $this->earLength = $earLength;
    }

    public function getEarLength() {
        return $this->earLength;
    }

    public function hop() {
        echo "Кролик!\n";
    }
}

class Wolf extends Animal {
    public $packSize;

    public function __construct($weight, $age, $color, $packSize) {
        parent::__construct($weight, $age, $color);
        $this->packSize = $packSize;
    }

    public function getPackSize() {
        return $this->packSize;
    }

    public function howl() {
        echo "Волк!\n";
    }
}

$lion = new Lion(250, 10, "золотистый", 30);
$rabbit = new Rabbit(2, 1, "белый", 10);
$wolf = new Wolf(50, 5, "серый", 5);

echo $lion->getWeight() . " " . $lion->getAge() . " " . $lion->getColor() . " " . $lion->getManeColor() . "\n";
$lion->roar(); ?> <br> <?php

echo $rabbit->getWeight() . " " . $rabbit->getAge() . " " . $rabbit->getColor() . " " . $rabbit->getEarLength() . "\n"; 
$rabbit->hop(); ?> <br> <?php

echo $wolf->getWeight() . " " . $wolf->getAge() . " " . $wolf->getColor() . " " . $wolf->getPackSize() . "\n";
$wolf->howl();


    ?>
    
</body>
</html>