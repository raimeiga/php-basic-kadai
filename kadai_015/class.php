//合格したが、出力結果をブラウザに出力する必要があるので、htmlコードを記述しておこう。
<!DOCTYPE html>
<html lang="ja">
<p>
<?php
class Food {
    private $name;
    private $price;

// コンストラクタを定義する
public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
}

public function show_price() {
    echo $this->price. '<br>';
}
}

$food = new Food('potato',250);
print_r($food);

echo '<br>';

class Animal{
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height,int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    public function show_height() {
        echo $this->height . '<br>';
    }
}

$animal = new Animal('dog', 60, 5000);
print_r($animal);

echo '<br>';

$food->show_price(250);
$animal->show_height(60);
?>
</p>
</body>
</html>
