<?php
// 1. Créez une classe Config avec des propriétés statiques : $nomApp , $version , $langue , $modeDebug .
// 2. Ajoutez des méthodes statiques getter/setter pour chaque propriété.
// 3. Ajoutez une méthode statique afficherConfig() qui liste toute la configuration.
// 4. Créez une classe Compteur avec une propriété statique $count = 0 , incrémentée à chaque instanciation.
// 5. Ajoutez des méthodes statiques incrementer() , decrementer() , reset() et getValeur() . Testez-les.

class Config{
    protected static $nomApp ;
    protected static $version ;
    protected static $langue ; 
    protected static $modeDebug ;
    public function __construct(){
        self::$nomApp ; 
        self::$version ; 
        self::$langue ; 
        self::$modeDebug ;
    }
    public static function getNomApp(){
        return self::$nomApp ;
    }
    public static function getVersion(){
        return self::$version ;
    }
    public static function getLangue(){
        return self::$langue ; 
    }
    public static function getModeDebug(){
       return self::$modeDebug ;
    }

    public static function setNomApp($new){
        self::$nomApp = $new ;
    }
    public static function setVersion($new){
        self::$version = $new ; 
    } 
    public static function setLangue($new){
        self::$langue = $new ; 
    }
    public static function setModeDebug($new){
        self::$modeDebug = $new ; 
    }
    public static function afficherConfig(){
        echo self::$nomApp . " | " . self::$version . " | " . self::$langue . " | " . self::$modeDebug ; 
    }
}

class Compteur{
    protected static $count = 0 ; 
    public function __construct(){
        self::$count++ ;
    }
    public static function incrementer(){
        self::$count++ ; 
    }
    public static function decrementer(){
        self::$count-- ; 
    }
    public static function reset(){
        self::$count = 0 ; 
    }
    public static function getValeur(){
        return self::$count ; 
    }
}

$compt = new Compteur() ;
$compt2 = new Compteur() ;
echo Compteur::getValeur() ; 
echo Compteur::reset() ;
echo "<br>" ;
echo Compteur::getValeur() ; 
echo Compteur::incrementer() ;
echo "<br>" ;
echo Compteur::getValeur() ;
echo Compteur::decrementer() ;
echo "<br>" ;
echo Compteur::getValeur() ;
echo "<br>" ;
Config::setNomApp("Pintrest") ;
Config::setVersion(3.14) ; 
Config::setLangue("English") ;
Config::setModeDebug("ModeVibeCoder") ;
Config::afficherConfig();


