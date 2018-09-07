<?php 
require_once('main.php');

// Str: /point/sub
$point = $_GET['point'];
$sub = $_GET['sub'];
$key = $_POST['key'];

if(!isset($point) || !isset($sub)){
    die("Invalid Request");
}


if($point == "read"){
    echo $sub;

}

if($point == "drink"){
    echo 'json request here: '.$point . ' -> ' . $sub;
    $drink = new drink(1);
    var_dump($drink);
}
