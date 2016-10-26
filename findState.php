<!-- ==============================================
//  Created by PHP Dev Zone           			 ||
//	http://php-dev-zone.com                      ||
//  Contact for any Web Development Stuff        ||
//  Email: ketan32.patel@gmail.com     			 ||
//=============================================-->


<?php $country=intval($_GET['country']);
$con = mysql_connect('localhost', 'root', ''); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('test');
$query="SELECT id,statename FROM state WHERE countryid='$country'";
$result=mysql_query($query);

?>
<select name="state" onchange="getCity(<?php echo $country?>,this.value)">
<option>Select State</option>
<?php while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['statename']?></option>
<?php } ?>
</select>
