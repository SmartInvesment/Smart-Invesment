<?php
$username = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];



$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);

}else{

$stmt =$conn->prepare("insert into feedback(username,email,feedback)
values(?,?,?)");
$stmt->bind_param("sss",$username,$email,$feedback);
$stmt->execute();
echo "Feedback send sucessfully";
$stmt->close();
$conn->close();

}

?>