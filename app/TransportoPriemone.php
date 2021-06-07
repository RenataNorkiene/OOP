<?php


namespace DemoApp;


class TransportoPriemone{
    private $modelis;
    private $marke;
    private $kaina;
    private $svoris;
    private $variklis;
    private $galia;
    private $maxGreitis;
    private $aprasymas;
    private $vietuSkaicius;

    public function __construct($modelis, $marke) //kvieciamas visada inicijuojant objekta jeigu yra sukuriamas klases viduje
    {
        $this->modelis = $modelis;
        $this->marke = $marke;

    }
    public function __toString(){
        return $this->modelis;
    }
    public function setKaina($kaina){
        $this->kaina = $kaina;
    }
    public function setSvoris($svoris){
        $this->svoris = $svoris;
    }
    public function setVariklis($variklis){
        $this->variklis = $variklis;
    }
    public function setGalia($galia){
        $this->galia = $galia;
    }
    public function setMaxGreitis($maxGreitis){
        $this->maxGreitis = $maxGreitis;
    }
    public function setAprasymas($aprasymas){
        $this->aprasymas = $aprasymas;
    }
    public function setVietuSkaicius($vietuSkaicius){
        $this->vietuSkaicius = $vietuSkaicius;
    }



    public function  showInfo(){
        return [
            $this->modelis,
            $this->marke,
            $this->kaina,
            $this->svoris,
            $this->variklis,
            $this->galia,
            $this->maxGreitis,
            $this->aprasymas,
            $this->vietuSkaicius
        ];
    }

}
