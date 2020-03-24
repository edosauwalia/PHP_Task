<html>
 <head>
  <title>Submission</title>
 </head>
 <body>

<?php

//If Submit Button Is Clicked Do the Following
if ($_POST['Submit']){

$myFile = "file.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $_POST['name'] . ":". '<br />';
fwrite($fh, $stringData) . "\n";
$stringData = $_POST['occupation'] . "\n";
fwrite($fh, $stringData);
$stringData = $_POST['state'] . "\n";
fwrite($fh, $stringData);
$stringData = $_POST['email'] . "\n";
fwrite($fh, $stringData);
fclose($fh);

} ?>


//goes here after
<script>location.href='contact.html';</script>
	 
 </body>
</html>