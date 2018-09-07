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
       //SQL for getting id, submitter name
        $this->id = $id;
        $this->up = 6;
        $this->down = 2;
        $this->score = $this->up - $this->down;  
        $this->submitterid = 1;
        $this->submittername = "Joe Blow";
        $this->type = 0;
      //  $this->served = 0;
        
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
    function __construct($id){
        $this->id = $id;
    }

}

class workplace{

}
