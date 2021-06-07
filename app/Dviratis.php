<?php


namespace DemoApp;


class Dviratis extends TransportoPriemone
{
    private $leidimasVaziuotiPesciujuTaku;

    public function __construct($modelis, $marke, $leidimasVaziuotiPesciujuTaku)
    {
        parent::__construct($modelis, $marke);

        $this->leidimasVaziuotiPesciujuTaku = $leidimasVaziuotiPesciujuTaku;
    }

    public function setLeidimas($leidimasVaziuotiPesciujuTaku)
    {
        return $this->leidimasVaziuotiPesciujuTaku = $leidimasVaziuotiPesciujuTaku;
    }


    public function getLeidimas(){
        return $this->leidimasVaziuotiPesciujuTaku;
}
}