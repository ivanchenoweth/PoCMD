<?php

error_reporting(E_ALL);

/**
 * Clase de negocio que representa una venta hacia un cliente.
 * Usa un arreglo de objetos (detVenta) Detalleventa, y un objeto ModeloVenta
 * grabar la venta.
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Representa el detalle de cada producto incluido en la venta
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.DetalleVenta.php');

/**
 * include ModeloVenta
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.ModeloVenta.php');

/**
 * Representa la tabla del Detalle de Ventas
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.ModeloVentaDetalle.php');

/* user defined includes */
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113E-includes begin
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113E-includes end

/* user defined constants */
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113E-constants begin
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113E-constants end

/**
 * Clase de negocio que representa una venta hacia un cliente.
 * Usa un arreglo de objetos (detVenta) Detalleventa, y un objeto ModeloVenta
 * grabar la venta.
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Venta
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Arreglo de objetos de DetalleVenta para trabajar con el detalles de la
     *
     * @access public
     * @var DetalleVenta
     */
    public $detVenta = null;

    /**
     * Instancia para trabajar con el modelo de la venta
     *
     * @access protected
     * @var ModeloVenta
     */
    protected $modVenta = null;

    /**
     * Representa los datos principales de la venta
     *
     * @access public
     * @var Array
     */
    public $row = null;

    // --- OPERATIONS ---

    /**
     * Short description of method Venta
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function Venta()
    {
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001170 begin
        /////////////  	    	          
        $this->modVenta = new ModeloVenta();        
        //$this->detVenta = new DetalleVenta();
        $this->row["folio"] = $this->modVenta->getNextFolio();
        $this->row["fecha"] = date("Y-m-d H:i:s");            	    
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001170 end
    }

    /**
     * Agrega un Detalle de venta
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  cveprod
     * @param  cant
     */
    public function Marcar($cveprod, $cant)
    {
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001174 begin
        $newDetail = new DetalleVenta($cveprod, $cant);        
        if ($newDetail->row) {
	        $this->detVenta[] = $newDetail;
	        $this->row["total"]=0;        	
	    	for ($i=0; $i<count($this->detVenta); $i++){  // inserta los detalles      
	        		$this->row["total"] =  $this->row["total"] + 
	        		$this->detVenta[$i]->row["importe"];
	        }
        }	
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:0000000000001174 end
    }

    /**
     * Guarda la venta en sus respectivos modelos
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function procesar()
    {
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:00000000000011A6 begin
        $this->modVenta->insertRow($this->row);  // inserta maestro venta
        for ($i=0; $i<count($this->detVenta); $i++){  // inserta los detalles      
        		$this->detVenta[$i]->salvar($this->row["folio"]);
        }
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:00000000000011A6 end
    }

    /**
     * Resetea la venta, unset($_SESSION["Venta"]);
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function reset()
    {
        // section -64--88-0-100--67662abc:133a3ac3de0:-8000:0000000000001170 begin
        // $_SESSION["Venta"] = "";
        unset($_SESSION["Venta"]);
        // section -64--88-0-100--67662abc:133a3ac3de0:-8000:0000000000001170 end
    }

    /**
     * Construye una variable de sesion Venta: $_SESSION['Venta'] = $this;
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function setSesion()
    {
        // section 10-25-2--51--73201f22:133a52aa412:-8000:000000000000116F begin
        $_SESSION['Venta'] = $this;
        // section 10-25-2--51--73201f22:133a52aa412:-8000:000000000000116F end
    }

    /**
     * Verifica si la Venta esta en sesion:
     *  if (@$_SESSION['Venta']) 
     *     return true;
     *  else 
     *    return false;
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function isOnSesion()
    {
        // section 10-25-2--51--73201f22:133a52aa412:-8000:0000000000001171 begin
    	 if (@$_SESSION['Venta']) {
    	 	return true;
    	 } else {
    	 	return false;
    	 }
        // section 10-25-2--51--73201f22:133a52aa412:-8000:0000000000001171 end
    }

    /**
     * Activa la sesión de la venta, retorna el objeto $_SESSION[Venta]
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function getSesion()
    {
        // section 10-25-2--51--73201f22:133a52aa412:-8000:0000000000001173 begin
        return $_SESSION['Venta'];        
        // section 10-25-2--51--73201f22:133a52aa412:-8000:0000000000001173 end
    }

} /* end of class Venta */

?>