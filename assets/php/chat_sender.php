<?php
include_once "db.php";
$message = $_POST["message"];
$sender = $_POST["sender"];
$reciver = $_POST["reciver"];

$sql = "INSERT INTO `chat`(`Sno`, `Receiver`, `Sender`, `Message`, `Isactive`) VALUES (NULL,'$reciver','$sender','$message',1)";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location: chat-box.php?u=".$reciver);
}
?>