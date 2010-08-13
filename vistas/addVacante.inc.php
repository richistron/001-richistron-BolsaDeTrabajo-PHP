<div>   
    <form id="addVacanteSubmit" name="addVacanteSubmit" action="" 
    method="post" onsubmit="javascript: return addVacanteValid(this);">    
        Nombre : <font color="red">*</font><br />
        <input type="text" id="Nombre" name="Nombre" value="">
        <br />
        Empresa : <font color="red">*</font><br />
         <input type="text" id="Empresa" name="Empresa" value="">
        <br />
        Ciudad : <font color="red">*</font><br />
         <input type="text" id="Ciudad" name="Ciudad" value="">
        <br />
        Descripcion : <font color="red">*</font><br />
         <textarea id="Descripcion" name="Descripcion" value=""  
         rows="5" ></textarea>
        <br />
        Status : <font color="red">*</font><br />
        <select id="status" name="status">
            <option value=""></option>
            <option value="open">open</option>
            <option value="closed">closed</option>
        </select>        
        <div align="right">
            <input type="submit" id="addVacanteSubmit" name="addVacanteSubmit" value="Añadir">
        </div>        
    </form>
</div>
