<?php

class ViajeView{

     function ShowViaje($viaje){
        require_once 'templates/header.phtml';
        require_once 'templates/home.phtml';

        echo  "<ul>";
        foreach($viaje as $viajes){
            echo "<li>;
            $viajes -> origen | $viajes -> destino | $viajes -> hora | $viajes -> fecha
            <a class='btn-eliminar' href='eliminar/$viajes->id'>ELIMINAR</a>
            echo </li>";
        } 
        echo "</ul>";

        require_once 'templates/footer.phtml';
     }

     function Error($msg){
        echo "<h1> ERROR </h1>";
        echo "<h2>" .$msg . "</h2>";
     }
}
?>