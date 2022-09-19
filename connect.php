<?php
$review = $_POST['notes'];

$conn =new mysqli('localhost','root','','test');
if(!$conn->mysqli_connect_error){
die('Connection Error: '. $conn->connect_error);
} else{
$stmt = $conn->prepare("insert into user_review(notes) values(?)");
$stmt = bind_param("s",$review);
$stmt->execute();
echo "submited succsfully";
$stml->close();
$conn->close();
}
?>
