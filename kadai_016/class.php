<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>クラスのインスタンス化</title>
</head>
<body>
    


<?php
//クラスを定義
class Food {
    //プロパティを定義
    private $name;
    private $price;

public function set_price() {

echo $this->price . '<br>';

    }
//コントラクタを定義
public function__construct(string $name, int $price) {

    $this->name = $name;
    $this->price = $price;
    }
}
//インスタンス化
$food = new Food ('potato', 250);


class Animal {

    private $name;
    private $height;
    private $weight;

public function show_height(){

    echo $this->height . '<br>';

    
}

public function __construct(string $name, int $height, int $weight){

    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;

}

}

$animal = new Animal('dog', 60, 5000);

print_r($food);
echo '<br>';
print_r($animal);
echo '<br>';

$food->set_price();
$animal->show_height();



?>

</body>
</html>

