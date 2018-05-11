<?php
 
namespace DesignPattern\CreationalPatterns\Singleton;

/**
 * 
 * @author Christophe
 *
 */
class Singleton
{
 
  /**
   * Attribute $_instance
   * 
   * @var Singleton
   * @access private
   * @static
   */
   private static $_instance;
   
   /**
    * Method who create only instacne class
    * If not instance, instance of class is new instance of class
    * And return Instance of class
    *
    * @param void
    * @return Singleton
    */
   public static function getInstance()
   {
     if(!isset(self::$_instance))
     {
       self::$_instance = new Singleton();  
     }
 
     return self::$_instance;
   }
}
 
?>

