<?php
/**
 * Parse and verifies the doc comment for file. 
 * 
 * PHP Version 7.3.1
 * 
 * @category View
 * @package  Teerapuch
 * @author   Teerapuch Kassakul <teerapuch@hotmail.com>
 * @license  http://www.teerapuch.com teerapuch
 * @link     http://www.teerapuch.com
 */
define('BASEURL', "http://localhost/phpzero");
define('MYNAME', "Teerapuch Kassakul");
/**
 * First Page
 *
 * @return void
 */
function makeConstant() 
{
    define('MYNAME', "PHPZero");
}
makeConstant();
echo "<br>";
echo MYNAME;
echo BASEURL;
?>