
<?php 
   
   // istanzio la classe..
   class Email {
   
   public $mail = "pippobaudo@mail.it";
   public $subject = "Acquisto store Catania";
   public $message = "Gentile cliente, grazie per aver effettuato l'acquisto";

   function setEmail($mail, $subject, $message)
   {
        $this->mail = $mail;
        $this->subject = $subject;
        $this->message = $message;
   }

}


?>