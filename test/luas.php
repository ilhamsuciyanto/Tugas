<?php

abstract class BangunDatar {
     abstract public function hitungLuas();
 public function tampilkanLuas() {
    echo get_class($this) . " - Luas: " . $this->hitungLuas() . "<br>";
 }
}

class Persegi extends BangunDatar {
private $sisi;
public function __construct($sisi) {
   $this->sisi = $sisi;
 }
 public function hitungLuas() {
    return $this->sisi * $this->sisi;
 }
}

class Lingkaran extends BangunDatar {
 private $jariJari;
 public function __construct($jariJari) {
    $this->jariJari = $jariJari;
 }
 public function hitungLuas() {
    return M_PI * $this->jariJari * $this->jariJari;
 }
}
class Segitiga extends BangunDatar {

 private $alas;
 private $tinggi;
     public function __construct($alas, $tinggi) {
    $this->alas = $alas;
    $this->tinggi = $tinggi;
 }
 public function hitungLuas() {
    return 0.5 * $this->alas * $this->tinggi;
}
}
$persegi = new Persegi(6);
$lingkaran = new Lingkaran(10);
$segitiga = new Segitiga(8, 6);
$persegi->tampilkanLuas();
$lingkaran->tampilkanLuas();
$segitiga->tampilkanLuas();