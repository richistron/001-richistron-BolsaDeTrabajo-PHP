<?

switch ($aviso)
{

    case "noRegistrado":    
        $echo .= "
    
                <div class=\"warning\">
                    <strong>
                        <p>
                            Solo los usuarios registrados pueden hacer uso de este servicio exlucivo de unilabor !!
                        </p>
                    </strong>
                </div>
                ";
        break;
        
    default :
        break;
}                
?>
