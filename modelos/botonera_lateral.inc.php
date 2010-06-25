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

<table align="center" colspan="0"  width="160px" height="" border="0"  
background="http://www.unilabor.com.mx/imgs/white.png" >
    <tr>
        
        <!-- Fila Numero 1 -->
         
        <td  align="left" width="160px" background="http://www.unilabor.com.mx/imgs/white.png">
        
            <a href="http://www.unilabor.com.mx/Servicios?Service=Bester" 
            onMouseover="Permut(1,'bester1');" 
            onMouseout="Permut(0,'bester1');">
            
            <img src="http://unilabor.com.mx/imgs/bester.png" 
            border=0 
            NAME="bester1" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/bester1.png');"
             />
             
            </a>
            
        </td>
        
    </tr>
    
    <tr>
        
        <!-- Fila Numero 2  -->
         
        <td  align="left" width="160px" background="http://www.unilabor.com.mx/imgs/white.png">
        
            <a href="http://www.unilabor.com.mx/Servicios?Service=AddTools" 
            onMouseover="Permut(1,'addtools');" 
            onMouseout="Permut(0,'addtools');">
            
            <img src="http://unilabor.com.mx/imgs/addtools.png" 
            border=0 
            NAME="addtools" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/addtools1.png');"
             />
             
            </a>
            
        </td>
        
    </tr>
    
    <tr>
        
        <!-- Fila Numero 3  -->
         
        <td  align="left" width="160px" background="http://www.unilabor.com.mx/imgs/white.png">
        
            <a href="http://www.unilabor.com.mx/Servicios?Service=External" 
            onMouseover="Permut(1,'external');" 
            onMouseout="Permut(0,'external');">
            
            <img src="http://unilabor.com.mx/imgs/external.png" 
            border=0 
            NAME="external" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/external1.png');"
             />
             
            </a>
            
        </td>
        
    </tr>
    
    <tr>
        
        <!-- Fila Numero 4  -->
         
        <td  align="left" width="160px" background="http://www.unilabor.com.mx/imgs/white.png">
        
            <a href="http://www.unilabor.com.mx/Servicios?Service=Solutions" 
            onMouseover="Permut(1,'solutions');" 
            onMouseout="Permut(0,'solutions');">
            
            <img src="http://unilabor.com.mx/imgs/solutions.png" 
            border=0 
            NAME="solutions" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/solutions1.png');"
             />
             
            </a>
            
        </td>
        
    </tr>
    
    
    <tr>
        
        <!-- Fila Numero 5  -->
         
        <td  align="left" width="160px" background="http://www.unilabor.com.mx/imgs/white.png">
        
            <a href="http://www.unilabor.com.mx/Servicios?Service=Side" 
            onMouseover="Permut(1,'side-side');" 
            onMouseout="Permut(0,'side-side');">
            
            <img src="http://unilabor.com.mx/imgs/side-side.png" 
            border=0 
            NAME="side-side" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/side-side1.png');"
             />
             
            </a>
            
        </td>
        
        <tr>
        
        <!-- Fila Numero 6  -->
         
        <td  align="left" width="160px" background="http://www.unilabor.com.mx/imgs/white.png">
        
            <a href="http://www.unilabor.com.mx/Servicios?Service=MetodoU" 
            onMouseover="Permut(1,'metodou');" 
            onMouseout="Permut(0,'metodou');">
            
            <img src="http://unilabor.com.mx/imgs/metodou.png" 
            border=0 
            NAME="metodou" 
            onLoad="preloadPermut(this,'http://unilabor.com.mx/imgs/metodou1.png');"
             />
             
            </a>
            
        </td>
        
    </tr>
</table>
