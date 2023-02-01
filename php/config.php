<?php
$conn = mysqli_connect("localhost", "root", "1234", "chat_system");
if($conn){
    echo "database connected" . mysqli_connect_error();
}
?>