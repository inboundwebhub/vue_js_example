<?php
$dir = "../demo";
date_default_timezone_set('Asia/Kolkata');
	// Open a directory, and read its contents
	if (is_dir($dir)){
		if ($dh = opendir($dir)){
			while (($file = readdir($dh)) !== false){
				if (strpos($file, '.php') !== false)
				echo date("F d Y H:i:s.",filemtime($file))."  <a target='_blank' href='$file'>" . $file ."</a> <br>";
			}
			closedir($dh);
		}
		echo   "<a target='_blank' href='./aj'>Angular JS</a> <br>";
	}
?>