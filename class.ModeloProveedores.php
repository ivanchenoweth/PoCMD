<?php

error_reporting(E_ALL);

/**
 * AplicacionWeb - class.ModeloProveedores.php
 *
 * $Id$
 *
 * This file is part of AplicacionWeb.
 *
 * Automatically generated on 18.11.2011, 19:23:43 with ArgoUML PHP module 
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
// section 127-0-0-1-8a00c53:133b96405c3:-8000:000000000000119F-includes begin
// section 127-0-0-1-8a00c53:133b96405c3:-8000:000000000000119F-includes end

/* user defined constants */
// section 127-0-0-1-8a00c53:133b96405c3:-8000:000000000000119F-constants begin
// section 127-0-0-1-8a00c53:133b96405c3:-8000:000000000000119F-constants end

/**
 * Short description of class ModeloProveedores
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ModeloProveedores
    extends Conexion
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---

    /**
     * Short description of method getAllRows
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return void
     */
    public function getAllRows()
    {
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011B9 begin
        $sql = "SELECT * FROM proveedores";		
		return $this->ejecutarQuery($sql);
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011B9 end
    }

    /**
     * Short description of method insertRow
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  datos
     * @return void
     */
    public function insertRow($datos)
    {
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011BB begin
        		$sql = "INSERT INTO proveedores (
			nombre,
			telefono,
			razonsocial
			) VALUES (
			'".@$datos['nombre']."',
			'".@$datos['telefono']."',
			'".@$datos['razonsocial']."'		
			)";
		$this->ejecutarQuery($sql);
		return mysql_insert_id();   
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011BB end
    }

    /**
     * Short description of method updateRow
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  datos
     * @return void
     */
    public function updateRow($datos)
    {
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011BE begin
        		$sql= "
			UPDATE proveedores SET 
				nombre = '".@$datos[nombre]."',
				telefono = '".@$datos[telefono]."',
				razonsocial = '".@$datos[razonsocial]."'				
				WHERE id = '".@$datos[id]."'
		";
		$this->ejecutarQuery($sql); 
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011BE end
    }

    /**
     * Short description of method deleteRow
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     * @return void
     */
    public function deleteRow($id)
    {
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011C1 begin
        $sql= "DELETE FROM proveedores WHERE id = $id";
		$this->ejecutarQuery($sql);
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011C1 end
    }

    /**
     * Short description of method getRowById
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     * @return void
     */
    public function getRowById($id)
    {
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011C4 begin
        $sql = "SELECT * FROM proveedores WHERE id = '$id'";
		$row0 = $this->ejecutarQuery($sql);
		return $row0[0];
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011C4 end
    }

    /**
     * Short description of method getRowByName
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  name
     * @return void
     */
    public function getRowByName($name)
    {
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011C7 begin
        $sql = "SELECT * FROM proveedores WHERE nombre LIKE '%".$name."%'";
		return $this->ejecutarQuery($sql);
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011C7 end
    }

} /* end of class ModeloProveedores */

?>