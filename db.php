<?php
$db = new MySqli;
$db->connect('localhost','root','','crud');
if($db){
    echo "success";
}

?>