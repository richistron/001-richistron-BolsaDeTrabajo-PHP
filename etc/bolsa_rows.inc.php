<?php 

$UId = $user->uid;

$query_rows = "

				 SELECT * 
				 FROM 00_Curriculum 
				 WHERE UId='$UId' LIMIT 1  
				
				";
if ( $result_rows = $mysqli_connect->query( $query_rows ) )
{
	if ( $row_bolsa = $result_rows->fetch_assoc())
	{
				$Id = $row_bolsa['Id'];				
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
				$FinCarrera = $row_bolsa['FinCarrera'];
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
				
				include "/$home/vistas/Bolsa_view.inc.php";				
		}
		else
			{	
				$UId = $user->uid;
				$Mail = $user->mail;
				$Nombre = $user->name;	
				$query_new = "

				 INSERT INTO 00_Curriculum 
				 VALUES
				 (
				 
				 	'',
					'$UId',
					'$Nombre',  
					'$ApellidoPaterno', 
					'$ApellidoMaterno', 
					'$Mail', 
					'$DiaNacimiento', 
					'$MesNacimiento',
					'$AnoNacimiento',
					'$Sexo', 
					'$EstadoCivil', 
					'$Pais',
					'$Estado', 
					'$DelegacionMunicipio', 
					'$Calle',
					'$Colonia', 
					'$CodigoPostal', 
					'$NumeroExt',
					'$NumeroInterior', 
					'$NumeroExterior',
					'$TelPais',
					'$TelEstado', 
					'$TelLocal', 
					'$Celular', 
					'$NivelEstudios', 
					'$Carrera',
					'$InicioCarrera', 
					'$FinCar1rera',
					'$CertificadoRecibido', 
					'$Institucion',
					'$Curso',
					'$TituloCurso',
					'$InicioCurso',  
					'$FinCurso',  
					'$CertificadoCurso',  
					'$InstitutoCurso',  
					'$Empresa',  
					'$SectorEmpresarial',
					'$Puesto', 
					'$FechaPuesto', 
					'$FechaPuestoFin', 
					'$SueldoPuesto', 
					'$FuncionesPuesto', 
					'$Idioma1', 
					'$Idioma2', 
					'$Idioma3', 
					'$Soft1', 
					'$Soft2', 
					'$Soft3', 
					'$SuledoMinimo', 
					'$PreferenciaPago', 
					'$HorarioPreferido',  
					'$DiasTrabajo',
					'$Licencia', 
					'$TipoLicencia',
					'$Viajar', 
					'$Reubicar',
					'$Area1', 
					'$Area2', 
					'$Area3' )
					 ";
				
				if ($result_new = $mysqli_connect->query($query_new))
				{
					$echo .= "Si se armo";
					header ("location: http://www.unilabor.com.mx/BolsaAdd");
				}
				else
				{
					#$echo .= "No se armo";
				}
			}
}


?>
