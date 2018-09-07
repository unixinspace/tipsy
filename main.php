<?php

//main.php

class drink{
    private $id;
    public $up;
    public $down;
    public $score;
    private $submitterid;
    public $submittername;
    
    function __construct($id){
       //SQL for getting id, submitter name
        $this->id = $id;
        $this->ups = 6;
        $this->downs = 2;
        $this->score = $this->ups - $this->downs;  
        $this->submitterid = 1;
        $this->submittername = "Joe Blow";
        
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


}
