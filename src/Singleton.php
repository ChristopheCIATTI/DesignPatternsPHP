<?php
 
namespace DesignPattern\Singleton;
    
class Singleton {
 
  /**
   * @var Singleton
   * @access private
   * @static
   */
   private static $_instance = null;
 
   /**
    * Construct
    *
    * @param void
    * @return void
    */
   private function __construct() {  
       
   }
 
   /**
    * Method who create only instacne class
    *
    * @param void
    * @return Singleton
    */
   public static function getInstance() {
     if(is_null(self::$_instance)) {
       self::$_instance = new Singleton();  
     }
 
     return self::$_instance;
   }
}
 
?>
