<div align="center"><em>[VistaPlantillaDashBoardAdmin.php]</em><br />
      <strong>Aplicacion Web 1-0
PHP-MYSQL-HTML</strong><br />
</div>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="1" align="center">
    <tr>
      <td width="33%" align="center">Bienvenido [<strong><?php echo $_SESSION["userRow"]["nombre"] ?></strong>] </td>
      <td width="47%" align="center">Usuario Administrador </td>
      <td width="20%" align="center"><a href="index.php?controlador=logout">Logout</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>MENU DEL ADMINISTRADOR </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="indexCrudUsuarios.php">CRUD Usuarios </a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
