<em>CATALOGO DE PROVEEDORES </em>
<hr>
	<form action="indexCrudProveedores.php?controlador=borrar" method="post">
		  
	  BORRAR REGISTRO <br>
	  ID:
      <input type="text" name="id" readonly="readonly" value="<?php echo @$datos[id] ?>" />
      <br />
Nombre:
<input name="username" type="text" id="username" readonly="readonly" value="<?php echo @$datos[nombre] ?>">
<br />
Tel&eacute;fono:
<input name="password" type="text" readonly="readonly"  value="<?php echo @$datos[telefono] ?>">
<br />
RazonSocial:
<input name="nombre" type="text" readonly="readonly" value="<?php echo @$datos[razonsocial] ?>">
<br>
        &iquest;Esta seguro de aceptar el borrado de este registro?<br>
        <input name="Aceptar" type="submit" id="Aceptar" value="Aceptar" />
	    <input name="Cancelar" type="submit" id="Cancelar" value="Cancelar" />
	</form>
