<?php

error_reporting(E_ALL);

/**
 * AplicacionWeb - class.ControladorClientes.php
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
 * include ModeloClientes
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.ModeloClientes.php');

/**
 * Representa la informacion y control perteneciente al usuario del sistema de
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
require_once('class.Usuario.php');

/**
 * Administra los despliegues usando plantillas
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
require_once('class.VistaGenerica.php');

/* user defined includes */
// section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011CC-includes begin
// section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011CC-includes end

/* user defined constants */
// section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011CC-constants begin
// section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011CC-constants end

/**
 * Short description of class ControladorClientes
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ControladorClientes
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute miModelo
     *
     * @access public
     * @var ModeloClientes
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
     * Short description of method lista
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return void
     */
    public function lista()
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011E7 begin
        $datos=$this->miModelo->getAllRows();
		$this->miVista->showPlantilla("VistaPlantillaListaClientes.php",$datos);
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011E7 end
    }

    /**
     * Short description of method editar
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return void
     */
    public function editar()
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011E9 begin
		if (@$_REQUEST[Aceptar]) {								// Boton Aceptar
				$this->miModelo->updateRow(@$_REQUEST);		// Graba en el modelo
				$this->mensage = "El registro ha sido modificado";
				$this->Lista();									// Muestra la lista
			}
			else {	
					$datos = $this->miModelo->searchById(@$_REQUEST[id]);
					$this->miVista->showPlantilla("VistaPlantillaFormaEditarClientes.php",$datos);
			}	           
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011E9 end
    }

    /**
     * Short description of method alta
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return void
     */
    public function alta()
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011EB begin
         if (@$_REQUEST[Aceptar]) {
			$this->miModelo->insertRow($_REQUEST);					
			$this->mensage = "El registro ha sido dado de alta"; 
			$this->Lista();
			}
		else
			$this->miVista->showPlantilla("VistaPlantillaFormaAltaClientes.php",null);
       
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011EB end
    }

    /**
     * Short description of method buscar
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return void
     */
    public function buscar()
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011ED begin
		$datos=$this->miModelo->getRowByName(@$_REQUEST["nombrebuscar"]);	
		$this->miVista->showPlantilla("VistaPlantillaListaClientes.php",$datos);        
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011ED end
    }

    /**
     * Short description of method borrar
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return void
     */
    public function borrar()
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011EF begin
		if (@$_REQUEST[Aceptar]) {
			$this->miModelo->deleteRow(@$_REQUEST[id]);
			$this->mensage = "El registro ha sido borrado";
			$this->Lista();
		}
		else {				
			$datos = $this->miModelo->searchById(@$_REQUEST[id]);
			$this->miVista->showPlantilla("VistaPlantillaFormaBorrarClientes.php",$datos);						
		}	         
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011EF end
    }

    /**
     * Short description of method ControladorClientes
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return void
     */
    public function ControladorClientes()
    {
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011F1 begin
        $this->miModelo = new ModeloClientes();	
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
        // section 127-0-0-1--5795327d:133cdcffdad:-8000:00000000000011F1 end
    }

} /* end of class ControladorClientes */

?>