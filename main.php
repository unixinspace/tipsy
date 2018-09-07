<?php

//main.php

class drink{
    public $id;
    public $up;
    public $down;
    public $score;
    private $submitterid;
    public $submittername;
    
    function __construct($id){
       //SQL for getting id, submitter name
        $this->id = $id;
        $this->up = 6;
        $this->down = 2;
        $this->score = $this->up - $this->down;  
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
