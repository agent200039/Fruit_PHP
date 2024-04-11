<?php
    require_once('Fruit.php');

    // 桃を表すクラス
    class Peach extends Fruit {
        public function setPrice($quantity) {
            for ($i = 0; $i < $quantity; $i++) {
                $this->prices[] = rand(200, 300);
            }
        }
    }

    // 桃を15個実体化
    $peaches = new Peach;
    $peaches->setPrice(15);
?>
