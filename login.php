<?php
   		   session_start();
   		   include('connect_db.php');

   		 
   		  $_SESSION['uid'];
   		  $_SESSION['name'];
   		   
         	 
   		   $email=$_POST['username'];
   		   $pass=$_POST['password'];
         	 
          	 
       	 
            	if(isset($_POST['submit']))
   		 	{
   				 include('myfunction.php');
   		   
   				 if (login($email,$pass,$conn))
   				 {
   					 
   					 header('location:myaccount.php');
   				 }else
   				 {
                  	header('location:index.php');
   				 }
   				 
   			 }



        	if(!empty($row['email_id']) AND !empty($row['password']))
   		 {
   			 $_SESSION['uid'] = $row['email_id'];
   			 echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
   			 return true;


   		 }
   		 else
   		 {
   			 echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
   			 return false;
   		 }





   		 ?>