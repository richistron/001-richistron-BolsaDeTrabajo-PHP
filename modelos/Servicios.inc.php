<?


if ( $_GET['Service'] == NULL )
{
    header ("location: ?Service=ALL");
}
else
{
    $Service = $_GET['Service'];
    include "/$home/etc/service_lib.inc.php";
}

switch ($Service)
{

    case "Bester":
        $echo .= $Bester;
        break;
        
    case "External":
        $echo .= $External;
        break;
        
      
    case "AddTools":
        $echo .= $AddTools;
        break;
    
    case "Solutions":
        $echo .= $Solutions;
        break;
    
    case "Side":
        $echo .= $Side;
        break;
    
    case "MetodoU":
        $echo .= $MetodoU;
        break;
        
    default:
        $echo .= $Bester;
        $echo .= $AddTools;
        $echo .= $External;
        $echo .= $Solutions;
        $echo .= $Side;
        $echo .= $MetodoU;
        break;
}

?>
