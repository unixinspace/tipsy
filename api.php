<?php 
require_once('main.php');

// Str: /point/sub
$point = $_GET['point'];
$sub = $_GET['sub'];
//$key = $_POST['key'];

if(!isset($point) || !isset($sub)){
    die("Invalid Request");
}


if($point == "read"){
    echo $sub;

}

if($point == "drink"){
    //echo 'json request here: '.$point . ' -> ' . $sub;
    if(is_numeric($sub)){
        $drink = new drink($sub);
        echo json_encode($drink);
    }
    else{
        if($sub == "random"){
            $r = rand(1,100);
            $nd = new drink($r);
            echo json_encode($nd);         
        }        
    }
}
