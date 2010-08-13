<?
function userUidHiheddenPerfil()
{
    $mysqli_connect = new mysqli("mysql.unilabor.com.mx", "unilabor_cms", "yshTENSJ224", "unilabor_cms");

    global $user;
    $id = $user->uid;
    $sql_txt = "
                SELECT *
                FROM `cms_profile_values`
                WHERE uid = '$id'
                LIMIT 0 , 1
                ";
    if($queryProf = $mysqli_connect->query($sql_txt))
    {
        if($rowPro = $queryProf->fetch_assoc())
        {
            echo $rowPro['value'];
        }
    }
    else
    {
        echo "fallo";
    }
}
?>
<script type="text/javascript">
function mostrarDiv(openId)
{
    if (document.getElementById)
    {
        var openDiv = document.getElementById(openId); 
        openDiv.style.display = (openDiv.style.display == 'none') ? 'block' : 'none';        
    }
}
function cerrarOpen()
{
    document.getElementById('datospersonalesTABLE').style.display='none';
    document.getElementById('informacionAcademicaTable').style.display='none';
    document.getElementById('ExperienciaLaboralTable').style.display='none';
    document.getElementById('ConocimientosHabilibadesTable').style.display='none';
    document.getElementById('preferenciasLaborales').style.display='none';
}


function cerrarOpenService()
{
    document.getElementById('BesterTable').style.display='none';
    document.getElementById('AddToolsTable').style.display='none';
    document.getElementById('SolutionsTable').style.display='none';
    document.getElementById('SideTable').style.display='none';
    document.getElementById('MetodoUTable').style.display='none';
    document.getElementById('ExternalTable').style.display='none';
}

function cerrarOpenAcerca()
{
    document.getElementById('MisionRow').style.display='none';
    document.getElementById('VisionRow').style.display='none';
    document.getElementById('ValoresRow').style.display='none';
    document.getElementById('HistoriaRow').style.display='none';

}


function formUno(formulario)
{    
    if(formulario.Nombre.value=="")
    {
        alert("Rellena el Campo Nombre")  
        //mostrarDiv("NombreError")              
        return false 
               
    }
    if(formulario.ApellidoPaterno.value=="" || formulario.ApellidoMaterno.value=="")
    {
        alert("Rellena los Apellidos")                     
        //mostrarDiv("ApellidoPaternoError")        
        return false 
               
    }
    if(formulario.DiaNacimiento.value=="" || formulario.MesNacimiento.value=="" || formulario.AnoNacimiento.value=="")
    {
        alert("Rellena tu Fecha de Nacimiento")        
        //mostrarDiv("DiaNacimientoError")        
        return false
    }    
    if(formulario.Sexo.value=="")
    {
        alert("Selecciona tu Sexo")
        //mostrarDiv("SexoError")        
        return false        
    } 
    if(formulario.EstadoCivil.value=="")
    {
        alert("Escribe tu Estado Civil")
        //mostrarDiv("EstadoCivilError")
        return false        
    }
    if(formulario.Pais.value=="")
    {
        alert("Escribe el Pais")
        //mostrarDiv("PaisError")
        return false
    }
    if(formulario.Estado.value=="")
    {
        alert("Escribe el Estado")
        //mostrarDiv("PaisError")
        return false
    }
    if(formulario.DelegacionMunicipio.value=="")
    {
        alert("Escribe el Municipio")
        //mostrarDiv("PaisError")
        return false
    }
    if(formulario.Calle.value=="")
    {
        alert("Escribe la Calle")
        //mostrarDiv("PaisError")
        return false
    }
    if(formulario.Colonia.value=="")
    {
        alert("Escribe la Colonia")
        //mostrarDiv("PaisError")
        return false
    }
    if(formulario.CodigoPostal.value=="")
    {
        alert("Escribe el Codigo Postal")
        //mostrarDiv("PaisError")
        return false
    }
    if(formulario.NumeroExterior.value=="")
    {
        alert("Escribe el  Numero de Exterior")
        //mostrarDiv("PaisError")
        return false
    }
    if(formulario.TelEstado.value=="")
    {
        alert("Escribe la Clave lada")
        //mostrarDiv("PaisError")
        return false
    }
    if(formulario.TelLocal.value=="")
    {
        alert("Escribe el Telefono Local")
        //mostrarDiv("PaisError")
        return false
    }
    if(formulario.Celular.value=="")
    {
        alert("Escribe el Telefono Celular")
        //mostrarDiv("PaisError")
        return false
    }
    if(formulario.Mail.value=="")
    {
        alert("Escribe tu Mail")
        //mostrarDiv("PaisError")
        return false
    }     
    else
    {
        return true
        document.formulario.submit()
    }
}
function Permut (flag,img) 
{
   if (document.images) 
   {
        if (document.images[img].permloaded) 
        {
            if (flag==1) document.images[img].src = document.images[img].perm.src
            else document.images[img].src = document.images[img].perm.oldsrc
        }
   }
}
function preloadPermut (img,adresse) 
{
   if (document.images) 
   {
        img.onload = null;
        img.perm = new Image ();
        img.perm.oldsrc = img.src;
        img.perm.src = adresse;
        img.permloaded = true;
   }
}

