<?php 

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
