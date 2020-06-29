<?php
 $path = 'C:\Users\Chris\Documents\Career\Github.io website\data.txt';
 if (isset($_POST['Name']) && isset($_POST['Email'])&&  && isset($_POST['Subject'])&& && isset($_POST['Message'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['Name'].' - '.$_POST['Email'].'- '.$_POST['Subject']'- '.$_POST['Message'].PHP_EOL;
	file_put_contents('C:\Users\Chris\Documents\Career\Github.io website\data.txt', $string, FILE_APPEND);
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>