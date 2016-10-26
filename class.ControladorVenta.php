<?php

error_reporting(E_ALL);

/**
 * Administra los eventos de petición del usuario a la Venta.
 * Utiliza un objeto Venta, un objeto VistaGenerica y un Objeto usuario.
 * El solo método constructor administra toda la venta.
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Representa la informacion y control perteneciente al usuario del sistema de
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
require_once('class.Usuario.php');

/**
 * Clase de negocio que representa una venta hacia un cliente.
 * Usa un arreglo de objetos (detVenta) Detalleventa, y un objeto ModeloVenta
 * grabar la venta.
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Venta.php');

/**
 * Administra los despliegues usando plantillas
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
require_once('class.VistaGenerica.php');

/* user defined includes */
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113D-includes begin
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113D-includes end

/* user defined constants */
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113D-constants begin
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113D-constants end

/**
 * Administra los eventos de petición del usuario a la Venta.
 * Utiliza un objeto Venta, un objeto VistaGenerica y un Objeto usuario.
 * El solo método constructor administra toda la venta.
 *
 * @access public
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
class ControladorVenta
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute venta
     *
     * @access public
     * @var Venta
     */
    public $venta = null;

    /**
     * Short description of attribute usuario
     *
     * @access public
     * @var Usuario
     */
    public $usuario = null;

    /**
     * Short description of attribute vista
     *
     * @access public
     * @var VistaGenerica
     */
    public $vista = null;

    // --- OPERATIONS ---

    /**
     * Short description of method ControladorVenta
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function ControladorVenta()
    {
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001172 begin
		$this->usuario = new Usuario();
		// No tiene autorización para este controlador
		if ($this->usuario->isRegistredUser()==null) {				
			header("Location: index.php");
		}    				
		$this->venta = new Venta();		
    	if(@$_REQUEST["Cancelar"]) {
			$this->venta->reset();			// Nueva Venta...
		}
		// Obtiene la venta de la sesion si es que existe la sesión.		
		if ($this->venta->isOnSesion()) {
			$this->venta = $this->venta->getSesion();
		}		
        if(@$_REQUEST["Procesar"]) {
			$this->venta->procesar();	// Procesa/graba la venta
			$this->venta->reset();	// Cancela
			$this->venta = new Venta();						
		}
		$this->vista = new VistaGenerica();
		if(@$_REQUEST["Marcar"]) {
			$this->venta->Marcar(@$_REQUEST[cveprod], @$_REQUEST[cantidad]);			
		}						
		// Guarda la venta en sesion
		$this->venta->setSesion();						
		// Render Page
		$this->vista->showPlantilla("VistaPlantillaVenta.php",
		$this->venta->row,
		@$this->venta->detVenta);		

        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001172 end
    }

} /* end of class ControladorVenta */

?>