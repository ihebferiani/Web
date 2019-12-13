<?php 
class Config
{
    private static $instance = NULL;
    public static function getConnexion()
    {
        if(!isset(self::$instance))
        {
            try {
               
                self::$instance = new PDO('mysql:host=localhost;dbname=projetweb;','root','');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }   
            catch (Execption $e){

                die('Erreur: '.$e->getMessage());
            }
        }
    return self::$instance;
    }
}
?>