<?php
    namespace src;

    class Mensageiro{
        protected $canal;

        public function __construct($canal){
            $this->setCanal($canal);
        }
        
        public function enviarToken(): void{
            $classe = '\src\\'.ucfirst($this->getCanal());

            $retorno = new $classe();
            
            echo $retorno->enviar();
        }

        /**
         * Get the value of canal
         */ 
        public function getCanal()
        {
                return $this->canal;
        }

        /**
         * Set the value of canal
         *
         * @return  self
         */ 
        public function setCanal($canal)
        {
                $this->canal = $canal;

                return $this;
        }
    }