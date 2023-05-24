<?php
class Bola {
    private $jari;
  
    public function __construct($jari) {
      $this->jari = $jari;
    }
  
    public function hitungVolume() {
      return (4/3) * 3.14 * pow($this->jari, 3);
    }
}

$bola = new Bola(5);
$volumeBola = $bola->hitungVolume();
echo "Volume Bola: " . $volumeBola;