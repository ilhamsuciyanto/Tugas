<?php

interface Notifikasi {
    
 public function kirim($pesan);
}

class Email implements Notifikasi {

 private $emailtujuan;
    public function __construct($emailTujuan) {
    $this->emailtujuan = $emailTujuan;
    
 }
 public function kirim($pesan) {
    echo 'Notifikasi dikirim melalui Email';
    echo ' ke ' . $this->emailtujuan
    .    ': ' . $pesan . '<br>';
 }
}
// Implementasi: SMS
class SMS implements Notifikasi {
 private $nomortujuan;
     public function __construct($nomortujuan) {
        $this->nomorTujuan = $nomortujuan;
 }
 
public function kirim($pesan) {
     echo 'Notifikasi dikirim melalui SMS';
        echo ' ke ' . $this->nomortujuan
         . ': ' . $pesan . '<br>';
 }
}

class WhatsApp implements Notifikasi {
    private $nomorWA;
 public function __construct($nomorWA) {
        $this->nomorWA = $nomorWA;

 }
 public function kirim($pesan) {
 echo 'Notifikasi dikirim melalui whatsapp';
        echo ' ke ' . $this->nomorWA
 . ': ' . $pesan . '<br>';
 }
}

$n1 = new Email('muhammadilhams12@gmail.com');
$n2 = new SMS('08965254324');
$n3 = new WhatsApp('08892343562');
$pesan = 'Pesanan Anda telah dikonfirmasi.';
$n1->kirim($pesan);
$n2->kirim($pesan);
$n3->kirim($pesan);