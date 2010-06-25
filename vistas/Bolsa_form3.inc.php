<?

$echo .= "




<form method=\"post\" id=\"ExperienciaLaboralForm\" name=\"ExperienciaLaboralForm\" >


	<tr>
	
		<td>
		
			<h1 id=\"ExperienciaLaboral\" >Experiencia Laboral </h1>
			
		</td>
		
	</tr>
	
	<tr>

		<td>
	
			
			<div align=\"right\">
				<strong>No Tengo Experiencia </strong>
				<input type=\"checkbox\" name=\"Experiencia\" value=\"no\" >
			</div>
	
		</td>


	</tr>
	
		<tr>

		<td>
	
			<strong>Empresa <font color=\"red\"> * </font></strong>
			<input type=\"text\" name=\"Empresa\" value=\"$Empresa\" size=\"50\" >
	
		</td>


	</tr>
	
	<tr>
	
		<td>
		
			<strong>Sector Empresarial <font color=\"red\">*</font></strong>
			<input type=\"text\" name=\"SectorEmpresarial\" value=\"$SectorEmpresarial\" size=\"25\">
		
		
		</td>
	
	
	</tr>
	
	<tr>
	
		<td>
		
			<strong>Puesto/Cargo <font color=\"red\">*</font></strong>
			<input type=\"text\" name=\"Puesto\" value=\"$Puesto\" size=\"25\">
		
		
		</td>
	
	
	</tr>
	
	<tr>
	
	
		<td>
		
		
			<strong> Fecha de Inicio del Puesto <font color=\"red\">*</font></strong>
			<input type=\"text\" name=\"FechaPuesto\" value=\"$FechaPuesto\" size=\"8\">
		
		
		
		
			<strong> Fecha de Fin del Puesto <font color=\"red\">*</font></strong>
			<input type=\"text\" name=\"FechaPuestoFin\" value=\"$FechaPuestoFin\" size=\"8\">
		
		
		</td>
	
	
	</tr>
	
	
	<tr>
	
	
		<td>
		
		
			<strong> Sueldo del Puesto <font color=\"red\">*</font></strong>
			<input type=\"text\" name=\"SueldoPuesto\" value=\"$SueldoPuesto\" size=\"25\">
		
		
		</td>
	
	
	</tr>
	
	<tr>
	
		<td>
		
			<strong> Funciones del Puesto <font color=\"red\">* </font></strong>
			<input type=\"text\" name=\"FuncionesPuesto\" value=\"$FuncionesPuesto\" size=\"50\">
		
		</td>
	
	</tr>

	<tr>
	
		<td>
		
			<div align=\"right\">
				<input type=\"hidden\" name=\"UId\" value=\"$UId\">
				<button name=\"eacff088bbdf0de8473fad81c45c4a07\" id=\"eacff088bbdf0de8473fad81c45c4a07\" 
				value=\"Guardar Cambios\" type=\"submit\">
				Guardar Cambios
				</button>
			</div>
		
		
		</td>
	
	
	</tr>

	


</form>



";


?>
