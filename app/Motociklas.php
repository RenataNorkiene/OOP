<?php


namespace DemoApp;


class Motociklas extends TransportoPriemone
{
    private $ratuSkaicius;

    public function __construct($modelis, $marke, $ratuSkaicius)
    {
        parent::__construct($modelis, $marke);

        $this->ratuSkaicius = $ratuSkaicius;
    }

    public function setRatuSkaicius($ratuSkaicius)
    {
        return $this->ratuSkaicius = $ratuSkaicius;
    }

    public function getRatuSkaicius(){
        return $this->ratuSkaicius;
    }


}