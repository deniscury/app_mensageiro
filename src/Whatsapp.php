<?php
    namespace src;

    use src\interfaces\IMensagem;

    class Whatsapp implements IMensagem{
        public function enviar() : void{
            echo "Whatsapp enviado corretamente.";
        }
    }