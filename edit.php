<?php

$id = $_GET['id'];
if(isset($_POST['submit'])){
$path = "testFile.txt";
$lines = file($path, FILE_IGNORE_NEW_LINES);


$username=$_POST['u_name'];
$email=$_POST['u_email'];
$password=$_POST['password'];
$cpassword=$_POST['c_password'];


$lines[$id] = $username . ',' . $email. ',' . $password . ',' . $cpassword;
$lines[$id] .= "\n";
     

// using file_put_contents() instead of fwrite()
$data = implode("\n", array_values($lines));

$file = fopen($path,"w+");
fwrite($file, $data);
fclose($file);
}
?>

<form action="" method="post" name="reg_form">
    user name:
<input type="text" name="u_name" value="" /><br>
    u_email:
<input type="text" name="u_email" value="" /><br>
    password
<input type="password" name="password" /><br>
    confirmed password:
    <input type="password" name="c_password"/><br>
<input type="submit" name="submit" value="save" />
        </form>
</body>
    </center>
</html>