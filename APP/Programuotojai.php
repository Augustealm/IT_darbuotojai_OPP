<?php
namespace MYAPP;

class Programuotojai extends Visi_darbuotojai{
    private $pareigos;
    private $projektas;

    public function __construct($vardas, $pavarde, $atlyginimas, $pareigos, $projektas)
    {
        parent::__construct($vardas, $pavarde, $atlyginimas);
        $this->pareigos = $pareigos;
        $this->projektas = $projektas;
    }

    /**
     * @return mixed
     */
    public function getPareigos()
    {
        return $this->pareigos;
    }

    /**
     * @param mixed $pareigos
     */
    public function setPareigos($pareigos)
    {
        $this->pareigos = $pareigos;
    }

    /**
     * @return mixed
     */
    public function getProjektas()
    {
        return $this->projektas;
    }

    /**
     * @param mixed $projektas
     */
    public function setProjektas($projektas)
    {
        $this->projektas = $projektas;
    }

}
