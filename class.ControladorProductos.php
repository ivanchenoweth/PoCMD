<?php

error_reporting(E_ALL);

/**
 * AplicacionWeb - class.ControladorProductos.php
 *
 * $Id$
 *
 * This file is part of AplicacionWeb.
 *
 * Automatically generated on 14.11.2011, 01:54:53 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include ModeloProductos
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.ModeloProductos.php');

/**
 * Representa la informaciony control de negocios perteneciente a usuarios del
 * de logueo
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Usuario.php');

/**
 * include VistaGenerica
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.VistaGenerica.php');

/* user defined includes */
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F6-includes begin
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F6-includes end

/* user defined constants */
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F6-constants begin
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F6-constants end

/**
 * Short description of class ControladorProductos
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ControladorProductos
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute miModelo
     *
     * @access public
     * @var ModeloProductos
     */
    public $miModelo = null;

    /**
     * Short description of attribute miVista
     *
     * @access public
     * @var VistaGenerica
     */
    public $miVista = null;

    // --- OPERATIONS ---

    /**
     * Short description of method Lista
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function Lista()
    {
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001104 begin
        $datos=$this->miModelo->getAllRows();
		$this->miVista->showPlantilla("VistaPlantillaListaProductos.php",$datos);	
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001104 end
    }

    /**
     * Short description of method Alta
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function Alta()
    {
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001106 begin
        if (@$_REQUEST[Aceptar]) {
			$this->miModelo->insertRow($_REQUEST);					
			$this->mensage = "El registro ha sido dado de alta"; 
			$this->Lista();
			}
		else
			$this->miVista->showPlantilla("VistaPlantillaFormaAltaProductos.php",null);
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001106 end
    }

    /**
     * Short description of method Editar
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function Editar()
    {
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001108 begin
		if (@$_REQUEST[Aceptar]) {								// Boton Aceptar
				$this->miModelo->updateRow(@$_REQUEST);		// Graba en el modelo
				$this->mensage = "El registro ha sido modificado";
				$this->Lista();									// Muestra la lista
			}
			else {	
					$datos = $this->miModelo->searchById(@$_REQUEST[id]);
					$this->miVista->showPlantilla("VistaPlantillaFormaEditarProductos.php",$datos);
			}	         
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001108 end
    }

    /**
     * Short description of method Borrar
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function Borrar()
    {
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:000000000000110A begin
        if (@$_REQUEST[Aceptar]) {
			$this->miModelo->deleteRow(@$_REQUEST[id]);
			$this->mensage = "El registro ha sido borrado";
			$this->Lista();
		}
		else {				
			$datos = $this->miModelo->searchById(@$_REQUEST[id]);
			$this->miVista->showPlantilla("VistaPlantillaFormaBorrarProductos.php",$datos);						
		}	 
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:000000000000110A end
    }

    /**
     * Short description of method Buscar
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function Buscar()
    {
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:000000000000110C begin
		$datos=$this->miModelo->getRowByDesc(@$_REQUEST["buscadescripcion"]);	
		$this->miVista->showPlantilla("VistaPlantillaListaProductos.php",$datos);	           
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:000000000000110C end
    }

    /**
     * Short description of method ControladorProductos
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function ControladorProductos()
    {
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001136 begin
        $this->miModelo = new ModeloProductos();	
		$this->miVista = new VistaGenerica();	
		$this->usuario = new Usuario();
		
     	if ($this->usuario->isRegistredUser()==null) {	// No tiene autorización para este controlador
        	header("Location: index.php");
        }
        
        // var_dump($_SESSION[userRow][id]);
        
    	if(@$_REQUEST["controlador"]=="" || @$_REQUEST[Cancelar]) 		// Boton generico cancelar
		{
			$this->Lista();
		}
		else 
		{
			if(@$_REQUEST["controlador"]=="Buscar") 	
				$this->Buscar();
			if(@$_REQUEST["controlador"]=="nuevo")
				$this->Alta();			
			if(@$_REQUEST["controlador"]=="editar")
				$this->Editar();
			if(@$_REQUEST["controlador"]=="borrar") 
				$this->Borrar();
		}
        
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001136 end
    }

} /* end of class ControladorProductos */

?>