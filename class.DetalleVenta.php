<?php

error_reporting(E_ALL);

/**
 * Representa el detalle de cada producto incluido en la venta
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Representa la tabla de productos (Catalogo de productos).
 * Contiene métodos que afectan los datos en forma persistente.
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
require_once('class.ModeloProductos.php');

/**
 * Representa la tabla del Detalle de Ventas
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.ModeloVentaDetalle.php');

/* user defined includes */
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113F-includes begin
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113F-includes end

/* user defined constants */
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113F-constants begin
// section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000113F-constants end

/**
 * Representa el detalle de cada producto incluido en la venta
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class DetalleVenta
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute modVtaDet
     *
     * @access protected
     * @var ModeloVentaDetalle
     */
    protected $modVtaDet = null;

    /**
     * Short description of attribute modProductos
     *
     * @access protected
     * @var ModeloProductos
     */
    protected $modProductos = null;

    /**
     * Arreglo con los datos del detalle de la venta
     *
     * @access public
     * @var Array
     */
    public $row = null;

    // --- OPERATIONS ---

    /**
     * Short description of method DetalleVenta
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  cveprod
     * @param  cant
     */
    public function DetalleVenta($cveprod, $cant)
    {
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000117A begin
        $this->modProductos = new ModeloProductos();
        $this->row = $this->modProductos->searchByCveprod($cveprod);
        if ($this->row) {
        	$this->row["cantidad"] = $cant;
        	$this->row["importe"] = $cant * $this->row["precio"];
        }
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:000000000000117A end
    }

    /**
     * Guardar el detalle de la venta
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  folio
     */
    public function salvar($folio)
    {
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:00000000000011A3 begin
        $this->modVtaDet = new ModeloVentaDetalle();
		$this->row["folio"]=$folio;        
        $this->modVtaDet->insertRow($this->row);
        // section -64--88-0-100-1ad45ed3:133a1020fe1:-8000:00000000000011A3 end
    }

} /* end of class DetalleVenta */

?>