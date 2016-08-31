<?php
$conn = mysqli_connect("localhost","root","","qualitycarwash");
$ContactPerson = $_POST ["ContactPerson"];
$ContactEmail = $_POST ["ContactEmail"];
$Time = $_POST ["Time"];
$Date = $_POST ["Date"];
$ServiceName= $_POST ['ServiceName'];






$query = "INSERT INTO booking VALUES  ('','$ContactPerson','$ContactEmail','$Time','$ServiceName','$Date','pending')";

$results = mysqli_query($conn , $query);
if  ($results)
{
$Message = "Your booking has been submited to the web site and you will soon get a confirmation email";
echo "Posted successfully!!!";
// mail($Email,"Booking Request",$Message);
}
else
{
echo "try again ,not successful";
}
mysqli_close($conn);
?>

<html>
<body>
</body>
</html>