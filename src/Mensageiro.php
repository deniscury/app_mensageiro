<?php
    namespace src;

    use src\interfaces\IMensagem;

    class Mensageiro{
        protected $classe;

        public function __construct(IMensagem $classe){
            $this->setClasse($classe);
        }
        
        public function enviarToken(): void{
            echo $this->getClasse()->enviar();
        }

        /**
         * Get the value of classe
         */ 
        public function getClasse()
        {
                return $this->classe;
        }

        /**
         * Set the value of classe
         *
         * @return  self
         */ 
        public function setClasse(IMensagem $classe)
        {
                $this->classe = $classe;

                return $this;
        }
    }