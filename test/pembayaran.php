<?php
# Contoh Implementasi Interface
interface Pembayaran {

    public function prosesPembayaran();

}

# Contoh Implementasi Class
class TransferBank implements Pembayaran {
    public function prosesPembayaran() {
        echo "Pembayaran melalui Transfer Bank";
    }


}

class EWallet implements Pembayaran {
  
    public function prosesPembayaran() {
        echo "Pembayaran melalui E-Wallet";
    }

}

class KartuKredit implements Pembayaran {
    public function prosesPembayaran() {
        echo "Pembayaran melalui Kartu Kredit";
    }
}

# Contoh Pemanggilan
$p1 = new TransferBank();
$p2 = new EWallet();
$p3 = new KartuKredit();

$p1->prosesPembayaran();
echo "<br>";

$p2->prosesPembayaran();
echo "<br>";

$p3->prosesPembayaran();
?>