<?php
  ini_set('error_reporting', E_ALL);
  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  
  require '../vendor/autoload.php';
//  require 'AClass.php';  
  use \web\AClass;
  use \web\pub\BClass;
  use \web\pub\CClass;  
  
  $classA = new AClass();
  $classB = new BClass();
  $classC = new CClass();  
  
  var_dump($classA);
  var_dump($classB);
  echo $classC->className;
  
//  phpinfo();
?>