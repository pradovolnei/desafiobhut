<?php 
	for($x=1;$x<=100;$x++){
		$resultado = $x;
		
		if($x % 15 == 0 || $x % 5 == 0 || $x % 3 == 0){
			switch($x){
				case $x % 15 == 0:
					$resultado = "BHUT IT";
					break;
					
				case $x % 5 == 0:
					$resultado = "IT";
					break;
					
				case $x % 3 == 0:
					$resultado = "BHUT";
					break;
				
				default:
					
			}
		}
		
		echo $resultado."<br>";
	}
	
	
	
	
?>