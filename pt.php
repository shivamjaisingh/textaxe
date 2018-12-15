<?php 
$text = "hello, I love you";
$cmd = "python check.py "."'".$text."'";
$command= escapeshellcmd($cmd);
$output = shell_exec($command);
$arra  = json_decode($output,TRUE);
echo  $arra;
//echo $output;
?>
