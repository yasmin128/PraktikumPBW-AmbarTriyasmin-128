<?php

$conn = new mysqli('localhost', 'root', '', 'db_tp11');


if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}

?>