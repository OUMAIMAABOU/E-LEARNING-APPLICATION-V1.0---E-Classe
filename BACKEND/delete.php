<?php
 
    $id = $_GET['id'];
 
    $data = file_get_contents('data.json');
    $json = json_decode($data);
 
    unset($json[$id]);
 
    $json = json_encode($json, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $json);
 
    header('location: student.php');
?>