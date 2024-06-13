<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    require_once 'Classes/Car.php';

    $car1 = new Car("Bmw");
    echo $car1->getCarInfo();
    ?>

</body>
</html>