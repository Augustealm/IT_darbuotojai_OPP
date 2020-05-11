<?php
namespace MYAPP;

class Vadovai extends Visi_darbuotojai {
    private $pavaldiniu_skaiciu;

    public function __construct($vardas, $pavarde, $atlyginimas, $pavaldiniu_skaiciu)
    {
        parent::__construct($vardas, $pavarde, $atlyginimas);
        $this->pavaldiniu_skaiciu = $pavaldiniu_skaiciu;
    }

    static function pavaldiniu_sumazinimas($pavaldiniai) {
        return round($pavaldiniai - 10);
    }

    /**
     * @return mixed
     */
    public function getPavaldiniuSkaiciu()
    {
        return $this->pavaldiniu_skaiciu;
    }

    /**
     * @param mixed $pavaldiniu_skaiciu
     */
    public function setPavaldiniuSkaiciu($pavaldiniu_skaiciu)
    {
        $this->pavaldiniu_skaiciu = $pavaldiniu_skaiciu;
    }

}

echo "Sumažintas pavaldinių skaičius: " . Vadovai::pavaldiniu_sumazinimas(500);
echo "<br>";
echo "<br>";

