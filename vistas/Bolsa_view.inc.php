<?php 

#$readonly = "readonly=\"readonly\"";
#$checked = "checked=\"checked\"";
$border = 0;
$cellspacing = 0;
$cellpadding = 7;


$echo .= "
			
						
			
			<table cellpadding=\"$cellpadding\" cellspacing=\"$cellspacing\" border=\"$border\" >
			
				";
				
if (isset($_GET['Curriculum']) == FALSE)	
{

    header("location: ?Curriculum=DatosPersonales");
                
    
}
else
{
    $Curriculum = $_GET['Curriculum'];
    
    switch ("$Curriculum")
    {
        case "DatosPersonales" :
            include "/$home/vistas/Bolsa_form1.inc.php";
            break;
            
            
        case "InformacionAcademica" :
            include "/$home/vistas/Bolsa_form2.inc.php";
            break;
            
        case "ExperienciaLaboral":
            include "/$home/vistas/Bolsa_form3.inc.php";
            break;
            
        case "ConocimientosHabilibades":
            include "/$home/vistas/Bolsa_form4.inc.php";
            break;
            
        case "PreferenciasLaborales":
            include "/$home/vistas/Bolsa_form5.inc.php";
            break;
        
        // DEFAULT    
        default:
            header("location: ?Curriculum=DatosPersonales");
            break;
            
    }
}
				

/*






include "/$home/vistas/Bolsa_form3.inc.php";

include "/$home/vistas/Bolsa_form4.inc.php";

include "/$home/vistas/Bolsa_form5.inc.php";

*/
$echo .= "
	 			
	 			
			</table>
			
			
			";

/*
			
		$Id = $row_bolsa['Id'];
		$UId = $user->uid;
		$Nombre =  $row_bolsa['Nombre']; 
		$ApellidoPaterno = $row_bolsa['ApellidoPaterno'];
		$ApellidoMaterno = $row_bolsa['ApellidoMaterno'];
		$Mail = $row_bolsa['Mail'];
		$DiaNacimiento = $row_bolsa['DiaNacimiento'];
		$MesNacimiento = $row_bolsa['MesNacimiento'];
		$AnoNacimiento = $row_bolsa['AnoNacimiento'];
		$Sexo = $row_bolsa['Sexo'];
		$EstadoCivil = $row_bolsa['EstadoCivil'];
		$Pais = $row_bolsa['Pais'];
		$Estado = $row_bolsa['Estado'];
		$DelegacionMunicipio = $row_bolsa['DelegacionMunicipio'];
		$Calle = $row_bolsa['Calle'];
		$Colonia = $row_bolsa['Colonia'];
		$CodigoPostal = $row_bolsa['CodigoPostal'];
		$NumeroExt	= $row_bolsa['NumeroExt'];	 
		$NumeroInterior = $row_bolsa['NumeroInterior'];
		$NumeroExterior = $row_bolsa['NumeroExterior'];
		$TelPais = $row_bolsa['TelPais'];
		$TelEstado = $row_bolsa['TelEstado'];
		$TelLocal = $row_bolsa['TelLocal'];
		$Celular = $row_bolsa['Celular'];
		$NivelEstudios = $row_bolsa['NivelEstudios'];
		$Carrera = $row_bolsa['Carrera'];
		$InicioCarrera = $row_bolsa['InicioCarrera'];
		$FinCar1rera = $row_bolsa['FinCar1rera'];
		$CertificadoRecibido = $row_bolsa['CertificadoRecibido'];
		$Institucion = $row_bolsa['Institucion']; 
		$Curso = $row_bolsa['Curso']; 
		$TituloCurso = $row_bolsa['TituloCurso'];
		$InicioCurso = $row_bolsa['InicioCurso']; 
		$FinCurso = $row_bolsa['FinCurso']; 
		$CertificadoCurso = $row_bolsa['CertificadoCurso']; 
		$InstitutoCurso = $row_bolsa['InstitutoCurso']; 
		$Empresa = $row_bolsa['Empresa']; 
		$SectorEmpresarial = $row_bolsa['SectorEmpresarial']; 
		$Puesto = $row_bolsa['Puesto'];
		$FechaPuesto = $row_bolsa['FechaPuesto']; 
		$FechaPuestoFin = $row_bolsa['FechaPuestoFin'];
		$SueldoPuesto = $row_bolsa['SueldoPuesto'];
		$FuncionesPuesto = $row_bolsa['FuncionesPuesto'];
		$Idioma1 = $row_bolsa['Idioma1'];
		$Idioma2 = $row_bolsa['Idioma2'];
		$Idioma3 = $row_bolsa['Idioma3'];
		$Soft1 = $row_bolsa['Soft1'];
		$Soft2 = $row_bolsa['Soft2'];
		$Soft3 = $row_bolsa['Soft3'];
		$SuledoMinimo = $row_bolsa['SuledoMinimo'];
		$PreferenciaPago = $row_bolsa['PreferenciaPago'];
		$HorarioPreferido = $row_bolsa['HorarioPreferido']; 
		$DiasTrabajo = $row_bolsa['DiasTrabajo'];
		$Licencia = $row_bolsa['Licencia'];
		$TipoLicencia = $row_bolsa['TipoLicencia'];
		$Viajar = $row_bolsa['Viajar'];
		$Reubicar = $row_bolsa['Reubicar'];
		$Area1 = $row_bolsa['Area1'];
		$Area2 = $row_bolsa['Area2'];
		$Area3 = $row_bolsa['Area3'];
		
		*/
?>
