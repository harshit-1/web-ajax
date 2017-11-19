<?php
   set_time_limit(0);
          extract($_GET);
	  $file = fopen("live.txt","r");
          $file2 = fopen("result.txt","r");
          while(($line = fgets($file))){
			$line2 = fgets($file2);
			
            $modline = trim($line);
            $modline2 = trim($line2);
			
            $arr = explode(";",$modline);
            $arr2 = explode(";",$modline2);
           sleep(1);
		   $text = $arr[$count].":".$arr2[$count];
		  
          echo $text;
          }
		   fclose($file);
		   fclose($file2);
?>
