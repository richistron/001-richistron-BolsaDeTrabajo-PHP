<?php 

#$readonly = "readonly=\"readonly\"";
#$checked = "checked=\"checked\"";
$border = 0;
$cellspacing = 0;
$cellpadding = 7;

$echo .= "<div class=\"warning\"> Datos Academicos</div>";

/*
 * @todo segunda vista
 */


/*
$echo .= "
			
						
			<p>
			<table cellpadding=\"$cellpadding\" cellspacing=\"$cellspacing\" border=\"$border\" >
			
				<form id=\"datospersonales\"  name=\"datospersonales\" method=\"post\">
				
					<tr>
					
						<td>
						
							<strong>Nombre <font color=\"#FF0000\"> * </font> </strong>
							<input type=\"text\"  size=\"50\" id=\"Nombre\" name=\"Nombre\" value=\"$Nombre\" $readonly />
							<br />
							
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Apellido Paterno <font color=\"#FF0000\"> * </font></strong>
							<input type=\"text\"  size=\"10\" id=\"ApellidoPaterno\" name=\"ApellidoPaterno\" value=\"$ApellidoPaterno\" $readonly />
							
							<strong> Apellido Materno <font color=\"#FF0000\"> * </font> </strong>
							<input type=\"text\"  size=\"10\" id=\"ApellidoMaterno\" name=\"ApellidoMaterno\" value=\"$ApellidoMaterno\" $readonly />
							<br />
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Fecha de Nacimiento <font color=\"#FF0000\"> * </font>  ( DD ) </strong>
							<input type=\"text\"  size=\"5\" id=\"DiaNacimiento\" name=\"DiaNacimiento\" value=\"$DiaNacimiento\" $readonly />
							
							<strong> ( MM )</strong>
							<input type=\"text\"  size=\"5\" id=\"MesNacimiento\" name=\"MesNacimiento\" value=\"$MesNacimiento\" $readonly />
							
							<strong> ( AAA )</strong>
							<input type=\"text\"  size=\"5\" id=\"AnoNacimiento\" name=\"AnoNacimiento\" value=\"$AnoNacimiento\" $readonly />
							<br />
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Sexo <font color=\"#FF0000\"> * </font></strong> 
							
							  
							<input type=\"Text\"  id=\"Sexo\" name=\"Sexo\" value=\"$Sexo\"  $readonly />
							
							
														
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Estado Civil <font color=\"#FF0000\"> * </font></strong> 
							
							Soltero(a)  
							<input type=\"text\" id=\"EstadoCivil\" name=\"EstadoCivil\" value=\"$EstadoCivil\"   $readonly />							
							
														
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Pais <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" id=\"Pais\" name=\"Pais\" value=\"$Pais\"  $readonly />							
											
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Estado <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" size=\"10\ id=\"Estado\" name=\"Estado\" value=\"$Estado\"  $readonly />

							<strong> Delegación / Municipio <font color=\"#FF0000\"> * </font></strong>
							<input type=\"text\" size=\"10\" id=\"DelegacionMunicipio\" name=\"DelegacionMunicipio\" value=\"$DelegacionMunicipio\" $readonly />
											
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Calle <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" size=\"50\ id=\"Calle\" name=\"Calle\" value=\"$Calle\"  $readonly />
																		
						
						</td>
					
					</tr>

					<tr>
						
						<td>
						
							<strong>Colonia <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" size=\"15\" id=\"Colonia\" name=\"Colonia\" value=\"$Colonia\"  $readonly />
							
							<strong>Código Postal <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" size=\"7\" id=\"CodigoPostal\" name=\"CodigoPostal\" value=\"$CodigoPostal\"  $readonly />
																		
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Numero Exterior <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" size=\"15\" id=\"NumeroExterior\" name=\"NumeroExterior\" value=\"$NumeroExterior\"  $readonly />
							
							<strong>Numero interior</strong>						  
							<input type=\"text\" size=\"7\" id=\"NumeroInterior\" name=\"NumeroInterior\" value=\"$NumeroInterior\"  $readonly />
																		
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Telefono <font color=\"#FF0000\"> * </font> ( Clave de Pais )</strong>						  
							<input type=\"text\" size=\"2\" id=\"TelPais\" name=\"TelPais\" value=\"$TelPais\"  $readonly />
							
							<strong> ( Lada ) </strong>						  
							<input type=\"text\" size=\"2\" id=\"TelEstado\" name=\"TelEstado\" value=\"$TelEstado\"  $readonly />
							
							<strong> ( Local ) </strong>						  
							<input type=\"text\" size=\"6\" id=\"TelLocal\" name=\"TelLocal\" value=\"$TelLocal\"  $readonly />
																		
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Telefono Móvil <font color=\"#FF0000\"> * </font> ( Clave de Pais )</strong>						  
							<input type=\"text\" size=\"10\" id=\"Celular\" name=\"Celular\" value=\"$Celular\"  $readonly />							
							
																		
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Contactar a <font color=\"#FF0000\"> * </font> ( e-mail )</strong>						  
							<input type=\"text\" size=\"\" id=\"Mail\" name=\"Mail\" value=\"$Mail\"  $readonly />
							
						</td>
					
					</tr>
					
					<tr>
					
						<td>
						
							
							<div align=\"right\">
								<input type=\"hidden\"  id=\"UId\" name=\"UId\" value=\"$UId\" $readonly />

								<input type=\"submit\" id=\"8a77ccd39afcaa4b91c20aed7857168a\" name=\"8a77ccd39afcaa4b91c20aed7857168a\" value=\"Guardar\" />
								
							</div>
			
						
						
						</td>
					
					</tr>
								
	 			</form>
	 			
	 			
			</table>
			</p>
			
			";
*/
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