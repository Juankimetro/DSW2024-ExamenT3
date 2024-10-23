<?php
namespace Dsw\T3;
use Dsw\T3\AbstractQuestion;

abstract class AbstractChoiseQuestion extends AbstractQuestion {
  public $questions;
  public function __construct($name, $questions=0){
    parent::__construct($name);
    $this->questions = $questions;
  }

  public function addQuestions(){
    
  }

  public function getQuestions(){
    
  }
}