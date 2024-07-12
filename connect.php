<?php
$hostname = "sql213.infinityfree.com";
$username = "if0_36886922";
$password = "1gn1vsUKRyZyAW";
$db_name = "if0_36886922_asesmen";

$db = new mysqli($hostname, $username,$password,$db_name);
if($db->connect_error){
    echo "error";
}


?>