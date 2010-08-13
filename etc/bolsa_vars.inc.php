<?php 

/*

$query_crear_db = "

				CREATE TABLE
				 `unilabor_cms`.`00_Curriculum` 
				 (
				 `Id` INT( 5 ) NOT NULL  AUTO_INCREMENT,
				 `UId` VARCHAR( 3 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Nombre` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `ApellidoPaterno` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `ApellidoMaterno` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Mail` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `DiaNacimiento` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `MesNacimiento` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `AnoNacimiento` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Sexo` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `EstadoCivil` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Pais` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Estado` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `DelegacionMunicipio` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Calle` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Colonia` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `CodigoPostal` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,				 
				 `NumeroExt` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,				 
				 `NumeroInterior` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `NumeroExterior` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `TelPais` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `TelEstado` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `TelLocal` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Celular` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `NivelEstudios` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Carrera` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `InicioCarrera` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `FinCarrera` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `CertificadoRecibido` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Institucion` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Curso` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `TituloCurso` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `InicioCurso` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `FinCurso` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `CertificadoCurso` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `InstitutoCurso` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Empresa` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `SectorEmpresarial` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Puesto` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `FechaPuesto` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `FechaPuestoFin` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `SueldoPuesto` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `FuncionesPuesto` VARCHAR( 250 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Idioma1` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Idioma2` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Idioma3` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Soft1` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Soft2` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Soft3` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `SuledoMinimo` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `PreferenciaPago` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `HorarioPreferido` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `DiasTrabajo` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Licencia` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `TipoLicencia` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Viajar` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Reubicar` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Area1` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Area2` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 `Area3` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
				 PRIMARY KEY ( `Id`) ,
				 UNIQUE KEY ( `Mail`, `UId`) ,
				 INDEX ( `Nombre` )
				 )
				  ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci
				
				";
                
if ( $result_crear_db = $mysqli_connect->query($query_crear_db) )
{
     $echo .= "si se inserto";
    //$result_crear->close();
}
else
{
    $echo .= "no se inserto";
}

*/

/*
 *  Primera fase del Formulario
 */

/*
 * @todo aki voy
 */

$UId = $user->uid;
$Nombre =  $_POST['Nombre']; 
$ApellidoPaterno = $_POST['ApellidoPaterno'];
$ApellidoMaterno = $_POST['ApellidoMaterno'];
$Mail = $_POST['Mail'];
$DiaNacimiento = $_POST['DiaNacimiento'];
$MesNacimiento = $_POST['MesNacimiento'];
$AnoNacimiento = $_POST['AnoNacimiento'];
$Sexo = $_POST['Sexo'];
$EstadoCivil = $_POST['EstadoCivil'];
$Pais = $_POST['Pais'];
$Estado = $_POST['Estado'];
$DelegacionMunicipio = $_POST['DelegacionMunicipio'];
$Calle = $_POST['Calle'];
$Colonia = $_POST['Colonia'];
$CodigoPostal = $_POST['CodigoPostal'];
$NumeroExt	= $_POST['NumeroExt'];	 
$NumeroInterior = $_POST['NumeroInterior'];
$NumeroExterior = $_POST['NumeroExterior'];
$TelPais = $_POST['TelPais'];
$TelEstado = $_POST['TelEstado'];
$TelLocal = $_POST['TelLocal'];
$Celular = $_POST['Celular'];

/*
$NivelEstudios = $_POST['NivelEstudios'];
$Carrera = $_POST['Carrera'];
$InicioCarrera = $_POST['InicioCarrera'];
$FinCar1rera = $_POST['FinCar1rera'];
$CertificadoRecibido = $_POST['CertificadoRecibido'];
$Institucion = $_POST['Institucion']; 
$Curso = $_POST['Curso']; 
$TituloCurso = $_POST['TituloCurso'];
$InicioCurso = $_POST['InicioCurso']; 
$FinCurso = $_POST['FinCurso']; 
$CertificadoCurso = $_POST['CertificadoCurso']; 
$InstitutoCurso = $_POST['InstitutoCurso']; 
$Empresa = $_POST['Empresa']; 
$SectorEmpresarial = $_POST['SectorEmpresarial']; 
$Puesto = $_POST['Puesto'];
$FechaPuesto = $_POST['FechaPuesto']; 
$FechaPuestoFin = $_POST['FechaPuestoFin'];
$SueldoPuesto = $_POST['SueldoPuesto'];
$FuncionesPuesto = $_POST['FuncionesPuesto'];
$Idioma1 = $_POST['Idioma1'];
$Idioma2 = $_POST['Idioma2'];
$Idioma3 = $_POST['Idioma3'];
$Soft1 = $_POST['Soft1'];
$Soft2 = $_POST['Soft2'];
$Soft3 = $_POST['Soft3'];
$SuledoMinimo = $_POST['SuledoMinimo'];
$PreferenciaPago = $_POST['PreferenciaPago'];
$HorarioPreferido = $_POST['HorarioPreferido']; 
$DiasTrabajo = $_POST['DiasTrabajo'];
$Licencia = $_POST['Licencia'];
$TipoLicencia = $_POST['TipoLicencia'];
$Viajar = $_POST['Viajar'];
$Reubicar = $_POST['Reubicar'];
$Area1 = $_POST['Area1'];
$Area2 = $_POST['Area2'];
$Area3 = $_POST['Area3'];
*/

