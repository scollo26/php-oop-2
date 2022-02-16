<?php 
    require_once __DIR__ ."/Card.php";
    

    class Utente{
        
        protected $name;
        protected $lastName;
        protected $mail;
        protected $addresse;
        protected $city;
        protected $card;



        function __construct($name, $lastName, $mail, $addresse, $city, $card){
            $this->name = $name;
            $this->lastName = $lastName;
            $this->mail = $mail;
            $this->addresse = $addresse;
            $this->city = $city;
            $this->setCard($card);
            
        }


        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of lastName
         */ 
        public function getLastName()
        {
                return $this->lastName;
        }

        /**
         * Set the value of lastName
         *
         * @return  self
         */ 
        public function setLastName($lastName)
        {
                $this->lastName = $lastName;

                return $this;
        }

        /**
         * Get the value of mail
         */ 
        public function getMail()
        {
                return $this->mail;
        }

        /**
         * Set the value of mail
         *
         * @return  self
         */ 
        public function setMail($mail)
        {
                $this->mail = $mail;

                return $this;
        }

        /**
         * Get the value of addresse
         */ 
        public function getAddresse()
        {
                return $this->addresse;
        }

        /**
         * Set the value of addresse
         *
         * @return  self
         */ 
        public function setAddresse($addresse)
        {
                $this->addresse = $addresse;

                return $this;
        }

        /**
         * Get the value of city
         */ 
        public function getCity()
        {
                return $this->city;
        }

        /**
         * Set the value of city
         *
         * @return  self
         */ 
        public function setCity($city)
        {
                $this->city = $city;

                return $this;
        }

        /**
         * Get the value of card
         */ 
        public function getCard()
        {
                return $this->card;
        }

        /**
         * Set the value of card
         *
         * @return  self
         */ 
        public function setCard(Card $card)
        {
                $this->card = $card;

                return $this;
        }
    }





?>