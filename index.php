<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySql</title>
</head>
<body>
    <?php
        //     $hola = array("mam" => "pl", "bab" => "ru");
        //     print_r ($hola);
        //     echo $hola["mam"];

        // $holi = [
        //     ['blab', 'mario', 'eola', 20],
        //     ['mil', 'zoro', 'maduro', 10],
        //     ['bombini', 'malini', 'glupini',40]
        // ];

        // print_r($holi[0][3]);
        // print_r($holi[1][0]);
        // print_r($holi[2][2]);

        // loops

        $nina = ['sushi', 'mushi', 'dushi'];

        for ($i = 0; $i < count($nina); $i++) {
            echo $nina[$i] . '<br/>';
        }

        $products = [

            ['name' => 'banan', 'cost' => 20],
            ['name' => 'orang', 'cost' => 10],
            ['name' => 'kiwi', 'cost' => 15],
            ['name' => 'aple', 'cost' => 5],

        ];

        foreach ($products as $product) {
            echo $product['name'] . '-' . $product['cost'];
            echo '<br>';
        }

    ?>

<!-- ------------------------ cond stat -->

<?php


foreach($products as $product){
if ($product['cost'] < 20 || $product['cost'] < 15){
    echo $product['name'].'<br>';
   
}
}

?>




<h1>hi</h1>

<ul>
    <?php foreach ($products as $product) {?>
<h3><?php echo $product['name']; ?></h3>
<p><?php echo $product['cost']; ?></p>
<?php }?>
</ul>

<div class="">

<ul>
    <?php
    foreach($products as $product){ ?>
<?php if($product['cost'] > 15){ ?>

<li><?php echo $product['name']; ?></li>

<?php } ?>

<?php } ?>

</ul>

</div>



</body>
</html>