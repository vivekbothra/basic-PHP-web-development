
<?php
include('connect_db.php');
include('myfunction.php');
$id=$_SESSION['uid'];

$sql="SELECT name FROM reg_user WHERE id='$id'";
$result=mysqli_query($conn,$sql);
?>
<header>
<div>
    <div style="background-color:blue" >

   	 <p><span name="userName"><?php $result ?></span></p>
    </div>
</div>
    
</header>
<body>


</body>
</html>
