<em>[VistaPlantillaFormaEditar.php]</em>
<form action="indexCrudProveedores.php?controlador=editar" method="post">
		
	  EDITANDO REGISTRO <br>
	  ID:
		  <input type="text" name="id" readonly value="<?php echo @$datos[id] ?>" />
	    <br />
        Nombre:
        <input name="nombre" type="text"  value="<?php echo @$datos[nombre] ?>"  />
        <br />
Telefono:
<input name="telefono" type="text"   value="<?php echo @$datos[telefono] ?>"  />
<br />
RazonSocial:
<input name="razonsocial" type="text" value="<?php echo @$datos[razonsocial] ?>"  />
<br />
<br>
        <input name="Aceptar" type="submit" id="Aceptar" value="Aceptar" />
	    <input name="Cancelar" type="submit" id="Cancelar" value="Cancelar" />
</form>
