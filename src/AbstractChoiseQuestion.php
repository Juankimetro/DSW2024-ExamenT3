<?php
namespace Dsw\T3;
use Dsw\T3\AbstractQuestion;

abstract class AbstractChoiseQuestion extends AbstractQuestion {
  public $options;
  public function __construct($name, $options=0){
    parent::__construct($name);
    $this->options = $options;
  }

  public function addOption(){
    
  }

  public function getOptions(){
    
  }
}