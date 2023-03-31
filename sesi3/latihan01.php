<?php

    $cars = array("Nissan", "BMW", "Lamborghini");

    $jmldata = count($cars);
    echo "Jumlah Data : ". $jmldata . "<br>";

    for($i=0;$i<3;$i++){
        echo "<br>Sport Cars ", $cars [$i];
    }

    echo "<hr>";

    echo "<ol class=\"mobil\">";
    foreach($cars as $data){
        echo "<li>Sport Cars". $data . "</li>";
    }
    echo "</ol>";