<?php
    namespace src;

    use src\interfaces\IMensagem;

    class Email implements IMensagem{
        public function enviar() : void{
            echo "Email enviado corretamente.";
        }
    }