<?
$echo .= "

            <form onsubmit=\"return formUno(this)\" action=\"\" method=\"post\"
            id=\"datospersonales\"  name=\"datospersonales\">            

				
					<table id=\"datospersonalesTABLE\">
					<tr height=\"40px\">
					
						<td>
						
							<h1>Datos Personales</h1>
							
						</td>
					
					</tr>
					
					<tr height=\"40px\">
					
						<td>
						    <div class=\"warning\" id=\"NombreError\" style=\"display:none;\">
						        Rellena tu Nombre 
						        <div align=\"right\">
						            <a href=\"javascript:mostrarDiv('NombreError')\">Close</a>
					            </div>
						    </div>
							    <strong>Nombre <font color=\"#FF0000\"> * </font> </strong>
							    <input type=\"text\"  size=\"50\" id=\"Nombre\" 
							    name=\"Nombre\" value=\"$Nombre\" $readonly />
							
							
						
						</td>
					
					</tr>
					
					<tr height=\"40px\">
						
						<td>
						    
						    <div class=\"warning\" id=\"ApellidoPaternoError\" style=\"display:none;\">
						        Rellena tus Apellidos
						        <div align=\"right\">
						            <a href=\"javascript:mostrarDiv('ApellidoPaternoError')\">Close</a>
					            </div>
						    </div>
						
							<strong>Apellido Paterno <font color=\"#FF0000\"> * </font></strong>
							<input type=\"text\"  size=\"10\" id=\"ApellidoPaterno\" name=\"ApellidoPaterno\" 
							value=\"$ApellidoPaterno\" $readonly />
							
							<div class=\"warning\" id=\"ApellidoMaternoError\" style=\"display:none;\">
						        Rellena tu Apellido Materno
						    </div>
						    
							<strong> Apellido Materno <font color=\"#FF0000\"> * </font> </strong>
							<input type=\"text\"  size=\"10\" id=\"ApellidoMaterno\" name=\"ApellidoMaterno\" 
							value=\"$ApellidoMaterno\" $readonly />
							<br />
						
						</td>
					
					</tr>
					
					<tr height=\"40px\">
						
						<td>
						    <div class=\"warning\" id=\"DiaNacimientoError\" style=\"display:none;\">
						        Rellena tu Apellido Materno
						            <div align=\"right\">
						                <a href=\"javascript:mostrarDiv('DiaNacimientoError')\">Close</a>						        
						            </div>
						    </div>
						    
						    
							<strong>Fecha de Nacimiento <font color=\"#FF0000\"> * </font>  ( DD ) </strong>
							<input type=\"text\"  size=\"5\" id=\"DiaNacimiento\" name=\"DiaNacimiento\" 
							value=\"$DiaNacimiento\" $readonly />
							
							<strong> ( MM )</strong>
							<input type=\"text\"  size=\"5\" id=\"MesNacimiento\" name=\"MesNacimiento\" 
							value=\"$MesNacimiento\" $readonly />
							
							<strong> ( AAAA )</strong>
							<input type=\"text\"  size=\"5\" id=\"AnoNacimiento\" name=\"AnoNacimiento\" 
							value=\"$AnoNacimiento\" $readonly />
							<br />
						
						</td>
					
					</tr>
					
					<tr height=\"40px\">
						
						<td>
						   <div class=\"warning\" id=\"SexoError\"  style=\"display:none;\">
						        Selecciona tu Sexo
						        <div align=\"right\">
						            <a href=\"javascript:mostrarDiv('SexoError')\">Close</a>
					            </div>
						    </div>
						    
						    
							<strong>Sexo <font color=\"#FF0000\"> * </font></strong> 
							
							
							
							<select id=\"Sexo\" name=\"Sexo\">
							    <option value=\"\"></option>							
							    <option value=\"Masculino\">Masculino</option>
							    <option value=\"Femenino\">Femenino</option>							 
							</select>
							
							
														
						
						</td>
					
					</tr>
					
					<tr height=\"40px\">
						
						<td>
						    
						    
						   <div class=\"warning\" id=\"EstadoCivilError\" style=\"display:none;\">
						        Escribe tu Estado Civil
						        <div align=\"right\">
						            <a href=\"javascript:mostrarDiv('EstadoCivilError')\">Close</a>
					            </div>
						    </div>
						    
						    
							<strong>Estado Civil <font color=\"#FF0000\"> * </font></strong> 							
							<select id=\"EstadoCivil\" name=\"EstadoCivil\">
							    <option value=\"\"></option>							
							    <option value=\"Casado(a)\">Casado(a)</option>
							    <option value=\"Soltero(a)\">Soltero(a)</option>
							    <option value=\"Divorciado(a)\">Divorciado(a)</option>
							    <option value=\"Separado(a)\">Separado(a)</option>
							    <option value=\"Viudo(a)\">Viudo(a)</option>
							    <option value=\"Unión Libre\">Unión Libre</option>
							</select>
														
						
						</td>
					
					</tr>
					
					<tr height=\"40px\">
						
						<td>
						    
						    <div class=\"warning\" id=\"PaisError\" style=\"display:none;\">
						        Escribe tu Pais
						        <div align=\"right\">
						            <a href=\"javascript:mostrarDiv('PaisError')\">Close</a>
					            </div>
						    </div>
						    
							<strong>Pais <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" id=\"Pais\" name=\"Pais\" value=\"$Pais\"  
							$readonly />							
											
						
						</td>
					
					</tr>
					
					<tr height=\"40px\">
						
						<td>
						
							<div class=\"warning\" id=\"EstadoError\" style=\"display:none;\">
						        Rellena tu Apellido Materno
						    </div>
						    
						    <div class=\"warning\" id=\"DelegacionMunicipioError\" style=\"display:none;\">
						        Rellena tu Apellido Materno
						    </div>
						    
						    <strong>Estado <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" size=\"10\ id=\"Estado\" name=\"Estado\" 
							value=\"$Estado\"  $readonly />

							<strong> Delegación / Municipio <font color=\"#FF0000\"> * </font></strong>
							<input type=\"text\" size=\"10\" id=\"DelegacionMunicipio\" 
							name=\"DelegacionMunicipio\" value=\"$DelegacionMunicipio\" $readonly />
											
						
						</td>
					
					</tr>
					
					<tr height=\"40px\">
						
						<td>
						
							<div class=\"warning\" id=\"CalleError\" style=\"display:none;\">
						        Rellena tu Apellido Materno
						    </div>
						    
						    <strong>Calle <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" size=\"50\ id=\"Calle\" name=\"Calle\" value=\"$Calle\" 
							 $readonly />
																		
						
						</td>
					
					</tr>

					<tr height=\"40px\">
						
						<td>
						    
						    
						    <div class=\"warning\" id=\"ColoniaError\" style=\"display:none;\">
						        Rellena tu Apellido Materno
						    </div>
						    
						    <div class=\"warning\" id=\"CodigoPostalError\" style=\"display:none;\">
						        Rellena tu Apellido Materno
						    </div>
						    
						    
							<strong>Colonia <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" size=\"15\" id=\"Colonia\" name=\"Colonia\" 
							value=\"$Colonia\"  $readonly />
							
							<strong>Código Postal <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" size=\"7\" id=\"CodigoPostal\" name=\"CodigoPostal\" 
							value=\"$CodigoPostal\"  $readonly />
																		
						
						</td>
					
					</tr>
					
					<tr height=\"40px\">
						
						<td>
						
						    <div class=\"warning\" id=\"NumeroExteriorError\" style=\"display:none;\">
						        Rellena tu Apellido Materno
						    </div>
						    
						   
						
							<strong>Numero Exterior <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" size=\"15\" id=\"NumeroExterior\" name=\"NumeroExterior\" 
							value=\"$NumeroExterior\"  $readonly />
							
							<strong>Numero interior</strong>						  
							<input type=\"text\" size=\"7\" id=\"NumeroInterior\" name=\"NumeroInterior\" 
							value=\"$NumeroInterior\"  $readonly />
																		
						
						</td>
					
					</tr>
					
					<tr height=\"40px\">
						
						<td>
						
							<div class=\"warning\" id=\"TelLocalError\" style=\"display:none;\">
						        Rellena tu Apellido Materno
						    </div>
						    
						    <strong>Telefono <font color=\"#FF0000\"> * </font> ( Clave de Pais )
						    </strong>						  
							<input type=\"text\" size=\"2\" id=\"TelPais\" name=\"TelPais\" 
							value=\"$TelPais\"  $readonly />
							
							<strong> ( Lada ) </strong>						  
							<input type=\"text\" size=\"2\" id=\"TelEstado\" name=\"TelEstado\" 
							value=\"$TelEstado\"  $readonly />
							
							<strong> ( Local ) </strong>						  
							<input type=\"text\" size=\"6\" id=\"TelLocal\" name=\"TelLocal\" 
							value=\"$TelLocal\"  $readonly />
																		
						
						</td>
					
					</tr>
					
					<tr height=\"40px\">
						
						<td>
						
							<div class=\"warning\" id=\"CelularError\" style=\"display:none;\">
						        Rellena tu Apellido Materno
						    </div>
						    
						    <strong>Telefono Móvil <font color=\"#FF0000\"> * </font></strong>						  
							<input type=\"text\" size=\"10\" id=\"Celular\" name=\"Celular\" 
							value=\"$Celular\"  $readonly />							
							
																		
						
						</td>
					
					</tr>
					
					<tr height=\"40px\">
						
						<td>
						
							<div class=\"warning\" id=\"MailError\" style=\"display:none;\">
						        Rellena tu Apellido Materno
						    </div>
						    
						    <strong>Contactar a <font color=\"#FF0000\"> * </font> ( e-mail )</strong>						  
							<input type=\"text\" size=\"\" id=\"Mail\" name=\"Mail\" value=\"$Mail\"  
							$readonly />
							
						</td>
					
					</tr>
					
					<tr height=\"40px\">
					
						<td>
						
							
							<div align=\"right\">
								<input type=\"hidden\"  id=\"UId\" name=\"UId\" value=\"$UId\" 
								$readonly />

								<input type=\"submit\" id=\"8a77ccd39afcaa4b91c20aed7857168a\"  
								name=\"8a77ccd39afcaa4b91c20aed7857168a\" value=\"Guardar Cambios\">
								
							</div>
			
						
						
						</td>
					
					</tr>
				
				</table>
								
	 			</form>
	 			
	 			";	 			

	 			
?>



