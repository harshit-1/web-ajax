<?php

 extract($_GET);
 $file = fopen("food.txt","r");
 $r =array();
 
 while(!feof($file)){
	 $line = fgets($file);
	 $modline = trim($line);
	 if(strpos(strtolower($modline),strtolower($term))!==false){
		 $r[] = $modline;
	 } 
 }
 echo(json_encode($r));
 ?>