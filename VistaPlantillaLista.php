<html>
<em>[VistaPlantillaLista.php]</em><a href="index.php?controlador=nuevo"><?php echo @$msg; ?><br>
</a>
<form action="indexCrudUsuarios.php">
<table border="1">
  <tr>
    <td>Buscar por Nombre:</td>
    <td><input name="nombrebuscar" type="text" value="<?php echo @$_REQUEST[nombrebuscar] ?>"></td>
    <td><input name="controlador" type="submit"  value="Buscar"></td>
  </tr>
</table>
</form>
<table border="1">
    <tr>
      <td><strong>
      Id
      </strong></td>
      <td><strong>
      Usuario
      </strong></td>
      <td><strong>
      Password
      </strong></td>
      <td><strong>Nombre</strong></td>
      <td><strong> Rol</strong></td>
      <td><strong> Email </strong></td>
      <td><strong>
      TimeLog</strong></td>
    </tr>
    <?php
    if (@$datos)
    foreach ($datos as $key => $row) //Associative array $key = table, $row = row of $key
    {
    ?>
    <tr>
      <td align="left">
        <?php echo $row['id'] ?>      </td>
      <td align="left">
        <?php echo $row['username'] ?>      </td>
      <td align="left">
        <?php echo $row['password'] ?>      </td>
      <td align="left"><?php echo $row['nombre'] ?></td>
      <td align="left"><?php echo $row['rol'] ?> </td>
      <td align="left"><?php echo $row['email'] ?> </td>
      <td align="left">
        <?php echo $row['timelog'] ?>      </td>
      <td align="left">
      	<a href="indexCrudUsuarios.php?controlador=borrar&id=<?php echo $row['id'] ?>">Borrar</a>      </td>
      <td align="left">
      	<a href="indexCrudUsuarios.php?controlador=editar&id=<?php echo $row['id'] ?>">Editar</a>      </td>
    </tr>
    <?php } //end foreach loop
	?>
</table>
<p><a href="indexCrudUsuarios.php?controlador=nuevo">Nuevo Registro</a></p>
<p><a href="index.php">Dashboard Administrador</a></p>
</html>

