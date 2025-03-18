<?php
/**
 * class lingkaran
 */
class Lingkaran {
    /**
     * property jari-jari
     * @var float
     */
    public $jari;
    /**
     * property PHI
     * @var float
     */
    public const PHI = 3.14;

    public function __construct($jari) {
        $this->jari = $jari;
    }

    public function getluas(){
        $luas = self::PHI * $this->jari * $this->jari;
        return $luas;
    }
    /**
     * method menghitung keliling lingkaran
     * @return float
     */
    public function getkeliling(){
        $keliling = 2.0 * self::PHI * $this->jari;
        return $keliling;
    }
    public function cetak(){
        echo "Lingkaran dengan jari-jari".$this->jari;
        echo "<br>luas =".$this->getluas();
        echo"<br>keliling=".$this->getkeliling();
    }
}