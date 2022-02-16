<?php 

    class FasciaUtente extends Utente {

        public $sconto;
        public $Type;


        public function __construct($Type)
        {
            $this->setType($Type);
            // $this->sconto ="non hai sconti" . $this->sconto;
        }

        public function addtype($Type){
            if($Type == "bronzo"){

                $this->sconto = 40;

            }elseif($Type == "argento"){

                $this-> sconto = 50;

            }elseif($Type == "oro"){

                $this->sconto = 80;
            }
            return $this;
        }

        /**
         * Get the value of sconto
         */ 
        public function getSconto()
        {
                return $this->sconto;
        }

        /**
         * Set the value of sconto
         *
         * @return  self
         */ 
        public function setSconto($sconto)
        {
                $this->sconto = $sconto;

                return $this;
        }

        /**
         * Get the value of Type
         */ 
        public function getType()
        {
                return $this->Type;
        }

        /**
         * Set the value of Type
         *
         * @return  self
         */ 
        public function setType($Type)
        {
                $this->Type = $Type;

                return $this;
        }
    }







?>