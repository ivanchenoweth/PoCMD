<?php

error_reporting(E_ALL);

/**
 * Representa la tabla de productos (Catalogo de productos).
 * Contiene métodos que afectan los datos en forma persistente.
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
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
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F8-includes begin
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F8-includes end

/* user defined constants */
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F8-constants begin
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F8-constants end

/**
 * Representa la tabla de productos (Catalogo de productos).
 * Contiene métodos que afectan los datos en forma persistente.
 *
 * @access public
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
class ModeloProductos
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
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:000000000000111C begin
       $sql = "SELECT * FROM productos";		
		return $this->ejecutarQuery($sql);
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:000000000000111C end
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
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:000000000000111E begin
        $sql = "INSERT INTO productos (
			cveprod,
			descripcion,
			usuario_id,
			precio
			) VALUES (
			'".@$datos['cveprod']."',
			'".@$datos['descripcion']."',
			'".@$_SESSION[userRow][id]."',						
			'".@$datos['precio']."'
			)";
		$this->ejecutarQuery($sql);
		return mysql_insert_id();  
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:000000000000111E end
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
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001120 begin
		$sql= "
			UPDATE productos SET 
				cveprod = '".@$datos[cveprod]."',
				descripcion = '".@$datos[descripcion]."',
				usuario_id = '".@$_SESSION[userRow][id]."',			
				precio = '".@$datos[precio]."'
				WHERE id = '".@$datos[id]."'
		";
		$this->ejecutarQuery($sql);          
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001120 end
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
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001122 begin
        $sql= "DELETE FROM productos WHERE id = $id";
		$this->ejecutarQuery($sql);
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001122 end
    }

    /**
     * Short description of method getRowByDesc
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  desc
     */
    public function getRowByDesc($desc)
    {
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001127 begin
        $sql = "SELECT * FROM productos WHERE descripcion LIKE '%".$desc."%'";        
		return $this->ejecutarQuery($sql);
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001127 end
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
        // section -64--88-0-100--83282a2:133a0199a70:-8000:0000000000001136 begin
        $sql = "SELECT * FROM productos WHERE id = '$id'";
		$row0 = $this->ejecutarQuery($sql);
		return $row0[0];
        // section -64--88-0-100--83282a2:133a0199a70:-8000:0000000000001136 end
    }

    /**
     * Buscar por clave de producto
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  cveprod
     */
    public function searchByCveprod($cveprod)
    {
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001178 begin
        $sql = "SELECT * FROM productos WHERE cveprod = '".$cveprod."'";        
		$row0 = $this->ejecutarQuery($sql);		
		return $row0[0];
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001178 end
    }

} /* end of class ModeloProductos */

?>