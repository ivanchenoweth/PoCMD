<?php

error_reporting(E_ALL);

/**
 * Clase de arranque de la aplicacion
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Controlador inicial de logueo
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.ControladorApp.php');

/* user defined includes */
// section -64--88-0-100--b2dec8:13357253886:-8000:000000000000180B-includes begin
// section -64--88-0-100--b2dec8:13357253886:-8000:000000000000180B-includes end

/* user defined constants */
// section -64--88-0-100--b2dec8:13357253886:-8000:000000000000180B-constants begin
// section -64--88-0-100--b2dec8:13357253886:-8000:000000000000180B-constants end

/**
 * Clase de arranque de la aplicacion
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class BootstrapApp
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute nombre
     *
     * @access public
     * @var String
     */
    public $nombre = null;

    // --- OPERATIONS ---

    /**
     * Short description of method BootstrapApp
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function BootstrapApp()
    {
        // section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001810 begin
        new ControladorApp();
        // section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001810 end
    }

} /* end of class BootstrapApp */

?>