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
     function showEditarViaje($viaje) {
      require_once 'templates/header.phtml';
      echo "<form method='POST' action='" . BASE_URL . "update'>
              <input type='hidden' name='id' value='$viaje->ID_viaje'>
              <label>Origen:</label>
              <input type='text' name='origen' value='$viaje->origen' required>
              <label>Destino:</label>
              <input type='text' name='destino' value='$viaje->destino' required>
              <label>Fecha:</label>
              <input type='date' name='fecha' value='$viaje->fecha' required>
              <label>Hora:</label>
              <input type='time' name='hora' value='$viaje->hora' required>
              <button type='submit'>Actualizar</button>
            </form>";
         }
}
?>