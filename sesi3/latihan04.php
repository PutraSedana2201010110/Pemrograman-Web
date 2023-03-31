<?php

    function TentangAplikasi(){
        echo "<h3> Aplikasi APASaja</h3>";
        echo "<sup>versi 1.0</sup>";
    }

    function Cetaklabel01($tx){
        echo "Isi Label : ".$tx;
    }

    function Cetaklabel02($tx="Isikan label"){
        echo "Isi Label : ".$tx;
    }

    function jumlahkan($angka1=0, $angka2=0){
        return $angka1+$angka2;
    }