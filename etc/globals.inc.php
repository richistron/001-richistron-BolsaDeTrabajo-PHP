<?

// home del los modulos

$cliente_ss = $_SERVER['HTTP_USER_AGENT'] . "\n\n";
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$super_index = ' http://'.$host.''.$uri.'';

$home = "";

$root_img = "";

# $mysqli_connect new mysqli connection

// variable general para todas las vistas
$echo = "";

// usuario

global $user;

//$echo .= "".$user->uid."";


?>
