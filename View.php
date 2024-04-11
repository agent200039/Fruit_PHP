<!-- <form action="button.php" method="post">
    桃<br />
    <input type="radio" name="php" value="1"/>
    <input type="submit" name="submit" value="送信" />
    <?php
        if( isset( $_POST["php"] ) === TRUE ){
            //桃を15個買うと、最高値は、最安値は、平均額は、
        // ラジオボタン未選択の場合
        }else{
            echo "選択してください";
        }
    ?>
</form>

<form action="button.php" method="post">
    ｲﾁｺﾞ<br />
    <input type="radio" name="php" value="2"/>
    <input type="submit" name="submit" value="送信" />
    <?php
        if( isset( $_POST["php"] ) === TRUE ){
            //ｲﾁｺﾞを15個買うと、最高値は、最安値は、平均額は、
        // ラジオボタン未選択の場合
        }else{
            echo "選択してください";
        }
    ?>
</form> -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Prices</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .fruit {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fruit Prices</h1>

        <div class="fruit">
            <h2>桃の価格</h2>
            <p>最高値: <?php echo $peachMax; ?>円</p>
            <p>最安値: <?php echo $peachMin; ?>円</p>
            <p>平均価格: <?php echo round($peachAverage); ?>円</p>
        </div>

        <div class="fruit">
            <h2>イチゴの価格</h2>
            <p>最高値: <?php echo $strawberryMax; ?>円</p>
            <p>最安値: <?php echo $strawberryMin; ?>円</p>
            <p>平均価格: <?php echo round($strawberryAverage); ?>円</p>
        </div>
    </div>
</body>
</html>


