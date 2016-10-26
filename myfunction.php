<?php
	include('connect_db.php');
    
    function login($email,$pass,$conn)
    {

   	 $pass = md5($pass);

   	 if (!empty($_POST['username']))
   	 {
   		 $sql="SELECT * FROM reg_user where email_id = '$email' AND password = '$pass'";
   		 

   		 $query = mysqli_query($conn,$sql) or die(mysql_error());

   		 $row = mysqli_fetch_assoc($query) or die(mysql_error());
   		 if(sizeof($row))
   		 {
   			 $_SESSION['uid'] = $row['email_id'];
   			 $_SESSION['name'] = $row['email_id'];
   			 return true;
   		 }
   		 else
   		 {
   			 return false;
   		 }
    	}



    }


?>
