<?php
 require_once 'class.Venta.php';
 @require_once 'PHPUnit/Framework.php';

 class testModelo extends PHPUnit_Framework_TestCase
 {
 	
 	public function testConstruct()
 	{
 		$miModelo = new Venta();
 		$this->assertTrue($miModelo instanceOf Venta);
 	}
 	
 	
 	public function testMasterDetail()
 	{
 		// proveedor de Datos (simulando captura)
 		// Usando de objeto de negocios para grabar los datos  
 		// Obtener datos de la venta para afirmar si lo grabado = captura 		
 		// 1.- MAESTRO, 2.- DETALLE 								
 		@$_REQUEST[cveprod]="CH";	
 		@$_REQUEST[cantidad]="1";
 		$_SESSION["userRow"]["id"]='4'; 
 		$testVenta = new Venta();													// 1.- MAESTRO
 		$testfolio = $testVenta->row["folio"];										// folio de prueba 
 		$testVenta->Marcar(@$_REQUEST[cveprod], @$_REQUEST[cantidad]); 				// var_dump($testVenta);	 		
 		$testVenta->procesar(); 
 		$miModeloVenta = new ModeloVenta();
 		$arr_VentaInsertada = $miModeloVenta->getRowByFolio($testfolio);			// var_dump($arr_VentaInsertada);
 		$this->assertEquals($arr_VentaInsertada["folio"], $testfolio);				// ***********
 		
 		$miModeloVentaDetalle = new ModeloVentaDetalle();
 		$arr_VentaDetalle = $miModeloVentaDetalle->getRowsByFolio($testfolio);		// 2.- DETALLE  // 
 		//var_dump($arr_VentaDetalle);
 		$this->assertEquals($arr_VentaDetalle["cveprod"], @$_REQUEST[cveprod]);		// **************
		$this->assertEquals($arr_VentaDetalle["cantidad"], @$_REQUEST[cantidad]); 	// ************
  	}
 }
?>