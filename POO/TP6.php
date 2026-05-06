<?php

// 1. Créez une classe abstraite Notification avec : $destinataire , $message , et une méthode abstraite envoyer() .
// 2. Implémentez NotificationEmail : envoyer() affiche "Email envoyé à [dest] : [msg]". Ajoutez $emailAdresse .
// 3. Implémentez NotificationSMS : envoyer() affiche "SMS envoyé au [tel] : [msg]". Ajoutez $telephone .
// 4. Implémentez NotificationPush : affiche "Notification push : [msg]".
// 5. Créez un tableau de notifications mixtes, envoyez-les toutes.

abstract class Notification{
    protected $destinataire ; 
    protected $message ; 
    public function __construct($destinataire, $message){
        $this->destinataire = $destinataire ; 
        $this->message = $message ; 
    }
    abstract public function envoyer() ; 
}
class NotificationEmail extends Notification{
    protected $emailAdresse ; 
    public function __construct($destinataire , $message , $emailAdresse){
        parent::__construct($destinataire , $message) ;
        $this->emailAdresse = $emailAdresse ; 
    }
    function envoyer(){
        echo "Email envoyé à $this->destinataire : $this->message " ;
    }
}

class NotificationSMS extends Notification{
    protected $telephone ; 
    public function __construct($destinataire , $message , $telephone){
        parent::__construct($destinataire , $message) ; 
        $this->telephone = $telephone ; 
    }
    public function envoyer(){
        echo "SMS envoyé au $this->telephone : $this->message " ;
    }
}

class NotificationPush extends Notification{
    public function __construct($destinataire , $message){
        parent::__construct($destinataire , $message) ; 
    }
    public function envoyer(){
        echo "Notification push : $this->message" ;
    }
}

$n1 = new NotificationEmail("Nora" , "Hello how are you ?" , "noraelayane44@gmail.com") ;
$n2 = new NotificationSMS("ZIAD" , "salam labas 3lik ?" , "0666901311") ; 
$n3 = new NotificationPush("adam" , "fia jouuu333 !!!!") ;

$notifs = [$n1 , $n2 , $n3] ; 
foreach ($notifs as $value) {
    $value->envoyer() ; 
    echo "<br>" ;
}