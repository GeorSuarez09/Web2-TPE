<?php

class ViajeView{

     function getViaje($viaje){
        require_once 'templates/header.phtml';
        require_once 'templates/home.phtml';

        echo  "<ul>";
        foreach($viajes as $viaje){
            echo "<li>;
            $viaje -> origen | $viaje -> destino | $viaje -> hora | $viaje -> fecha
            <a class='btn-eliminar' href='eliminar/$viaje->id'>ELIMINAR</a>
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