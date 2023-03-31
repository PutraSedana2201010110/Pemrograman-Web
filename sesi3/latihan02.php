<?php
    $age = array("Peter"=>"35", "Pablo"=>"37","Jordi"=>"43",);

    echo "Umur dari Pablo ".$age["Pablo"]. "tahun<br>";

    echo "<hr>";

    foreach($age as $nama=> $umur){
        echo "Umur dari ". $nama. " : " . $umur . "<br>";
    }