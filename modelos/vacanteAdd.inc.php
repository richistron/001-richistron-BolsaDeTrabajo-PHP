<?
/*
CREAR TABLAS
$sqldb = "

CREATE TABLE IF NOT EXISTS `unilabor_cms`.`00_vacantes` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
`Nombre` VARCHAR(30) NOT NULL, `Empresa` VARCHAR(50) NOT NULL, 
`Descripcion` VARCHAR(500) NOT NULL, 
`Ciudad` VARCHAR(50) NOT NULL, 
`fechapub` VARCHAR(30) NOT NULL, 
`status` VARCHAR(30) NOT NULL, 
`pubby` VARCHAR(10) NOT NULL, 
INDEX (`pubby`)
) 
ENGINE = MyISAM  CHARACTER SET utf8 COLLATE utf8_general_ci

";

if($result_query = $mysqli_connect->query($sqldb))
{
    echo "se inserto";
}
else
{
    echo "no se inserto";
}

*/
function insertarVacante($NombreF, $EmpresaF, $DescripcionF, $CiudadF, $statusF, $pubbyF)
{

    $fechapubF = time();
    $sqldb2 = "


        INSERT INTO `unilabor_cms`.`00_vacantes` (
        `id` ,
        `Nombre` ,
        `Empresa` ,
        `Descripcion` ,
        `Ciudad` ,
        `fechapub` ,
        `status` ,
        `pubby`
        )
        VALUES (
        '', 
        '$NombreF', 
        '$EmpresaF', 
        '$DescripcionF', 
        '$CiudadF', 
        '$fechapubF', 
        '$statusF', 
        '$pubbyF'
        )
    
    
    ";
 $connect = new mysqli("mysql.unilabor.com.mx", "unilabor_cms", "yshTENSJ224", "unilabor_cms");
    if($result_query2 = $connect->query($sqldb2))
    {
        echo "<div class=\"ok\">Se inserto la vacante XD !!</div>";
        ?>
        <script type="text/javascript">
        alert('Se inserto la Vacante')
        document.location='http://www.unilabor.com.mx/vacantes'
        </script>
        <?
        return true;
    }
    else
    {
        echo "<div class=\"error\">Fallo el query ¬_¬'oO0 </div>";
        return false;
    }
}

if($_POST['addVacanteSubmit'])
{
    $Nombre = $_POST['Nombre'];
    $Empresa = $_POST['Empresa'];
    $Descripcion = $_POST['Descripcion'];
    $Ciudad = $_POST['Ciudad'];
    $status = $_POST['status'];
    global $user;
    $by = $user->name;

    insertarVacante($Nombre, $Empresa, $Descripcion, $Ciudad, $status, $by);

}
/*
function listarVacantes($status, $connect)
{

    $sqldb3 = "



    SELECT * FROM `unilabor_cms`.`00_vacantes` WHERE status='$status'

    ";

    if($result_query3 = $connect->query($sqldb3))
    {
        echo '<table width="100%">';
        while($row_out = $result_query3->fetch_assoc())
        {
            $id = $row_out['id'];
            $Nombre = $row_out['Nombre'];
            $Empresa = $row_out['Empresa'];
            $Descripcion = $row_out['Descripcion'];
            $Ciudad = $row_out['Ciudad'];
            $fechapub = $row_out['fechapub'];
            $status = $row_out['status'];
            $pubby = $row_out['pubby'];
            
            $fechapub = date('d-M-Y', strtotime($fechapub));
            

            
            echo '


    <tr style="background: gray;">
        
        
        <td>
            <font color="white">
            
                '.$fechapub.'
                    </font>
            
        </td>
        <td>    <font color="white">
            '.$Nombre.'
                </font>
        </td>
        <td>

        </td>
        <td>

        </td>
        
    </tr>

    
    <tr>
        <td>
            <font color="#DAA520">Ciudad :</font>
        </td>
        
        <td>
            '.$Ciudad.'
        </td>
        
        <td>
            <font color="#DAA520">Empresa :</font>
        </td>
        
        <td>
            '.$Empresa.'
        </td>
    </tr>
    
    <tr>
        <td>
            <font color="#DAA520">Descripcion :</font>
        </td>
        
        <td>
        <td>

            '.$Descripcion.'

        

        </td>
        

        </td>

    </tr>
    
            
            
            
            ';
        }
        echo '</table>';
    }
    else
    {
        echo "<div class=\"warning\"> No hubo Resultados !!</div>";
    }

}
*/



/*
$id = $_POST['id'];
$Nombre = $_POST['Nombre'];
$Empresa = $_POST['Empresa'];
$Descripcion = $_POST['Descripcion'];
$Ciudad = $_POST['Ciudad'];
$fechapub = $_POST['fechapub'];
$status = $_POST['status'];
$pubby = $_POST['pubby'];
*/
/*



function editarVacante($idF, $NombreF, $EmpresaF, $DescripcionF, $CiudadF, $statusF, $pubbyF, $connect)
{

    $fechapubF = time();
    $sqldb2 = "


        UPDATE 00_vacantes SET Nombre='$NombreF', Empresa='$EmpresaF', Descripcion='$DescripcionF', Ciudad='$CiudadF', status='$statusF', pubby='$pubbyF', WHERE id='$idF' LIMIT 1 
    
    
    ";

    if($result_query2 = $connect->query($sqldb2))
    {
        echo "<div class=\"ok\">Se inserto la vacante XD !!</div>";
    }
    else
    {
        echo "<div class=\"error\">Fallo el query ¬_¬'oO0 </div>";
    }
}


if($_POST['addVacanteEdit'])
{
    $id = $_POST['id2'];
    $Nombre = $_POST['Nombre2'];
    $Empresa = $_POST['Empresa2'];
    $Descripcion = $_POST['Descripcion2'];
    $Ciudad = $_POST['Ciudad2'];
    $status = $_POST['status2'];
    global $user;
    $pubby = $user->name;

    editarVacante($id, $Nombre, $Empresa, $Descripcion, $Ciudad, $status, $pubby, $mysqli_connect);
}

*/
include "/$home/vistas/addVacante.inc.php";
?>
