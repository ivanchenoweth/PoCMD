<html>
<em>[VistaPlantillaProductosLista.php]</em><a href="class.BootstrapProd.php?controlador=nuevo"><?php echo @$msg; ?><br>
</a>
<form action="indexCrudProductos.php">
<table border="1">
  <tr>
    <td>Buscar por Nombre:</td>
    <td><input name="buscadescripcion" type="text" value="<?php echo @$_REQUEST[buscadescripcion] ?>"></td>
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
      Clave
      </strong></td>
      <td><strong>
      Descripcion
      </strong></td>
      <td><strong>Precio</strong></td>
    </tr>
    <?php
    if (@$datos)
    foreach ($datos as $key => $row) //Associative array $key = table, $row = row of $key
    {
    ?>
    <tr>
      <td align="left">
        <?php echo @$row['id'] ?>      </td>
      <td align="left">
        <?php echo @$row['cveprod'] ?>      </td>
      <td align="left">
        <?php echo $row['descripcion'] ?>      </td>
      <td align="left"><?php echo $row['precio'] ?></td>
      <td align="left">
      	<a href="indexCrudProductos.php?controlador=borrar&id=<?php echo $row['id'] ?>">Borrar</a>      </td>
      <td align="left">
      	<a href="indexCrudProductos.php?controlador=editar&id=<?php echo $row['id'] ?>">Editar</a>      </td>
    </tr>
    <?php } //end foreach loop
	?>
</table>
<p><a href="indexCrudProductos.php?controlador=nuevo">Nuevo Registro</a></p>
<p><a href="index.php">Dashboard </a></p>
</html>

