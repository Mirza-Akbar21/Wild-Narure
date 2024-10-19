<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful";
} else {
    echo "No Connection";
}

mysqli_select_db($con, 'custom_website_db');

$user = $_POST['user'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$query = " insert into comments (user, email, comments)
values ('$user', '$email', '$comments')";

mysqli_query($con, $query);

header('location:index.php');



?>