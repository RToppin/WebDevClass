<?php

$db_host = "elvisdb.rowan.edu";
$db_name = "toppin22";
$db_user = "toppin22";
$db_pass = "142LoveDatabases!!";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()){
                echo mysqli_connect_error();
                exit;
}