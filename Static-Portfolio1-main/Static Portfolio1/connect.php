
<?php
$fullname =$_POST['fullname'];
$email =$_POST['email'];
$number =$_POST['number'];
$message =$_POST['message'];
//database connection
$conn = new mysqli ('localhost','root','','portfolio');
if($conn->connect_error)
{ 
//echo "$conn->connect_error";
die('connection failed : ' .$conn->connect_error);
}
else{
$stmt=$conn->prepare("insert into contact(fullname, email, number, message)
values(?, ?, ?, ?)");
$stmt->bind_param("ssis", $fullname, $email, $number, $message);
$stmt->execute();
echo "connection successfully............";
$stmt->close();
$conn->close();
}
?>





