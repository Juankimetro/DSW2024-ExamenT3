<?php

namespace Dsw\T3;
use Dsw\T3\DisplayableInterface;
use Dsw\T3\AbstractStatement;
use Dsw\T3\Text;

abstract class AbstractQuestion implements DisplayableInterface
{
  public $name;
  public $statements = [];

  public function __construct($name)
  {
    $this->name = $name;
    $this->statements = []; 
  }
  public function addStatement($text){
    array_push($this->statements, $text);
    return $this->statements;
  }

  public function getStatements(){
    return $this->statements;
  }
  public function renderStatements(){
  
  }

  public function render(){
    return "\n";
  }
}