<?php

error_reporting(E_ALL);

/**
 * AplicacionWeb - class.ControladorProveedor.php
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
 * include ModeloProveedores
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.ModeloProveedores.php');

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
// section 127-0-0-1-8a00c53:133b96405c3:-8000:000000000000119E-includes begin
// section 127-0-0-1-8a00c53:133b96405c3:-8000:000000000000119E-includes end

/* user defined constants */
// section 127-0-0-1-8a00c53:133b96405c3:-8000:000000000000119E-constants begin
// section 127-0-0-1-8a00c53:133b96405c3:-8000:000000000000119E-constants end

/**
 * Short description of class ControladorProveedor
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ControladorProveedor
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute miModelo
     *
     * @access public
     * @var ModeloProveedores
     */
    public $miModelo = null;

    /**
     * Short description of attribute miVista
     *
     * @access public
     * @var VistaGenerica
     */
    public $miVista = null;

    /**
     * Para el uso del usuario logueado
     *
     * @access public
     * @var Usuario
     */
    public $usuario = null;

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
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011AA begin
        $datos=$this->miModelo->getAllRows();      		
		$this->miVista->showPlantilla("VistaPlantillaListaProveedores.php",$datos);
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011AA end
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
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011AC begin
        if (@$_REQUEST[Aceptar]) {
				$this->miModelo->insertRow($_REQUEST);
				$this->mensage = "El registro ha sido dado de alta"; 
				$this->Lista();
				}
			else     
				$this->miVista->showPlantilla("VistaPlantillaFormaAltaProveedores.php"); 
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011AC end
    }

    /**
     * Short description of method edicion
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return void
     */
    public function edicion()
    {
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011AE begin
        if (@$_REQUEST[Aceptar]) {								// Boton Aceptar
				$this->miModelo->updateRow(@$_REQUEST);		// Graba en el modelo
				$this->mensage = "El registro ha sido modificado";
				$this->Lista();									// Muestra la lista
			}
			else {	
				$datos = $this->miModelo->getRowById(@$_REQUEST[id]);
				$this->miVista->showPlantilla("VistaPlantillaFormaEditarProveedores.php",$datos);
			}	   
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011AE end
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
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011B0 begin
		$datos=$this->miModelo->getRowByName(@$_REQUEST["nombrebuscar"]);	
		$this->miVista->showPlantilla("VistaPlantillaListaProveedores.php",$datos);          
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011B0 end
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
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011B2 begin
        if (@$_REQUEST[Aceptar]) {
				$this->miModelo->deleteRow(@$_REQUEST[id]);
				$this->mensage = "El registro ha sido borrado";
				$this->Lista();				
			}
			else {	
				$datos = $this->miModelo->getRowById(@$_REQUEST[id]);				
				$this->miVista->showPlantilla("VistaPlantillaFormaBorrarProveedores.php",$datos);
			}	
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011B2 end
    }

    /**
     * Short description of method ControladorProveedor
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return void
     */
    public function ControladorProveedor()
    {
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011B4 begin
        $this->miModelo = new ModeloProveedores();		
		$this->miVista = new VistaGenerica();		
		$this->usuario = new Usuario();
		// No tiene autorización para este controlador
        if ($this->usuario->isRegistredUser()==null) {			
        	header("Location: index.php");
        }
        
    if(@$_REQUEST["controlador"]=="" || @$_REQUEST[Cancelar]) 		// Boton generico cancelar
		{
			$this->Lista();
		}
		else 
		{
			if(@$_REQUEST["controlador"]=="Buscar") // Boton Buscar	
				$this->buscar();
			if(@$_REQUEST["controlador"]=="nuevo")
				$this->alta();		
			if(@$_REQUEST["controlador"]=="editar")
				$this->edicion();
			if(@$_REQUEST["controlador"]=="borrar") 
				$this->borrar();
		}
        
		
        // section 127-0-0-1-8a00c53:133b96405c3:-8000:00000000000011B4 end
    }

} /* end of class ControladorProveedor */

?>