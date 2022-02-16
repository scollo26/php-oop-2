<?php 
    // istanzio la classe..
    class Prodotti {
        protected $name;
        protected $description;
        protected $model;
        protected $price;
    
    // costruttore
        function __construct($name, $description, $model, $price)
        {
            $this->name = $name;
            $this->description = $description;
            $this->model = $model;
            $this->price = $price;
        }

    }  


?>