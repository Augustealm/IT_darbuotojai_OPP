<?php
namespace MYAPP;

class Testuotojai extends Visi_darbuotojai{
    private $testavimo_tipas;

    public function __construct($vardas, $pavarde, $atlyginimas, $testavimo_tipas)
    {
        parent::__construct($vardas, $pavarde, $atlyginimas);
        $this->testavimo_tipas = $testavimo_tipas;
    }

    /**
     * @return mixed
     */
    public function getTestavimoTipas()
    {
        return $this->testavimo_tipas;
    }

    /**
     * @param mixed $testavimo_tipas
     */
    public function setTestavimoTipas($testavimo_tipas)
    {
        $this->testavimo_tipas = $testavimo_tipas;
    }


}