<?

if ( isset($_GET['Nosotros']) == FALSE )
{
    header("location: ?Nosotros=Mision");   
}
else
{
    $Nosotros = $_GET['Nosotros'];
    
    $echo .= "
    
                
                
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" frame=\"box\" >
                    
                        <tr>
                    
                            <td align=\"center\" >
                        
                                <a href=\"?Nosotros=Mision\" 
                            onMouseover=\"Permut(1,'mision');\" 
                            onMouseout=\"Permut(0,'mision');\">
                            <img src=\"$root_img/acerca/mision.jpg\" 
                            border=0
                            NAME=\"mision\" 
                            onLoad=\"preloadPermut(this,'$root_img/acerca/mision1.jpg');\" >
                            </a>
                                
                        
                            </td>
                            
                            <td align=\"center\" >
                        
                                <a href=\"?Nosotros=Vision\" 
                            onMouseover=\"Permut(1,'vision');\" 
                            onMouseout=\"Permut(0,'vision');\">
                            <img src=\"$root_img/acerca/vision.jpg\" 
                            border=0
                            NAME=\"vision\" 
                            onLoad=\"preloadPermut(this,'$root_img/acerca/vision1.jpg');\" >
                            </a>
                                
                        
                            </td>
                            
                            <td align=\"center\" >
                        
                                <a href=\"?Nosotros=Valores\" 
                            onMouseover=\"Permut(1,'valores');\" 
                            onMouseout=\"Permut(0,'valores');\">
                            <img src=\"$root_img/acerca/valores.jpg\" 
                            border=0
                            NAME=\"valores\" 
                            onLoad=\"preloadPermut(this,'$root_img/acerca/valores1.jpg');\" >
                            </a>
                                
                        
                            </td>
                            
                            <td align=\"center\" >
                        
                                <a href=\"?Nosotros=Historia\" 
                            onMouseover=\"Permut(1,'Historia');\" 
                            onMouseout=\"Permut(0,'Historia');\">
                            <img src=\"$root_img/acerca/historia.jpg\" 
                            border=0
                            NAME=\"Historia\" 
                            onLoad=\"preloadPermut(this,'$root_img/acerca/historia1.jpg');\" >
                            </a>
                                
                        
                            </td>
                            
                            
                            
                            
                
                        </tr>
                        
                    </table>
                
                ";
    
    switch($Nosotros)
    {
        case "Mision":
            $echo .= "
            
                        
                      <table>
                            
                            <tr height=\"380px\" >
                                <td width=\"20%\"  style=\"background: 
                                white url($root_img/mision_1.jpg) no-repeat;\">
        
            
            
        
                                </td>
                                <td width=\"80%\"  style=\"background: 
                                white url($root_img/mision_2.jpg) no-repeat;\">
        
            
            
                                </td>
                                
                            </tr>
                            
                        </table>
";
            break;
            
            case "Historia":
                $echo .= "
                            <table>
                            
                            <tr height=\"330px\" >
                                <td width=\"20%\"  style=\"background: 
                                white url($root_img/historia_1.jpg) no-repeat;\">
        
            
            
        
                                </td>
                                <td width=\"80%\"  style=\"background: 
                                white url($root_img/historia_2.jpg) no-repeat;\">
        
            
            
                                </td>
                                
                            </tr>
                            
                        </table>";
                break;
                
                
                case "Historia":
                    $echo .= "
                            <table>
                            
                            <tr height=\"330px\" >
                                <td width=\"20%\"  style=\"background: 
                                white url($root_img/historia_1.jpg) no-repeat;\">
        
            
            
        
                                </td>
                                <td width=\"80%\"  style=\"background: 
                                white url($root_img/historia_2.jpg) no-repeat;\">
        
            
            
                                </td>
                                
                            </tr>
                            
                        </table>";
                break;
                
                case "Valores":
                    $echo .= "
                            <table>
                            
                            <tr height=\"720px\" >
                                <td width=\"20%\"  style=\"background: 
                                white url($root_img/valores_1.jpg) no-repeat;\">
        
            
            
        
                                </td>
                                <td width=\"80%\"  style=\"background: 
                                white url($root_img/valores_2.jpg) no-repeat;\">
        
            
            
                                </td>
                                
                            </tr>
                            
                        </table>";
                break;
                
                case "Vision":
                    $echo .= "
                            <table>
                            
                            <tr height=\"250px\" >
                                <td width=\"20%\"  style=\"background: 
                                white url($root_img/vision_1.jpg) no-repeat;\">
        
            
            
        
                                </td>
                                <td width=\"80%\"  style=\"background: 
                                white url($root_img/vision_2.jpg) no-repeat;\">
        
            
            
                                </td>
                                
                            </tr>
                            
                        </table>";
                break;
        
        default:
            header("location: ?Nosotros=Mision");
            break;
    
    }
}

?>
