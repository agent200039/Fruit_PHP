<?php
    require_once('Fruit.php');

    // イチゴを表すクラス
    class Strawberry extends Fruit {
        public function setPrice($quantity) {
            $this->prices[] = rand(400, 500);
        }
    }

    // イチゴを15個実体化
    $strawberries = new Strawberry();
    $strawberries->setPrice(15);
?>
