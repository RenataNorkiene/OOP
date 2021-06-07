<?php
namespace DemoApp;

class Automobilis extends TransportoPriemone {
    private $bagazinesTuris;

    public function __construct($modelis, $marke, $bagazinesTuris)
    {
        parent::__construct($modelis, $marke);

        $this->bagazinesTuris = $bagazinesTuris;
    }

    public function setTuris($bagazinesTuris){
        return $this->bagazinesTuris = $bagazinesTuris;
    }

    public function getTuris(){
        return $this->bagazinesTuris;
    }

}