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
     }

     function Error(){
        
     }
}
?>