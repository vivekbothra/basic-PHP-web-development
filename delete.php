
<?php
$path = "testFile.txt";
$lines = file($path, FILE_IGNORE_NEW_LINES);
$id = $_GET['id'];

foreach($lines as $key => $line)
   unset($lines[$id]);

$data = implode("\n", array_values($lines));

$file = fopen($path,"w+");
fwrite($file, $data);
fclose($file);

?>