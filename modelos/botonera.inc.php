<script>
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
</SCRIPT>

<table align="center" colspan="0"  width="100%" height="" border="0" 
style="background: white url(http://unilabor.com.mx/imgs/fondoss.jpg) no-repeat;" >
    <tr>
        
        <!-- colimmna Numero 1 -->
         
        <td  align="right" width="14%">
        
            <a href="http://www.unilabor.com.mx/" 
            onMouseover="Permut(1,'Inicio1');" 
            onMouseout="Permut(0,'Inicio1');">
            
            <img src="http://unilabor.com.mx/imgs/inicio2.jpg" 
            border=0 
            NAME="Inicio1" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/inicio1.jpg');"
             />
             
            </a>
            
        </td>
        
                <!-- colimmna Numero 2 -->
         
        <td  align="center" width="14%">
        
            <a href="http://www.unilabor.com.mx/Acerca" 
            onMouseover="Permut(1,'acerca-de-inactivo');" 
            onMouseout="Permut(0,'acerca-de-inactivo');">
            
            <img src="http://unilabor.com.mx/imgs/acerca-de-inactivo.jpg" 
            border=0 
            NAME="acerca-de-inactivo" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/acerca-de-activo.jpg');"
             />
             
            </a>
            
        </td>
        
        <!-- colummna Numero 3 -->
        
        <td  align="center" width="14%">
        
            <a href="http://www.unilabor.com.mx/Servicios" 
            onMouseover="Permut(1,'servicios-activo');" 
            onMouseout="Permut(0,'servicios-activo');">
            
            <img src="http://unilabor.com.mx/imgs/servicios-inactivo.jpg" 
            border=0 
            NAME="servicios-activo" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/servicios-activo.jpg');"
             />
             
            </a>
            
        </td>

        <!-- colummna Numero 4 -->
        
        <td  align="center" width="14%">
        
            <a href="http://www.unilabor.com.mx/Consultores" 
            onMouseover="Permut(1,'consultores-inactivo');" 
            onMouseout="Permut(0,'consultores-inactivo');">
            
            <img src="http://unilabor.com.mx/imgs/consultores-inactivo.jpg" 
            border=0 
            NAME="consultores-inactivo" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/consultores-activo.jpg');"
             />
             
            </a>
            
        </td>
        
        <!-- colimmna Numero 5 -->
         
        <td  align="center" width="14%">
        
            <a href="http://www.unilabor.com.mx/Miembros" 
            onMouseover="Permut(1,'miembros-activo');" 
            onMouseout="Permut(0,'miembros-activo');">
            
            <img src="http://unilabor.com.mx/imgs/miembros-inactivo.jpg" 
            border=0 
            NAME="miembros-activo" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/miembros-activo.jpg');"
             />
             
            </a>
            
        </td>
        
        <!-- colimmna Numero 6 -->
         
        <td  align="center" width="14%">
        
            <a href="http://www.unilabor.com.mx/Bolsa" 
            onMouseover="Permut(1,'bolsa-activo');" 
            onMouseout="Permut(0,'bolsa-activo');">
            
            <img src="http://unilabor.com.mx/imgs/bolsa-inactivo.jpg" 
            border=0 
            NAME="bolsa-activo" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/bolsa-activo.jpg');"
             />
             
            </a>
            
        </td>
        
               
        <!-- colimmna Numero 7 -->
         
        <td  align="center" width="14%">
        
            <a href="http://www.unilabor.com.mx/contact" 
            onMouseover="Permut(1,'contactanos-inactivo');" 
            onMouseout="Permut(0,'contactanos-inactivo');">
            
            <img src="http://unilabor.com.mx/imgs/contactanos-inactivo.jpg" 
            border=0 
            NAME="contactanos-inactivo" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/contactanos-activo.jpg');"
             />
             
            </a>
            
        </td>

    </tr>
</table>
