<?php

echo "<html><body><table border=1>";

$file="testFile.txt";
$file_handle=fopen($file,'r+') or die();
$fr=fread($file_handle,filesize($file));
fclose($file_handle);
$lines = array();
$lines=explode("\n",$fr);  //line by line
$j=0;
for($i=0;$i<count($lines);$i++)
{

	echo "<tr>";
    $cells = array(); 
    $cells = explode(",",$lines[$i]);
    									 // use the cell/row delimiter what u need!
    for($k=0;$k<count($cells);$k++)
    {
       echo "<td>".$cells[$k]."</td>";

    }

    // for k end
    echo '<td><a href="edit.php?id='.$j.'">edit</a></td><td><a href="delete.php?id='.$j.'">Delete</a></td>';
    echo "</tr>";
    $j++;
 
   

}
echo "</table></body></html>";


?>