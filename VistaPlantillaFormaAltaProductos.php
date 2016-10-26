<em>[VistaPlantillaFormaAltaProductos.php]</em>
<form action="indexCrudProductos.php?controlador=nuevo" method="post">
		
	  ALTA REGISTRO <br>
	  ID:
		  <input type="text" name="id" readonly value="<?php echo @$datos[id] ?>" />
	    <br />
        Clave:
        <input name="cveprod" type="text"  value="<?php echo @$datos[cveprod] ?>"  />
        <br />
Descripcion:
<input name="descripcion" type="text"   value="<?php echo @$datos[descripcion] ?>"  />
<br />
Precio:
<input name="precio" type="text"  value="<?php echo @$datos[precio] ?>"  />
<br>
        <input name="Aceptar" type="submit" id="Aceptar" value="Aceptar" />
	    <input name="Cancelar" type="submit" id="Cancelar" value="Cancelar" />
</form>
