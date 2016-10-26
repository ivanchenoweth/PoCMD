<html>
<em>[VistaPlantillaVenta.php]</em><a href="class.BootstrapProd.php?controlador=nuevo"><?php echo @$msg; ?><br>
<br>
</a>
<form action="indexMDventa.php">	
  <table border="1">
  <tr>
    <td>Folio:</td>
    <td><?php echo @$datos['folio']; ?></td>
    </tr>
  <tr>
    <td>Fecha:</td>
    <td><?php echo @$datos['fecha'] ?></td>
    </tr>
</table>

<table border="1">
    <tr>
      <td><strong>
      Clave
      </strong></td>
      <td><strong>
      Descripcion
      </strong></td>
      <td><strong>Precio</strong></td>
      <td><strong>Cantidad</strong></td>
      <td><strong>Importe</strong></td>
      <td>&nbsp;</td>
    </tr>
    <?php

    if (@$datosdet)
    foreach ($datosdet as $key => $DetailVentas) //Associative array $key = table, $row = row of $key
    {	
	$rowd = $DetailVentas->row;
	// var_dump($row);
    ?>
    <tr>
      <td align="left">
        <?php echo @$rowd['cveprod'] ?>      </td>
      <td align="left">
        <?php echo $rowd['descripcion'] ?>      </td>
      <td align="right"><?php echo $rowd['precio'] ?></td>
      <td align="right"><?php echo $rowd['cantidad'] ?></td>
      <td align="right"><?php echo $rowd['importe'] ?></td>
      <td align="left">&nbsp;</td>
    </tr>
	    <?php } //end foreach loop
	?>
    <tr>
      <td align="left"><input name="cveprod" type="text" size="20" maxlength="20"></td>
      <td align="left">&nbsp;</td>
      <td align="left">&nbsp;</td>
      <td align="right"><input name="cantidad" type="text" value="1" size="4" maxlength="4"></td>
      <td align="left">&nbsp;</td>
      <td align="left"><input type="submit" name="Marcar" value="Marcar"></td>
    </tr>
    <tr>
      <td align="left">&nbsp;</td>
      <td align="left">&nbsp;</td>
      <td align="left">&nbsp;</td>
      <td align="right"><strong>TOTAL</strong></td>
      <td align="right"><?php echo @$datos['total'] ?></td>
      <td align="left">&nbsp;</td>
    </tr>
</table>
<br>
<input name="Procesar" type="submit" id="Procesar" value="Procesar">
<input type="submit" name="Cancelar" value="Cancelar">
</form>
<p><a href="index.php">Dashboard </a></p>
</html>

