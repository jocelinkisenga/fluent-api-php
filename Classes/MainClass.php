<?php
 /**FLUENT API 
  * classe principale d'appels des fonctions statiques
  */
 class MainClass
 {
   
   /**@author : jocelin kisenga
    * @email: kisengajocelin7@gmail.com
    * from lushidev
    */
    private $result;
    
   public function __call($method, $args){
     return $this->call($method, $args);
   }
   
   public static function __callStatic($method, $args){
     return (new static())->call($method,$args);
   }
   
   private function call ($method,$args){
     if (!method_exists($this,'_'.$method)){
       throw new Exception ('call undefined method'.$method);
     }
     return $this->{'_'.$method}(...$args);
   }
  
   
 }