<?php
 require_once 'class.ModeloUsuario.php';
 @require_once 'PHPUnit/Framework.php';

 class testModelo extends PHPUnit_Framework_TestCase
 {
 	
 	public function testConstruct()
 	{
 		$miModelo = new ModeloUsuario();
 		$this-> assertTrue($miModelo instanceOf ModeloUsuario);
 	}
 	 	
 	public function testCrud()
 	{
 		$miModelo = new ModeloUsuario();							
 		@$_REQUEST[username]="juanlopez";	
 		@$_REQUEST[password]="123456";
 		@$_REQUEST[nombre]="Juan Lopez";
 		@$_REQUEST[rol]="Vendedor";
 		@$_REQUEST[email]="vendedor@gmail.com"; 		
 		$lastId = $miModelo->insertRow($_REQUEST); 		
 		//usar lastid para obtener otros campos del ultimo registro
 		$result = $miModelo->searchById($lastId);
 		$this->assertEquals($result["username"], @$_REQUEST[username]);
 		$this->assertEquals($result["password"], @$_REQUEST[password]);
 		$this->assertEquals($result["nombre"],@$_REQUEST[nombre]);
 		$this->assertEquals($result["rol"], @$_REQUEST[rol]); 		
 		@$_REQUEST["id"]=$lastId;	
 		@$_REQUEST["username"]="pedroperez";	
 		@$_REQUEST["password"]="654321";
 		@$_REQUEST["nombre"]="Pedro Perez";
 		@$_REQUEST["rol"]="Administrador";
 		@$_REQUEST["email"]="administradorPedroPerez@gmail.com";
 		$miModelo->updateRow(@$_REQUEST);
 		$result = $miModelo->searchById($lastId);
 		$this->assertEquals(@$_REQUEST["username"], $result["username"]);
 		$this->assertEquals(@$_REQUEST["password"], $result["password"]);
 		$this->assertEquals(@$_REQUEST["nombre"], $result["nombre"]);
 		$this->assertEquals(@$_REQUEST["rol"], $result["rol"]); 		
 		$result = $miModelo->deleteRow($lastId);
 		$result = $miModelo->searchById($lastId);
 		$this->assertEquals($result, null);
  	}
 }
?>