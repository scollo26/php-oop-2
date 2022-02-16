<?php


class Card{


    protected $date;
    protected $number;
    protected $cvc;


    function __construct($date, $number, $cvc)

        {
            try 
            {
                $this->date = $date; 
            } 
            catch (Exception $e)
            {
                throw new Exception ($e->getMessage());
            }
            $this->number = $number;
            $this->cvc = $cvc;
            
        }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of cvc
     */ 
    public function getCvc()
    {
        return $this->cvc;
    }

    /**
     * Set the value of cvc
     *
     * @return  self
     */ 
    public function setCvc($cvc)
    {
        $this->cvc = $cvc;

        return $this;
    }
    }








?>