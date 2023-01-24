<?php
    namespace src;

    use src\interfaces\IMensagem;

    class Sms implements IMensagem{
        public function enviar() : void{
            echo "Sms enviado corretamente.";
        }
    }