function formTres(formulario)
{
    if(formulario.Empresa.value=="" || formulario.SectorEmpresarial.value=="" || formulario.Puesto.value=="" || formulario.FechaPuesto.value=="" || formulario.FechaPuestoFin.value=="" || formulario.SueldoPuesto.value=="" ||	formulario.FuncionesPuesto.value=="")
    {
        
        
        alert('Rellena los campos marcados con *')
        return false
        
    }
    else
    {
        return true
        document.formulario.submit()
    }
}

function formCinco(formulario)
{
    if(formulario.SuledoMinimo.value=="" ||	formulario.PreferenciaPago.value=="" ||	formulario.HorarioPreferido.value=="" ||	formulario.DiasTrabajo.value=="" ||	formulario.Licencia.value=="" ||	formulario.Viajar.value=="" ||	formulario.Reubicar.value=="")
    {
        alert('Rellena los campos marcados con *')
        return false
    }
    else
    {
        return true
        document.formulario.submit()
    }
}

function addVacanteValid(formulario)
{
    if(formulario.Nombre.value=="" || formulario.Empresa.value=="" || formulario.Descripcion.value=="" || formulario.Ciudad.value=="" || formulario.status.value=="" )
    {
        alert('Rellena los campos  marcados con *')
        return false
    }
    else
    {
        return true
        document.formulario.submit()
    }
}
function checkAuthUni(tipo,link)
{
    switch (tipo)
    {
        case 'empresa':
            if(document.userUidHiheddenForm.userUidHiheddenPerfilbtn.value=='Empleo')
            {
                alert('Eres empresa')
            }   
            break
            
        case 'aspirante':
            if(document.userUidHiheddenForm.userUidHiheddenPerfilbtn.value=='Personal Para Mi Empresa')
            {
                alert('Eres aspirante')
            }   
            break
            
        case 'Rolempresa':
            if(document.userUidHiheddenForm.userUidHiheddenRole.value!='empresa')
            {
                alert('No eres empresa')
            }   
            break
            
        case 'Rolaspirante':
            if(document.userUidHiheddenForm.userUidHiheddenRole.value!='aspirante')
            {
                alert('No eres aspirante')
            } 
            break;
            
        default:
            if(document.userUidHiheddenForm.userUidHihedden.value==0)
            {
                alert('No has iniciado Sesion')
                document.location='http://www.unilabor.com.mx/user/register'

            }
            else
            {
                if(link!='')
                {
                    document.location=link
                }
            }
    }
}
</script>

<style type="text/css">
#bolsaSelectBtns
{
    display:block;
}
#formBolsaBtn
{
    display:none;
}
</style>


<form name="userUidHiheddenForm" id="userUidHiheddenForm">
<input type="hidden" name="userUidHihedden" id="userUidHihedden" value="<? echo $user->uid; ?>">
<?
if (in_array('empresa', array_values($user->roles))) 
{
    echo '<input type="hidden" name="userUidHiheddenRole" id="userUidHiheddenRole" value="empresa">';
}
if (in_array('aspirante', array_values($user->roles))) 
{
    echo '<input type="hidden" name="userUidHiheddenRole" id="userUidHiheddenRole" value="aspirante">';
}
?>
<input type="hidden" name="userUidHiheddenPerfilbtn" id="userUidHiheddenPerfilbtn" value="<? userUidHiheddenPerfil(); ?>">
</form> 
