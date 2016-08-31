
<?php
$conn = mysqli_connect("localhost","root","","qualitycarwash");
$Name = $_POST ["Name"];
$Email= $_POST ["Email"];
$Password = $_POST ["Password"];
$TelephoneNumber= $_POST ['TelephoneNumber'];
$PostCode = $_POST ['PostCode'];


//$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

//$saltedPW = $Password . $salt;

//$hashedPW = hash('sha256', $saltedPW);

$Password = md5($Password);
$query = "INSERT INTO tblcustomer VALUES  ('$Name','$Password','$Email','$TelephoneNumber','$PostCode','')";
 
$results = mysqli_query($conn , $query);
if  ($results)
{
echo "you are now registered with us!!!";
}
else
{
echo "you are now registered with us!!!";
}
mysqli_close($conn);
?>

<html>
<body  >
</body>
</html>