$Nombre =  strtoupper($Nombre); 
$ApellidoPaterno = strtoupper($ApellidoPaterno);
$ApellidoMaterno = strtoupper($ApellidoMaterno);
$Sexo = strtoupper($Sexo);
$EstadoCivil = strtoupper($EstadoCivil);
$Pais = strtoupper($Pais);
$Estado = strtoupper($Estado);
$DelegacionMunicipio = strtoupper($DelegacionMunicipio);
$Calle = strtoupper($Calle);
$Colonia = strtoupper($Colonia);

/*
$NivelEstudios = strtoupper($NivelEstudios);
$Carrera = strtoupper($Carrera);
$InicioCarrera = strtoupper($InicioCarrera);
$FinCar1rera = strtoupper($FinCar1rera);
$CertificadoRecibido = strtoupper($CertificadoRecibido);
$Institucion = strtoupper($Institucion); 
$Curso = strtoupper($Curso); 
$TituloCurso = strtoupper($TituloCurso);
$InicioCurso = strtoupper($InicioCurso); 
$FinCurso = strtoupper($FinCurso); 
$CertificadoCurso = strtoupper($CertificadoCurso); 
$InstitutoCurso = strtoupper($InstitutoCurso); 
$Empresa = strtoupper($Empresa); 
$SectorEmpresarial = strtoupper($SectorEmpresarial); 
$Puesto = strtoupper($Puesto);
$FechaPuesto = strtoupper($FechaPuesto); 
$FechaPuestoFin = strtoupper($FechaPuestoFin);
$SueldoPuesto = strtoupper($SueldoPuesto);
$FuncionesPuesto = strtoupper($FuncionesPuesto);
$Idioma1 = strtoupper($Idioma1);
$Idioma2 = strtoupper($Idioma2);
$Idioma3 = strtoupper($Idioma3);
$Soft1 = strtoupper($Soft1);
$Soft2 = strtoupper($Soft2);
$Soft3 = strtoupper($Soft3);
$SuledoMinimo = strtoupper($SuledoMinimo);
$PreferenciaPago = strtoupper($PreferenciaPago);
$HorarioPreferido = strtoupper($HorarioPreferido); 
$DiasTrabajo = strtoupper($DiasTrabajo);
$Licencia = strtoupper($Licencia);
$TipoLicencia = strtoupper($TipoLicencia);
$Viajar = strtoupper($Viajar);
$Reubicar = strtoupper($Reubicar);
$Area1 = strtoupper($Area1);
$Area2 = strtoupper($Area2);
$Area3 = strtoupper($Area3);
*/

/*
 * Procesando DATOS PERSONALES
 */


/*
 * ERROR DE EMPTY DE DATOS PERSONALES
 */


if ( 
	empty($Nombre) || 
	empty($ApellidoPaterno) || 
	empty($ApellidoMaterno) ||
	empty($Mail) ||
	empty($DiaNacimiento) ||
	empty($MesNacimiento) ||
	empty($AnoNacimiento) ||
	empty($Sexo) ||
	empty($EstadoCivil) ||
	empty ($Pais) ||
	empty ($Estado) ||
	empty ($DelegacionMunicipio) ||
	empty ($Calle) ||
	empty ($Colonia) ||
	empty ($CodigoPostal) ||
	empty($NumeroExterior) ||
	empty($TelPais) ||
	empty($TelEstado) ||
	empty($TelLocal) ||
	empty($Celular) 	
	)
	
	{
		$echo .= "<div class=\"error\" id=\"datospersonales\" >
					Rellena todos los campos marcados con <font color=\"red\">*</font>
					</div>";
		
		include "/$home/vistas/Bolsa_view.inc.php";  return;
		
	
		

		
	}
	
