
<!DOCTYPE html>
<html>

<body>

<form action="" method="post">
 Firstname<input type="text" name="firstname">
 lastname<input type="text" name="lastname">
 email<input type="email" name="email">
 <input type="submit" name="submit">
</form>


<?php

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];

$my_file = 'file.txt';
$handle = fopen($my_file, 'a+') or die('Cannot open file:  '.$my_file);
fwrite($handle, $firstname);
fwrite($handle, $lastname);
fwrite($handle, $email);
$data = fread($handle,filesize($my_file));
echo $data;




 ?>


</body>

</html>