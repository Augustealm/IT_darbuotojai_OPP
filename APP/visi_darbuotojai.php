<?php
namespace MYAPP;

class Visi_darbuotojai{
    private $vardas;
    private $pavarde;
    private $atlyginimas;


    public function __construct($vardas, $pavarde, $atlyginimas)
    {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->atlyginimas = $atlyginimas;
    }

    /**
     * @return mixed
     */
    public function getVardas()
    {
        return $this->vardas;
    }

    /**
     * @param mixed $vardas
     */
    public function setVardas($vardas)
    {
        $this->vardas = $vardas;
    }

    /**
     * @return mixed
     */
    public function getPavarde()
    {
        return $this->pavarde;
    }

    /**
     * @param mixed $pavarde
     */
    public function setPavarde($pavarde)
    {
        $this->pavarde = $pavarde;
    }

    /**
     * @return mixed
     */
    public function getAtlyginimas()
    {
        return $this->atlyginimas;
    }

    /**
     * @param mixed $atlyginimas
     */
    public function setAtlyginimas($atlyginimas)
    {
        $this->atlyginimas = $atlyginimas;
    }

}

