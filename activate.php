<?php 
include 'database.php';
if(isset($_GET['vkey']))
{$code = $_GET['vkey'];
$q="SELECT * from users where `token`='$code'";
$res=mysqli_query($conn,$q);
$row=mysqli_num_rows($res);
if($row>0)
{
	$up="UPDATE users set `isemailconfirmed`='1' where `token`='$code'";
	mysqli_query($conn,$up);
	echo "your email is verified now you can login";
}
}
else
echo "sorry code not found";

?>