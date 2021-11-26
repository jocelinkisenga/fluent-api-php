<?php 
include("MainClass.php");
class Math extends MainClass {
  private $result;
  
  protected function _add($number){
    $this->result += $number;
    return $this;
  }
  
  protected function _sub($number){
    $this->result -= $number;
    return $this;
  }
  public function result(){
    return $this->result;
  }
}