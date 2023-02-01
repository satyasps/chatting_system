<?php
include_once "config.php";
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$phoneno = mysqli_real_escape_string($conn, $_POST['phoneno']);
$emailid = mysqli_real_escape_string($conn, $_POST['emailid']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$secure_question = mysqli_real_escape_string($conn, $_POST['secure_question']);
$answer = mysqli_real_escape_string($conn, $_POST['answer']);

if(!empty(firstname) && !empty(lastname) && !empty(gender) && !empty(phoneno) && !empty(emailid) && !empty(password) && !empty(secure_question) && !empty(answer)){
    if (filter_var($emailid, FILTER_VALIDATE_EMAIL)){
        
    } else {
        echo "$emailid - This is not a valid email id";
    }
} else{
    echo "All inputs fields are required";
}
?>