<?
define("HOMEROOT","/home/unilabor/inc/");
require_once(HOMEROOT."etc/globals.inc.php");
require_once(HOMEROOT."etc/mysqli.inc.php");
require_once(HOMEROOT."vistas/js/main.inc.php");
if(file_exists(HOMEROOT."modelos/$modelo.inc.php"))
{
    include HOMEROOT."modelos/$modelo.inc.php";
    include HOMEROOT."vistas/echo.inc.php";
}
else
{
    ?>
            <div class="error"> 
             No existe una vista llamda <? echo $modelo; ?>
            </div>

    <?
}
?>