/*
 * VALIDANDO CAMPOS NUMERICOS
 */	

if (is_numeric("$DiaNacimiento") == FALSE)
{
	$echo .= "
				<div class=\"error\"> 
					
					El dia de Nacimiento debe ser Numerico 
	
				</div>
	
				";
	$ERROR54 = 1;   include "/$home/vistas/Bolsa_view.inc.php";  return;	
}

if (is_numeric("$MesNacimiento") == FALSE)
{
	$echo .= "
				<div class=\"error\"> 
					
					El Mes de Nacimiento debe ser Numerico 
	
				</div>
	
				";
	$ERROR54 = 1;   include "/$home/vistas/Bolsa_view.inc.php";  return;	
}

if (is_numeric("$AnoNacimiento") == FALSE)
{
	$echo .= "
				<div class=\"error\"> 
					
					El Año de Nacimiento debe ser Numerico 
	
				</div>
	
				";
	$ERROR54 = 1;   include "/$home/vistas/Bolsa_view.inc.php";  return;	
}

if (is_numeric("$CodigoPostal") == FALSE)
{
	$echo .= "
				<div class=\"error\"> 
					
					El Codigo Postal debe ser Numerico 
	
				</div>
	
				";
	$ERROR54 = 1;   include "/$home/vistas/Bolsa_view.inc.php";  return;	
}

if (is_numeric("$NumeroExterior") == FALSE)
{
	$echo .= "
				<div class=\"error\"> 
					
					El Numero Exterior debe ser Numerico 
	
				</div>
	
				";
	$ERROR54 = 1;   include "/$home/vistas/Bolsa_view.inc.php";  return;	
}

if (is_numeric("$TelPais") == FALSE)
{
	$echo .= "
				<div class=\"error\"> 
					
					La clave del Pais  debe ser Numerico 
	
				</div>
	
				";
	$ERROR54 = 1;   include "/$home/vistas/Bolsa_view.inc.php";  return;	
}
if (is_numeric("$TelEstado") == FALSE)
{
	$echo .= "
				<div class=\"error\"> 
					
					La clave del telefono  debe ser Numerico 
	
				</div>
	
				";
	$ERROR54 = 1;   include "/$home/vistas/Bolsa_view.inc.php";  return;	
}


if (is_numeric("$TelLocal") == FALSE)
{
	$echo .= "
				<div class=\"error\"> 
					
					El Telefono debe ser Numerico 
	
				</div>
	
				";
	$ERROR54 = 1;   include "/$home/vistas/Bolsa_view.inc.php";  return;	
}

if (is_numeric("$Celular") == FALSE)
{
	$echo .= "
				<div class=\"error\"> 
					
					El Celular debe ser Numerico 
	
				</div>
	
				";
	$ERROR54 = 1;   include "/$home/vistas/Bolsa_view.inc.php";  return;	
}


/*
 * VAMOS PAL QUERY
 */

