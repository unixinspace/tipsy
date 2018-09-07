<?php

//main.php

class drink{
    private $id;
    public $up;
    public $down;
    public $score;
    private $submitterid;
    public $submittername;
    
    function tally($id){
        //SQL for $up's
        $this->ups = 6;
        //SQL for $down's
        $this->downs = 2;
        $this->score = $this->ups - $this->downs;

