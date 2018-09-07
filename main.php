<?php
require_once("sql.php");
//main.php



$types = array("Shot", "Tall drink", "Rocks glass");
//$served = array();

class drink{
    public $id;
    public $up;
    public $down;
    public $score;
    public $submitterid;
    public $submittername;
    public $type;
    public $contents;
  //  public $served;    

    function __construct($id){
       global $conn;
        $constrq = "SELECT * FROM `drinks` WHERE `id` = $id";
        $res = $conn->query($constrq);
        if($res->num_rows > 0){
            $rowa = $res->fetch_assoc();
            $row = $rowa;
            $this->id = $row['id'];
            $this->up = $row['up'];
            $this->down = $row['down'];
            $this->score = $this->up - $this->down;  
            $this->submitterid = $row['submitter'];
            $this->submittername = new mixy($this->submitterid);
            $this->type = $row['type'];
        }

     
     
    }

    //tally called on refresh, after vote, etc.
    function tally($id){
        //SQL for $up's
        $this->ups = 6;
        //SQL for $down's
        $this->downs = 2;
        $this->score = $this->ups - $this->downs;
    }
}

class mixy{
    public $id;
    public $username;
    public $displayname;
    public $mixbool;
    function __construct($id){
        $this->id = $id;
        global $conn;
        $constrq = "SELECT * FROM `users` WHERE `id` = $id";
        $res = $conn->query($constrq);
        if($res->num_rows > 0){
            $row = $res->fetch_assoc();
            $this->username = $row['username'];
            $this->displayname = $row['displayname'];
            $this->mixbool = $row['user'];
        }
    }

}

class workplace{

}
