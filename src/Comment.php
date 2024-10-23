<?php
namespace Dsw\T3;
use Dsw\T3\AbstractStatement;

class Comment extends AbstractStatement
{
  public function __construct($text){
    parent::__construct($text);
  }
}