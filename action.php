<html>
<body>
<?php 
$text = $_GET["text"];
$text = trim($text);
$cmd = "python check.py "."'".$text."'";
$command= escapeshellcmd($cmd);
$output = shell_exec($command);
$json = json_decode($output, true);

echo "Polarity - ".$json['polarity']."</br>";
echo "Text - ".$json['text']."</br>";
echo "Polarity Confidence - ".$json['polarity_confidence'];
?>
</body>
</html>






