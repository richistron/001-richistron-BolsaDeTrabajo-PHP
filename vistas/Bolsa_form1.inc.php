<?

$echo .= "

            <form id=\"datospersonales\"  name=\"datospersonales\" method=\"post\">
				
					<tr>
					
						<td>
						
							<h1>Datos Personales</h1>
							
						</td>
					
					</tr>
					
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
							
							<strong> ( AAAA )</strong>
							<input type=\"text\"  size=\"5\" id=\"AnoNacimiento\" name=\"AnoNacimiento\" value=\"$AnoNacimiento\" $readonly />
							<br />
						
						</td>
					
					</tr>
					
					<tr>
						
						<td>
						
							<strong>Sexo <font color=\"#FF0000\"> * </font></strong> 
							
							  Masculino
							<input type=\"radio\"  id=\"Sexo\" name=\"Sexo\" value=\"Masculino\"  $readonly />
							 Femenino
							<input type=\"radio\"  id=\"Sexo\" name=\"Sexo\" value=\"Femenino\"  $readonly />
							
							
														
						
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

								<input type=\"submit\" id=\"8a77ccd39afcaa4b91c20aed7857168a\" name=\"8a77ccd39afcaa4b91c20aed7857168a\" value=\"Guardar Cambios\" />
								
							</div>
			
						
						
						</td>
					
					</tr>
								
	 			</form>
	 			
	 			";
	 			
	 			/*
	 			
	 			<p>This link uses the onclick event handler.<br>
<a href="#" onclick="setVisible('layer1');return false" target="_self">Open popup</a></p>

<p>This next one uses the javascript link inside the href tag.<br>
<a href="javascript:setVisible('layer1',true)">Open popup</a></p>

<form>
And this one uses the input button inside a form tag.<br>
  <input type="button" value="Open popup" onclick="setVisible('layer1')">
</form>

<p>It can also be used in an image map. Here, the word 'Webhost' contains the link<br>
<img src="award.gif" width="120" height="65" border="0" usemap="#Map">
  <map name="Map" id="Map">
    <area shape="rect" coords="1,1,113,23" href="#" onclick="setVisible('layer1');return false" target="_self">
  </map>
</p>

<script type="text/javascript">
setVisible('layer1',true)
</script>
	 			*/
	 			
?>



