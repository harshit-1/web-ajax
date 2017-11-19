<?php
	extract($_GET);
	$file=fopen("data.txt","r+") or die("Unable to open file");
	$info=fgets($file);
	$info=explode(";",$info);
	echo $info[$count];
?>
