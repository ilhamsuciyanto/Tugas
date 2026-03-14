<?php

class Hewan {

    public function suara() {
        echo "Hewan mengeluarkan suara\n";
    }

}

class Kucing extends Hewan {

    public function suara() {
        echo "Meong\n";
    }

}

class Anjing extends Hewan {

    public function suara() {
        echo "Guk guk\n";
    }

}

$kucing = new Kucing();
$anjing = new Anjing();

$kucing->suara();
$anjing->suara();