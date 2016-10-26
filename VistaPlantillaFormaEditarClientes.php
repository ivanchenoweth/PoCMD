<em>CLIENTES</em>
<form action="indexCrudClientes.php?controlador=editar" method="post">
		
	  EDITANDO REGISTRO <br>
	  ID:
		  <input type="text" name="id" readonly value="<?php echo @$datos[id] ?>" />
	    <br />
        Nombre:
        <input name="nombre" type="text" value="<?php echo @$datos[nombre] ?>"  />
        <br />
Tel&eacute;fono:
<input name="tel" type="text" value="<?php echo @$datos[tel] ?>"  />
<br />
<br>
        <input name="Aceptar" type="submit" id="Aceptar" value="Aceptar" />
	    <input name="Cancelar" type="submit" id="Cancelar" value="Cancelar" />
</form>
