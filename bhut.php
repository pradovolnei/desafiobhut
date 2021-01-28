<?php 	
	
	function bhut($numero){
		if($numero % 3 == 0 && $numero % 5 > 0)
			return "BHUT";
	}
	
	function it($numero){
		if($numero % 5 == 0 && $numero % 3 > 0)
			return "IT";
	}
	
	function bhutit($numero){
		if($numero % 15 == 0)
			return "BHUT IT";
	}
	
	function numero($numero){
		if($numero % 3 > 0 && $numero % 5 > 0)
			return $numero;
	}
	
	for($x=1;$x<=100;$x++){
		
		echo bhut($x);
		echo it($x);
		echo bhutit($x);
		echo numero($x);
		
		echo "<br>";
	}
	
	
?>