<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

class myclass
{
	public $isalive = false;
	
	function __construct()
	{
		echo "I am alive<br>";
		$isalive = true;
	}
	
	function __destruct()
	{
		echo "I am melting<br>";
		$isalive = false;
	}
}

$myc = new myclass();

//do something

?>

</body>
</html>
