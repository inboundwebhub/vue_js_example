<?php
/**
 * Created by PhpStorm.
 * User: jigar-halani
 * Date: 11/6/16
 * Time: 11:29 AM
 */
$link = mysqli_connect("127.0.0.1", "root", "mysql", "ecd-uat");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$file = fopen('demo.csv', 'r');
echo "<pre>";
while (($line = fgetcsv($file)) !== FALSE) {
	//$line is an array of the csv elements
	$count=count(explode("/",$line[0]));
	$url=end(explode("/",$line[0]));
	if($line[1]=='404')
	print_r($url."    ->    ".$line[1]." -> ".$count."<br>");

}
fclose($file);