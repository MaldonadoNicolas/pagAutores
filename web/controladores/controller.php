<?php

class MvcController{

    #LLAMADA A LA PLANTILLA//invoca el archivo que contiene el html
    public function plantilla(){
        include "web/vistas/template.php";
    }

    #INTERACCION DEL USUARIO
    public function enlacesPaginasController(){
        
        if(isset($_GET["action"])){
            $enlacesController = $_GET["action"];
        }
        else
        {
            $enlacesController = "index";
        }

        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        
        include $respuesta;
    }
}
?>