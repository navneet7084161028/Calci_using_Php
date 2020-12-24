<?php

$display_Val = (float)$_POST['display_Val'];
$prev_Val = (float)$_POST['prev_Val'];
$opt = $_POST['opt'];

if ($opt == '+') {

	$prev_Val = $prev_Val + $display_Val;
	echo $prev_Val;
}
elseif ($opt == '-'){

	$prev_Val = $prev_Val - $display_Val ;
	echo $prev_Val;
}
elseif($opt == '*'){

	$prev_Val = $prev_Val * $display_Val;
	echo $prev_Val;
}
elseif($opt == '/'){

	$prev_Val = $prev_Val / $display_Val ;
	echo $prev_Val;
}
else{
	
	echo $prev_Val;
}

?>



