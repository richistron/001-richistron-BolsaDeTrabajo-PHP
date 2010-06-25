<?


if ( isset($_GET['View']) == FALSE )
{
    header("location: ?View=All");    
}
else
{
    $View = $_GET['View'];
    
    switch ($View)
    {
    
        case "All":
            $echo .= "
    
                
                <table>
                
                    <tr height=\"320px\">
                    
                        <td width=\"20%\" style=\"background: white url($root_img/consultoria_1.jpg) no-repeat;\">
                        
                        </td>
                        
                        <td width=\"80%\" style=\"background: white url($root_img/consultoria_2.jpg) no-repeat;\">
                        
                        </td>
                        
                    </tr>
                    
                    <tr>
                        
                        <td width=\"20%\">
                        
                        </td>
                        
                        <td width=\"80%\">
                        
                            <a href=\"?View=ProductosRelacionados\" 
                            onMouseover=\"Permut(1,'ProductosRelacionados');\" 
                            onMouseout=\"Permut(0,'ProductosRelacionados');\">
                            <img src=\"$root_img/productosinactivo.png\" 
                            border=0
                            NAME=\"ProductosRelacionados\" 
                            onLoad=\"preloadPermut(this,'$root_img/productosactivo.png');\" >
                            </a>
                        
                        </td>
                    
                    </tr>
                    
                    <tr>
                        
                        <td width=\"20%\">
                         
                        </td>
                        
                        <td width=\"80%\" height=\"125px\" style=\"background: 
                        white url($root_img/solicite.jpg) no-repeat;\" >
                        
                           
                        
                        </td>
                    
                    </tr>
                    
                    <tr>
                        
                        <td width=\"20%\">
                        
                        </td>
                        
                        <td width=\"80%\">
                        
                            <a href=\"$super_index/contact\" 
                            onMouseover=\"Permut(1,'contactanosinactivo');\" 
                            onMouseout=\"Permut(0,'contactanosinactivo');\">
                            <img src=\"$root_img/contactanosinactivo.png\" 
                            border=0
                            NAME=\"contactanosinactivo\" 
                            onLoad=\"preloadPermut(this,'$root_img/contactanosactivo.png');\" >
                            </a>
                        
                        </td>
                    
                    </tr>
                    
                    
                
                </table>
                
                ";
                break;
                
                
            case "ProductosRelacionados":
                $echo .= "               
                            
                            
                <table>                            
                           
                    
                    <tr height=\"610px\">
                    
                        <td width=\"20%\" style=\"background: white 
                        url($root_img/productos-relacionados_1.jpg) no-repeat;\">
                        
                        </td>
                        
                        <td width=\"80%\" style=\"background: white 
                        url($root_img/productos-relacionados_2.jpg) no-repeat;\">
                        
                        </td>
                        
                    </tr>
                    
                    <tr>
                        
                        <td width=\"20%\">
                        
                        </td>
                        
                        <td width=\"80%\">
                        
                            <a href=\"$super_index/contact\" 
                            onMouseover=\"Permut(1,'contactanosinactivo');\" 
                            onMouseout=\"Permut(0,'contactanosinactivo');\">
                            <img src=\"$root_img/contactanosinactivo.png\" 
                            border=0
                            NAME=\"contactanosinactivo\" 
                            onLoad=\"preloadPermut(this,'$root_img/contactanosactivo.png');\" >
                            </a>
                        
                        </td>
                    
                    </tr>
                    
                    
                
                </table>
                            
                
                ";
                break;
                
            default:
                break;
    }
}
?>
