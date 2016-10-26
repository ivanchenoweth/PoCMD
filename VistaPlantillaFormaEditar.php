<em>[VistaPlantillaFormaEditar.php]</em>
<form action="indexCrudUsuarios.php?controlador=editar" method="post">
		
	  EDITANDO REGISTRO <br>
	  ID:
		  <input type="text" name="id" readonly value="<?php echo @$datos[id] ?>" />
	    <br />
        Username:
        <input name="username" type="text" id="username" value="<?php echo @$datos[username] ?>"  />
        <br />
Password:
<input name="password" type="text" id="password"  value="<?php echo @$datos[password] ?>"  />
<br />
Nombre:
<input name="nombre" type="text" id="nombre" value="<?php echo @$datos[nombre] ?>"  />
<br />
Rol:
<input name="rol" type="text" id="rol" value="<?php echo @$datos[rol] ?>"  />
<br />
Email:
<input name="email" type="text" value="<?php echo @$datos[email] ?>"  />
<br>
        <input name="Aceptar" type="submit" id="Aceptar" value="Aceptar" />
	    <input name="Cancelar" type="submit" id="Cancelar" value="Cancelar" />
	</form>
