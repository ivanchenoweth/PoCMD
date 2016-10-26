<?php

error_reporting(E_ALL);

/**
 * AplicacionWeb - class.ModeloVenta.php
 *
 * $Id$
 *
 * This file is part of AplicacionWeb.
 *
 * Automatically generated on 12.12.2011, 10:23:03 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
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
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001142-includes begin
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001142-includes end

/* user defined constants */
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001142-constants begin
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001142-constants end

/**
 * Short description of class ModeloVenta
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ModeloVenta
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
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001162 begin
        $sql = "INSERT INTO venta (
        	folio ,
        	total ,
        	usuarios_id
        	) VALUES (
        	".$datos["folio"].", 
        	".$datos["total"].",
        	".$_SESSION["userRow"]["id"].");
        	";     
		$row0 = $this->ejecutarQuery($sql);
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001162 end
    }

    /**
     * Short description of method getNextFolio
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function getNextFolio()
    {
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001165 begin
        $sql = "SELECT folio FROM venta ORDER BY folio DESC LIMIT 1";         
		$row0 = $this->ejecutarQuery($sql);
		$n =  @$row0[0][folio];
		$n = $n + 1;		
		return $n;
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001165 end
    }

    /**
     * Short description of method getRowByFolio
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  folio
     */
    public function getRowByFolio($folio)
    {
        // section -64--88-1-11-65d5b39e:134333d8c4d:-8000:00000000000011FE begin
        $sql = "SELECT * FROM venta  WHERE folio LIKE '%".$folio."%'";
        $row0 = $this->ejecutarQuery($sql);		
		return @$row0[0];
        // section -64--88-1-11-65d5b39e:134333d8c4d:-8000:00000000000011FE end
    }

} /* end of class ModeloVenta */

?>