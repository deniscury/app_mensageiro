<?php
    require __DIR__."/vendor/autoload.php";

    use src\Mensageiro;
    use src\Email;
    use src\Sms;
    use src\Whatsapp;

    $msg = new Mensageiro(new Email());
    echo $msg->enviarToken();

    echo "<br/>";

    $msg2 = new Mensageiro(new Sms());
    echo $msg2->enviarToken();

    echo "<br/>";

    $msg2 = new Mensageiro(new Whatsapp());
    echo $msg2->enviarToken();