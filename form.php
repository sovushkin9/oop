<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') { 
		$function=$_POST['inputFunction'];
		$inputStart=$_POST['inputIntStart'];
		$inputEnd=$_POST['inputIntEnd'];
		exec("L4 $function $inputStart $inputEnd" , $out);
		$arr_res = json_encode($out);
		echo $arr_res;

	}
?>