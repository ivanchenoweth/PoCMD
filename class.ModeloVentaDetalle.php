<?php

error_reporting(E_ALL);

/**
 * Representa la tabla del Detalle de Ventas
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Clase que se encarga del control del acceso a la persistencia de los datos 
 * Centraliza la conexiones en los modelos
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
require_once('class.Conexion.php');

/* user defined includes */
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001143-includes begin
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001143-includes end

/* user defined constants */
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001143-constants begin
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001143-constants end

/**
 * Representa la tabla del Detalle de Ventas
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ModeloVentaDetalle
    extends Conexion
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---

    /**
     * Short description of method insertRow
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  datos
     */
    public function insertRow($datos)
    {
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001167 begin

    	$sql = "
    		INSERT INTO `ventadetalle` (
    		`folio` ,
			`cveprod` ,
			`descripcion` ,
			`precio` ,
			`cantidad` ,
			`importe`
			) VALUES (
			'".$datos["folio"]."',
			'".$datos["cveprod"]."',  
			'".$datos["descripcion"]."',
			'".$datos["precio"]."',			
			'".$datos["cantidad"]."',
			'".$datos["importe"]."'
			);						
    	";
			$row0 = $this->ejecutarQuery($sql);
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001167 end
    }

    /**
     * Short description of method getRowsByFolio
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  folio
     */
    public function getRowsByFolio($folio)
    {
        // section -64--88-1-11-65d5b39e:134333d8c4d:-8000:00000000000011FB begin
        $sql = "SELECT * FROM `ventadetalle` WHERE folio LIKE '%".$folio."%'";
        $row0 = $this->ejecutarQuery($sql);		
		return @$row0[0];
		//return @$row0;
        // section -64--88-1-11-65d5b39e:134333d8c4d:-8000:00000000000011FB end
    }

} /* end of class ModeloVentaDetalle */

?>