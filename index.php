<?php
require_once(__DIR__ . "/src/Library/MyClass.php");
require_once(__DIR__ . "/src/Library/OtherClass.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>BSA Hometask</title>
</head>
<body>
<h1>Current date and time</h1>
<p>
<?php echo \Library\MyClass::dateNow() . "<br />"; ?>
<?php echo \Library\OtherClass::timeNow(); ?>
</p>
</body>
</html>
