<?php 
include('connect_db.php');


      if(isset($_POST['id'])) 
            { 
                  

             $id1=$_POST['id'];
             $name1=$_POST['name'];
             print_r($name1);

             $email_id1=$_POST['email'];
             $password1=md5($_POST['pwd']);
             $Date_of_birth1=$_POST['dob'];
             $about_me1=$_POST['aboutme'];
           
            
            
            

                  $sql ="UPDATE reg_user SET name='$name1',email_id='$email_id1',password='$password1',Date_of_birth='$Date_of_birth1',about_me='$about_me1' WHERE id='$id1'";
                  $result=mysqli_query($conn,$sql);
                  if ($result) {

                        echo "data saved";
                  }





            }
?>
