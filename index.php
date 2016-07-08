<?php
require_once(__DIR__ . "/src/Library/MyClass.php");
require_once(__DIR__ . "/src/Library/OtherClass.php");
require_once(__DIR__ . "/src/Library/Decorator.php");

$oPage = new \Library\Decorator;
echo $oPage->header("BSA Hometask");
echo $oPage->body([
    'date' => \Library\MyClass::dateNow(),
    'time' => \Library\OtherClass::timeNow()
  ]);
echo $oPage->footer();
