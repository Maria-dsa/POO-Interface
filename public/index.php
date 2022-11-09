<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO 4 - Interface</title>
</head>

<body>

    <?php

    require_once '../src/Vehicle.php';
    require_once '../src/Car.php';
    require_once '../src/Bicycle.php';
    require_once '../src/LightableInterface.php';

    ?>
    <h2> SWITCH ON/OFF </h2>

    <?php

    $mini = new Car('blue', 4, 'electric', 'mini');
    $bikeelec = new Bicyle('black', 1, 'Mbike');

    echo 'mini Switch on : ' . $mini->switchOn() . '<br>';
    echo 'mini Switch off : ' . $mini->switchOff() . '<br>';

    $bikeelec->setCurrentSpeed(5);
    echo 'bike elec - speed 5 -  Switch on : ' . $bikeelec->switchOn() . '<br>';
    echo 'bike elec - speed 5 -  Switch off : ' . $bikeelec->switchOff() . '<br>';

    $bikeelec->setCurrentSpeed(20);
    echo 'bike elec - speed 20 -  Switch on : ' .  $bikeelec->switchOn() . '<br>';
    echo 'bike elec - speed 20 -  Switch off : ' . $bikeelec->switchOff() . '<br>';


    ?>



</body>

</html>