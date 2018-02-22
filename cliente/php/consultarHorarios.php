<?php

    include "conexion.php";
    $result = mysqli_query($con, "SELECT * FROM rutas");
     while ($ruta = $result->fetch_array()) {
     	echo $ruta['id_ruta'];
     	
     }
   



    /*if (mysqli_num_rows($result)) {
        $ruta = $result->fetch_assoc();        
        echo $ruta['id_ruta'];
        echo 
        
    } else {
        print "<script>alert(\"No se encontrtaron los datos.\")</script>";
        return '';
    }
*/
