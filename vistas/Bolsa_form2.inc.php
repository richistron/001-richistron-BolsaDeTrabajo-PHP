<?
$echo .= "

       
       

<form method=\"post\" id=\"Informacion_Academica_form\" name=\"Informacion_Academica_form\" >

	<tr>
	
		<td>
		
			<h1 name=\"Informacion_Academica\" id=\"Informacion_Academica\" >Informacion Academica</h1>
			
		</td>
		
	</tr>
	
	<tr>

		<td>
	
			<strong>Nivel de Estudios </strong>
			<input type=\"text\" name=\"NivelEstudios\" id=\"NivelEstudios\" value=\"$NivelEstudios\" size=\"50\">
			
		</td>
		
	</tr>
	
	<tr>

		<td>
	
			<strong>Carrera </strong>
			<input type=\"text\" name=\"Carrera\" id=\"Carrera\" value=\"$Carrera\" size=\"50\">
			
		</td>
		
	</tr>
	
	<tr>

		<td>
	
			<strong>Fecha de Inicio de la Carrera </strong>
			<input type=\"text\" name=\"InicioCarrera\" id=\"InicioCarrera\" value=\"$InicioCarrera\" size=\"8\">
			
			<strong>Fecha de Fin de la Carrera </strong>
			<input type=\"text\" name=\"FinCarrera\" id=\"FinCarrera\" value=\"$FinCarrera\" size=\"8\">
			
		</td>
		
	</tr>
	
	<tr>

		<td>
	
			<strong>Certificado Recibido </strong>
			<input type=\"text\" name=\"CertificadoRecibido\" id=\"CertificadoRecibido\" 
			value=\"$CertificadoRecibido\" size=\"50\">

			
		</td>
		
	</tr>
	
	<tr>

		<td>
	
			<strong>Institución </strong>
			<input type=\"text\" name=\"Institucion\" id=\"Institucion\" 
			value=\"$Institucion\" size=\"50\">

			
		</td>
		
	</tr>
	
	<tr>
	
		<td>
		
			<div align=\"right\">
			
				<h3> Cursos </h3>
			
			</div>
		
		</td>
	
	</tr>
	
	
	
	
	
	
	
	
	
	
	<tr>

		<td>
	
			<strong>Curso </strong>
			<input type=\"text\" name=\"Curso\" id=\"Curso\" value=\"$Curso\" size=\"50\">
			
		</td>
		
	</tr>
	
	<tr>

		<td>
	
			<strong>Titulo del Curso </strong>
			<input type=\"text\" name=\"TituloCurso\" id=\"TituloCurso\" value=\"$TituloCurso\" size=\"50\">
			
		</td>
		
	</tr>
	
	<tr>

		<td>
	
			<strong>Fecha de Inicio del Curso </strong>
			<input type=\"text\" name=\"InicioCurso\" id=\"InicioCurso\" value=\"$InicioCurso\" size=\"8\">
			
			<strong>Fecha de Fin del Curso </strong>
			<input type=\"text\" name=\"FinCurso\" id=\"FinCurso\" value=\"$FinCurso\" size=\"8\">
			
		</td>
		
	</tr>
	
	<tr>

		<td>
	
			<strong>Certificado Recibido </strong>
			<input type=\"text\" name=\"CertificadoCurso\" id=\"CertificadoCurso\" 
			value=\"$CertificadoCurso\" size=\"50\">

			
		</td>
		
	</tr>
	
	<tr>

		<td>
	
			<strong>Institución </strong>
			<input type=\"text\" name=\"InstitutoCurso\" id=\"InstitutoCurso\" 
			value=\"$InstitutoCurso\" size=\"50\">

			
		</td>
		
	</tr>	
	
	
	
	
	
	
	
	
	
	
	
	

	<tr>

		<td>

		


			<div align=\"right\">
				<input type=\"hidden\" name=\"UId\" id=\"UId\" value=\"$UId\" />
			
				<button name=\"ba3fedde7e2cba279045b8fa0a03e494\" 
				value=\"Guardar Cambios\" type=\"submit\">
				Guardar Cambios</button>
				
			</div>
	
		
		
		</td>
	
	</tr>



</form>
            ";

 			
?>
