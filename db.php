<?php
//connet with database
$conn = new mysql("localhost","root","","login-project");

if($conn->connect_error){
    die("connection failed");
}

?>