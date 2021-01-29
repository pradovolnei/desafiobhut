<?php 
	foreach(range(1,100) as $value){
		echo check_val($value)."<br>";
	}
	
	function check_val($v){
		foreach(array("15" => "BHUT TI", "3" => "BHUT", "5" => "TI") as $k => $t){
			if($v % $k == 0){
				return $t;
			}
		}
		return $v;
	}
	
	
	
	
?>