<div align="center">[VistaPlantillaDashBoardUserRegistred.php]
  <br /> 
  <strong>Aplicacion Web 1-0
PHP-MYSQL-HTML 
  <br />
  <br />
    </strong></div>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="1" align="center">
    <tr>
      <td width="39%" align="center">Bienvenido [<strong><?php echo $_SESSION["userRow"]["nombre"] ?></strong>]</td>
      <td width="47%" align="center">Usuario Registrado </td>
      <td width="14%" align="center"><a href="index.php?controlador=logout">Logout</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="indexCrudClientes.php">CRUD Clientes </a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="indexCrudProductos.php">CRUD Productos</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="indexCrudProveedores.php">CRUD Proveedores </a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="indexMDventa.php">Venta Master-Detail </a></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
