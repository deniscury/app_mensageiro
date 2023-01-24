<?php
    require __DIR__."/vendor/autoload.php";

    use src\Mensageiro;

    $msg = new Mensageiro('email');
    echo $msg->enviarToken();

    echo "<br/>";

    $msg2 = new Mensageiro('sms');
    echo $msg2->enviarToken();