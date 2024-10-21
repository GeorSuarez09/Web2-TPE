<?php

class ViajeView {
  /*  function ShowHome(){
        echo "Cargo pagina de inicio";
        require_once './templates/header.phtml';
        require_once './templates/footer.phtml';
    }*/
    function ShowViaje($viajes) {
        if (empty($viajes)) {
            echo "<p>No hay viajes disponibles.</p>";
        } else {
            require_once './templates/viaje/formlistar.phtml';  // Use the appropriate template
        }
    }

   /* function Error($msg) {
        echo "<h1>ERROR</h1>";
        echo "<h2>$msg</h2>";
    }

    function showEditarViaje($viajes) {
        require_once './templates/viaje/formeditar.phtml';  //  cargamos el formulario de edición
    }

    function showEliminarViaje($viajes) {
        require_once './templates/viaje/formdelete.phtml';  //  cargamos el formulario de eliminación
    }*/
 }
?>