<?php 
/*
 * Saca Borrachos
 */

if ( $user->uid == 0 )
{
	$aviso = "noRegistrado";
	
	include "/$home/vistas/avisos.inc.php";
	
	return;
}

switch ( "Vista" )
{
	case (isset($_POST['8a77ccd39afcaa4b91c20aed7857168a'])):
		include "/$home/etc/bolsa_vars.inc.php";
		break;
		
	case (isset($_POST['ba3fedde7e2cba279045b8fa0a03e494'])):
	    include "/$home/etc/bolsa_vars2.inc.php";
	    break;
	    
    case (isset($_POST['eacff088bbdf0de8473fad81c45c4a07'])):
		include "/$home/etc/bolsa_vars3.inc.php";
		break;
		
	case (isset($_POST['895dc46f5e8ff4efc2fa5511435371d1'])):
	    include "/$home/etc/bolsa_vars4.inc.php";
	    break;
	    
    case (isset($_POST['5e010f4eed331e0f83ace37e7ec8745d'])):
        include "/$home/etc/bolsa_vars5.inc.php";
        break;
		
	default:
		include "/$home/etc/bolsa_rows.inc.php";
		break;
}

?>
<script type="text/javascript">
   checkAuthUni('','')
   </script>
