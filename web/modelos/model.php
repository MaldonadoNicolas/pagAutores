<?php

class EnlacesPaginas{

	public static function enlacesPaginasModel($enlacesModel){
		//vistas
		if($enlacesModel == "nuevo" || 
           $enlacesModel == "gestion" ||
           $enlacesModel == "actualizar"){
		   $module = "web/vistas/".$enlacesModel.".php";

		}else{
			//controladores
			if ($enlacesModel == "presupuesto_Controller" ||
			   $enlacesModel == "" ||
			   $enlacesModel == "" ||
			   $enlacesModel == "" ||
			   $enlacesModel == "" ||
			   $enlacesModel == "" ) {
			   $module = "web/controlador/".$enlacesModel.".php";
			}
			elseif($enlacesModel == "index" ){

				$module = "web/vistas/inicio.php";
			}
			else{

				$module = "web/vistas/inicio.php";
			}
		}
		return $module;

	}

}


?>