


<?php

$first=$_POST["fn"];
$last=$_POST["ln"];
$address=$_POST["address"];

if(!empty($first) || !empty($last) || !empty($address)){

$cvsData = $first . "," . $last . "," . $address ."\n" ;

$fp = fopen("formdata.csv","a"); // $fp is now the file pointer to file $filename

    if($fp)
    {
        fwrite($fp,$cvsData); // Write information to the file
        fclose($fp); // Close the file
    } 
}




?>


<?php 
echo "<html><body><table border=1>";
$f = fopen("formdata.csv", "r");
$fr = fread($f, filesize("formdata.csv"));
fclose($f);
$lines = array();
$lines = explode("\n\r",$fr); // IMPORTANT the delimiter here just the "new line" \r\n, use what u need instead of... 

for($i=0;$i<count($lines);$i++)
{
    echo "<tr>";
    $cells = array(); 
    $cells = explode(",",$lines[$i]); // use the cell/row delimiter what u need!
    for($k=0;$k<count($cells);$k++)
    {
       echo "<td>".$cells[$k]."</td>";
    }
    // for k end
    echo "</tr>";
}
// for i end
echo "</table></body></html>";
?> 