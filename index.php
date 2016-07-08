<?php
require_once(__DIR__ . "/src/Library/MyClass.php");
require_once(__DIR__ . "/src/Library/OtherClass.php");
require_once(__DIR__ . "/src/Library/Decorator.php");

echo (new \Library\Decorator())->header("BSA Hometaks")
  ->body([
      "date" => \Library\MyClass::dateNow(),
      "time" => \Library\OtherClass::timeNow()
    ])
  ->footer();
