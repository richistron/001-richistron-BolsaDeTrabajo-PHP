<?

// incluye todas las globales que se utilizan
include "etc/globals.inc.php";




switch ($modelo)
{
    case "BolsaAdd": // Inteligente ( Añadir curriculum )
        include $include;
        break;
        
    case "popup":  
        include $include;
        break;
        
    case "pruebas": // solo preubas
        include $include;
        break;
        
    case "botonera": // no envia mensajes
        include $include;
        break;
        
    case "botonera_lateral": // no envia mensajes
        include $include;
        break;
        
    case "Botonera_Curriculum": // // no envia mensajes
        include $include;
        break;              
        
    case "Bolsa": // inteligente
        include $include;
        break;
        
    case "Inicio": // informativo
        include $include;
        break;
        
    case "Acerca": // informativo
        include $include;
        break;
        
    case "Servicios": // informativo
        include $include;
        break;
        
    case "Consultores": // informativo
        include $include;
        break;
        
    case "Miembros": // informativo
        include $include;
        break;       
     
        
    
    default:
        $echo .= "<div class=\"error\">No se ha seleccionado nigun tipo de vista</div>";
        break;
}

include "vistas/echo.inc.php";
?>
