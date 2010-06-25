<?

$echo .= "<p id=\"up\"> ";

for ( $init = 4; $init >= 1; $init-- )
{
    $echo .= "
                <p>  
                <table>
                    <tr class=\"odd\"> 
                        <td>
                            <h$init> Sample Text </h$init> 
                        </td>
                    </tr>
                    <tr class=\"even\"> 
                        <td>
                            <h$init> Sample Text </h$init> 
                        </td>
                    </tr>
                </table>
                
<h1>The main heading</h1>
<h2>A subheading</h2>
<p>ra ra ra ra ra</p>
<h2>Another subheading</h2>

<ul>
	<li>This</li>
	<li>That</li>
	<li>The other</li>
</ul>

<p><a href=\"#up\">Link to go up</a></p>
<p><a href=\"#abajo\"\>Link to go down</a></p>
              
              <button id=\"boton up\">Click Me!</button>     
              </p>          
                ";
}
$echo .= "
            <p id=\"abajo\"> <h1>Textos de Muestra para Unilabor.com.mx</h1></p>
            ";
?>
