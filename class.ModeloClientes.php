<?php

error_reporting(E_ALL);

/**
 * AplicacionWeb - class.ModeloClientes.php
 *
 * $Id$
 *
 * This file is part of AplicacionWeb.
 *
 * Automatically generated on 22.11.2011, 18:18:42 with ArgoUML PHP module 
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
// section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011CB-includes begin
// section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011CB-includes end

/* user defined constants */
// section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011CB-constants begin
// section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011CB-constants end

/**
 * Short description of class ModeloClientes
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ModeloClientes
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
     */
    public function getAllRows()
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011D1 begin
        $sql = "SELECT * FROM clientes";		
		return $this->ejecutarQuery($sql);
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011D1 end
    }

    /**
     * Short description of method insertRow
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  datos
     */
    public function insertRow($datos)
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011D3 begin
        		$sql = "INSERT INTO clientes (
			nombre,
			tel
			) VALUES (
			'".@$datos['nombre']."',
			'".@$datos['tel']."'					
			)";
		$this->ejecutarQuery($sql);
		return mysql_insert_id();    
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011D3 end
    }

    /**
     * Short description of method updateRow
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  datos
     */
    public function updateRow($datos)
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011D5 begin
        		$sql= "
			UPDATE clientes SET 
				nombre = '".@$datos[nombre]."',
				tel = '".@$datos[tel]."'				
				WHERE id = '".@$datos[id]."'
		";
		$this->ejecutarQuery($sql);   
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011D5 end
    }

    /**
     * Short description of method deleteRow
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     */
    public function deleteRow($id)
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011D7 begin
        $sql= "DELETE FROM clientes WHERE id = $id";
		$this->ejecutarQuery($sql);
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011D7 end
    }

    /**
     * Short description of method getRowByName
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  name
     */
    public function getRowByName($name)
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011D9 begin
        $sql = "SELECT * FROM clientes WHERE nombre LIKE '%".$name."%'";
		return $this->ejecutarQuery($sql);
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011D9 end
    }

    /**
     * Short description of method searchById
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     */
    public function searchById($id)
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011DF begin
        $sql = "SELECT * FROM clientes WHERE id = '$id'";
		$row0 = $this->ejecutarQuery($sql);
		return $row0[0];
    	
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011DF end
    }

} /* end of class ModeloClientes */

?>