/*
 * Query Completo
 
$query_editar = "UPDATE 00_Curriculum
                SET
                '',
				UId = '$UId',				
				Nombre =  '$Nombre', 
				ApellidoPaterno = '$ApellidoPaterno',
				ApellidoMaterno = '$ApellidoMaterno',
				Mail = '$Mail',
				DiaNacimiento = '$DiaNacimiento',
				MesNacimiento = '$MesNacimiento',
				AnoNacimiento = '$AnoNacimiento',
				Sexo = '$Sexo',
				EstadoCivil = '$EstadoCivil',
				Pais = '$Pais',
				Estado = '$Estado',
				DelegacionMunicipio = '$DelegacionMunicipio',
				Calle = '$Calle',
				Colonia = '$Colonia',
				CodigoPostal = '$CodigoPostal',
				NumeroExt	= '$NumeroExt',	 
				NumeroInterior = '$NumeroInterior',
				NumeroExterior = '$NumeroExterior',
				TelPais = '$TelPais',
				TelEstado = '$TelEstado',
				TelLocal = '$TelLocal',
				Celular = '$Celular',
				NivelEstudios = '$NivelEstudios',
				Carrera = '$Carrera',
				InicioCarrera = '$InicioCarrera',
				FinCar1rera = '$FinCar1rera',
				CertificadoRecibido = '$CertificadoRecibido',
				Institucion = '$Institucion', 
				Curso = '$Curso', 
				TituloCurso = '$TituloCurso',
				InicioCurso = '$InicioCurso', 
				FinCurso = '$FinCurso', 
				CertificadoCurso = '$CertificadoCurso', 
				InstitutoCurso = '$InstitutoCurso', 
				Empresa = '$Empresa', 
				SectorEmpresarial = '$SectorEmpresarial', 
				Puesto = '$Puesto',
				FechaPuesto = '$FechaPuesto', 
				FechaPuestoFin = '$FechaPuestoFin',
				SueldoPuesto = '$SueldoPuesto',
				FuncionesPuesto = '$FuncionesPuesto',
				Idioma1 = '$Idioma1',
				Idioma2 = '$Idioma2',
				Idioma3 = '$Idioma3',
				Soft1 = '$Soft1',
				Soft2 = '$Soft2',
				Soft3 = '$Soft3',
				SuledoMinimo = '$SuledoMinimo',
				PreferenciaPago = '$PreferenciaPago',
				HorarioPreferido = '$HorarioPreferido', 
				DiasTrabajo = '$DiasTrabajo',
				Licencia = '$Licencia',
				TipoLicencia = '$TipoLicencia',
				Viajar = '$Viajar',
				Reubicar = '$Reubicar',
				Area1 = '$Area1',
				Area2 = '$Area2',
				Area3 = '$Area3'   
				
				WHERE UId='$UId' LIMIT 1 ";
				
*/

$query_editar = "UPDATE 00_Curriculum 
                SET
                
				UId='$UId',				
				Nombre='$Nombre', 
				ApellidoPaterno='$ApellidoPaterno',
				ApellidoMaterno='$ApellidoMaterno',
				Mail='$Mail',
				DiaNacimiento='$DiaNacimiento',
				MesNacimiento='$MesNacimiento',
				AnoNacimiento='$AnoNacimiento',
				Sexo='$Sexo',
				EstadoCivil='$EstadoCivil',
				Pais='$Pais',
				Estado='$Estado',
				DelegacionMunicipio='$DelegacionMunicipio',
				Calle='$Calle',
				Colonia='$Colonia',
				CodigoPostal='$CodigoPostal',
				NumeroExt='$NumeroExt',	 
				NumeroInterior='$NumeroInterior',
				NumeroExterior='$NumeroExterior',
				TelPais='$TelPais',
				TelEstado='$TelEstado',
				TelLocal='$TelLocal',
				Celular='$Celular'
				
				WHERE UId='$UId' LIMIT 1 ";

if ( $result_editar = $mysqli_connect->query($query_editar))
{
	$echo .= "
	
	
	<div id=\"datosPersonalesOk\" display=\"block\">
				<div class=\"ok\">
					Los Cambios Fueron Exitosos 
					<a href=\"javascript:
					mostrarDiv('datosPersonalesOk');
					cerrarOpen();
					mostrarDiv('informacionAcademicaTable');\" > 
					    
					    
					    : Click para Continuar </a>
					    
					    
				</div></div>
				
				";
	
	include "/$home/etc/bolsa_rows.inc.php";
}

/*
		
			$echo .= "<br />$Nombre"; 	
			$echo .= "<br />$ApellidoPaterno";	
			$echo .= "<br />$ApellidoMaterno";
			$echo .= "<br />$Mail";
			$echo .= "<br />$DiaNacimiento";
			$echo .= "<br />$MesNacimiento";
			$echo .= "<br />$AnoNacimiento";
			$echo .= "<br />$Sexo";
			$echo .= "<br />$EstadoCivil";
			$echo .= "<br />$Pais";
			$echo .= "<br />$Estado";
			$echo .= "<br />$DelegacionMunicipio";
			$echo .= "<br />$Calle";
			$echo .= "<br />$Colonia";
			$echo .= "<br />$CodigoPostal";
			$echo .= "<br />$NumeroExterior";
			$echo .= "<br />$TelPais";
			$echo .= "<br />$TelEstado";
			$echo .= "<br />$TelLocal";
			$echo .= "<br />$Celular";
			
*/
			
/*
 * Segunda parte del formulario
 */



?>
