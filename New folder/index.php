<?php include('connect_db.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>In line edit</title>
	<script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
    var id="";
    
    $("table").on('click','.edit',function()
    {
    	   

    		id=$(this).attr('id');
	    	var name=$('#name'+id).text();
	    	var email_id=$('#email_id'+id).text();
	    	var password=$('#password'+id).text();
	    
	    	var Date_of_birth=$('#Date_of_birth'+id).text();
	    	var about_me=$('#about_me'+id).text();
	    	//console.log(name);
	    	
    	   

            $('#name'+id).html('<input type="text" id="new_name'+id+'"  value="'+name+'">'); 
            $('#email_id'+id).html('<input size="12" type="text" id="new_email'+id+'"  value="'+email_id+'">'); 
            $('#password'+id).html('<input type="password" id="new_password'+id+'"  value="'+password+'">'); 
         
            $('#Date_of_birth'+id).html('<input type="date" id="new_Date_of_birth'+id+'"  value="'+Date_of_birth+'">'); 
            $('#about_me'+id).html('<input type="text" id="new_about_me'+id+'"  value="'+about_me+'">'); 
    	    $(this).removeClass('edit');
    	    $(this).text('Save').addClass('save');
    	    



    });
    $('table').on('click','.save',function(){

           
            //console.log(id);
	    	var new_name=$('#new_name'+id).val();
	    	var new_email_id=$('#new_email'+id).val();
	    	var new_password=$('#new_password'+id).val();
	    
	    	var new_Date_of_birth=$('#new_Date_of_birth'+id).val();
	    	var new_about_me=$('#new_about_me'+id).val();
	    	
	    	//console.log(new_about_me);


	    	$.ajax({
				  type: "POST",
				  url: "save.php",
				  data: {
                       id:id,
                       name:new_name,
                       email:new_email_id,
                       pwd:new_password,
                       dob:new_Date_of_birth,
                       aboutme:new_about_me



				  },


				 
				  success: function(){
                    
				  	$('#name'+id).text(new_name);
				  	$('#email_id'+id).text(new_email_id);
				  	$('#password'+id).text(new_password);
				  	$('#Date_of_birth'+id).text(new_Date_of_birth);
                    $('#about_me'+id).text(new_about_me);

				  }
				  
				 
				});

	    	$(this).removeClass('save');
    	    $(this).text('Edit').addClass('edit');

    });




	});
</script>
    
</head>
<h4>In line editing</h4>
<body>
<?php

$sql="SELECT * FROM reg_user";
$result=mysqli_query($conn,$sql);

echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>user_Name</th> <th>Email</th> <th>Password</th>  <th>DOB</th> <th>about_me</th> <th></th> </tr>";

// loop through results of database query, displaying them in the table

while($row = $row=mysqli_fetch_assoc($result)) {

echo "<tr id='data'>";

echo '<td id="id" >' . $row['id'] . '</td>';


echo '<td id="name'.$row['id'].'" >' . $row['name'] . '</td>';

echo '<td id="email_id'.$row['id'].'">' . $row['email_id'] . '</td>';

echo '<td id="password'.$row['id'].'">' . $row['password'] . '</td>';
echo '<td id="Date_of_birth'.$row['id'].'">' . $row['Date_of_birth'] . '</td>';

echo '<td id="about_me'.$row['id'].'">' . $row['about_me'] . '</td>';



echo '<td><a  href="#" id="' . $row['id'] . '" class="edit" >Edit</a></td>';


 
echo "</tr>";

}
echo "</table>";

?>


</body>
</html>