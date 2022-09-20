<?php
$note = $_GET['note'];
$conn= new mysqli("localhost","root","","share");
$stmt = $conn->prepare("insert into shares(answer) values(?)");
$stmt->bind_param("s",$note);
$stmt->execute();
echo "submited succsfully";
$stml->close();
$conn->close();
?>
