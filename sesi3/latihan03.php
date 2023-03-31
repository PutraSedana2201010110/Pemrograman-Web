<?php

    $mhs = array(
        array("NAMA"=>"Upin","ID"=>"1234","KOTA"=>"Durian Runtuh"),
        array("NAMA"=>"TokDalang","ID"=>"5678","KOTA"=>"Durian Runtuh"),
        array("NAMA"=>"Fizi","ID"=>"7789","KOTA"=>"Durian Runtuh"),
        array("NAMA"=>"KakRos","ID"=>"8899","KOTA"=>"Durian Runtuh"),
    );

    // echo $mhs[1]["NAMA"];
    // echo "<hr>";
    // print_r($mhs);
    // echo "<hr>";

/*     foreach($mhs as $data){
        foreach ($data as $lb => $nval){
            echo $lb . " : " . $nval . "<br>";
        }

        echo "<br>";

    } */

    header("Content-type: application/json");
    echo json_encode($mhs);