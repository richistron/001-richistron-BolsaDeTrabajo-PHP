<?

// incluye todas las globales que se utilizan
include "etc/globals.inc.php";


switch ($modelo)
{
    case "pruebas":
        include $include;
        break;
        
    case "botonera":
        include $include;
        break;
        
    case "botonera_lateral":
        include $include;
        break;
        
    case "Bolsa":
        include $include;
        break;
        
    case "Inicio":
        include $include;
        break;
        
    case "Acerca":
        include $include;
        break;
        
    case "Servicios":
        include $include;
        break;
        
    case "Consultores":
        include $include;
        break;
        
    case "Miembros":
        include $include;
        break;
        
    case "BolsaAdd":
        include $include;
        break;   
        
    case "Botonera_Curriculum":
        include $include;
        break; 
             
    default:
        $echo .= "<div class=\"error\">No se ha seleccionado nigun tipo de vista</div>";
        break;
}

include "vistas/echo.inc.php";
?>
