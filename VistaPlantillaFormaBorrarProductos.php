<em>[VistaPlantillaFormaBorrarProductos.php</em>]
<hr>
	<form action="indexCrudProductos.php?controlador=borrar" method="post">
		  
	  BORRAR REGISTRO <br>
	  ID:
      <input type="text" name="id" readonly="readonly" value="<?php echo @$datos[id] ?>" />
      <br />
Clave:
<input name="cveprod" type="text" id="username" readonly="readonly" value="<?php echo @$datos[cveprod] ?>">
<br />
Descripci&oacute;n:
<input name="descripcion" type="text" readonly="readonly"  value="<?php echo @$datos[descripcion] ?>">
<br />
Precio:
<input name="precio" type="text" readonly="readonly" value="<?php echo @$datos[precio] ?>">
<br>
        <br />
        &iquest;Esta seguro de aceptar el borrado de este registro?<br>
        <input name="Aceptar" type="submit"  value="Aceptar" />
	    <input name="Cancelar" type="submit"  value="Cancelar" />
	</form>
