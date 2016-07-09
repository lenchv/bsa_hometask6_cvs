<?php
require_once(__DIR__ . "/src/Library/MyClass.php");
require_once(__DIR__ . "/src/Library/OtherClass.php");
require_once(__DIR__ . "/src/Library/Decorator.php");
require_once(__DIR__ . "/src/Library/Builder.php");
// bad commit 3
use \Library\{MyClass, OtherClass, Decorator, Builder};
$header = new Decorator("header", "BSA Hometask");
$body = new Decorator("body", [
			"date" => MyClass::dateNow(),
			"time" => OtherClass::timeNow()
		]);
$footer = new Decorator("footer");

echo (new Builder())
	->setBuild($header)
	->setBuild($body)
	->setBuild($footer)
	->getBuild();
