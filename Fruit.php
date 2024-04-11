<?php
    // 果物の価格を表すインターフェース
    interface FruitInterface {
        // 価格の設定
        public function setPrice($quantity);

        // 最高値を出す
        public function maxPriceValue();

        // 最安値を出す
        public function minPriceValue();

        // 平均価格をだす
        public function averagePrice();
    }

    
    // 果物を表す抽象クラス
    abstract class Fruit implements FruitInterface {

        // id, nameをつける

        // 価格の設定。果物の種類によって変わる
        abstract public function setPrice($quantity);

        // 最高値をだす
        public function maxPriceValue() {
            if (empty($this->prices)) {
                return null;
            }
            // 二つの数を比較し最大値を見つける
            $max = $this->prices[0];
            foreach ($this->prices as $price) {
                if ($price > $max) {
                    $max = $price;
                }
            }
            return $max;
        }

        // 最安値をだす
        public function minPriceValue() {
            if (empty($this->prices)) {
                return null;
            }
            // 二つの数を比較し最小値を見つける
            $min = $this->prices[0];
            foreach ($this->prices as $price) {
                if ($price < $min) {
                    $min = $price;
                }
            }
            return $min;
        }

        // 平均価格をだす
        public function averagePrice() {
            if (empty($this->prices)) {
                return null;
            }
            $sum = 0;
            $count = 0;
            foreach ($this->prices as $price) {
                $sum += $price;
                $count += 1;
            }
            return $sum / $count;
        }
    }
?>
