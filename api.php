<?php 

// Str: /point/sub
$point = $_GET['point'];
$sub = $_GET['sub'];
$key = $_POST['key'];

if(null($point) || null($sub)){
    die("Invalid Request");
}


if($point == "read"){
    echo $sub;
}
