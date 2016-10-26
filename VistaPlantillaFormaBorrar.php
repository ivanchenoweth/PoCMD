<em>[VistaPlantillaFormaBorrar.php</em>]
<hr>
	<form action="indexCrudUsuarios.php?controlador=borrar" method="post">
		  
	  BORRAR REGISTRO <br>
	  ID:
      <input type="text" name="id" readonly="readonly" value="<?php echo @$datos[id] ?>" />
      <br />
Username:
<input name="username" type="text" id="username" readonly="readonly" value="<?php echo @$datos[username] ?>">
<br />
Password:
<input name="password" type="text" readonly="readonly"  value="<?php echo @$datos[password] ?>">
<br />
Nombre:
<input name="nombre" type="text" readonly="readonly" value="<?php echo @$datos[nombre] ?>">
<br />
Rol:
<input name="rol" type="text" readonly="readonly" value="<?php echo @$datos[rol] ?>">
<br />
Email:
<input name="rol2" type="text" readonly="readonly" value="<?php echo @$datos[email] ?>">
<br>
        &iquest;Esta seguro de aceptar el borrado de este registro?<br>
        <input name="Aceptar" type="submit" id="Aceptar" value="Aceptar" />
	    <input name="Cancelar" type="submit" id="Cancelar" value="Cancelar" />
	</form>
