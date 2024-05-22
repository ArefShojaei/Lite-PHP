<?php

/**
 * @package
 */
import("@core/hooks/useState");
import("@core/hooks/useGlobal");


/**
 * set header to table
 * @function _header
 * @private
 * @param string $left
 * @param string $fill
 * @param string $rigth
 * @param string $length
 * @return void
 */
function _header($left = "+", $fill = "-", $right = "+", $length = 18)
{
    $length = useGlobal("table-length");

    echo $left . str_pad("", $length, $fill, STR_PAD_BOTH) . $right . PHP_EOL;
}

/**
 * set footer to table
 * @function _footer
 * @private
 * @param string $left
 * @param string $fill
 * @param string $rigth
 * @param string $length
 * @return void
 */
function _footer($start = "+", $char = "-", $end = "+", $length = 18)
{
    $length = useGlobal("table-length");

    echo $start . str_pad("", $length, $char, STR_PAD_BOTH) . $end . PHP_EOL;
}

/**
 * set row to table
 * @function row
 * @param string $left
 * @param string $char
 * @param string $rigth
 * @param string $length
 * @return void
 */
function row($title, $start = "|", $char = " ", $end = "|", $length = 18)
{
    $length = useGlobal("table-length");

    echo $start . str_pad($title, $length, $char, STR_PAD_BOTH) . $end . PHP_EOL;
}

/**
 * set separator to table
 * @function separator
 * @param string $left
 * @param string $char
 * @param string $rigth
 * @param string $length
 * @return void
 */
function separator($start = "+", $char = "=", $end = "+", $length = 18)
{
    $length = useGlobal("table-length");
    
    echo $start . str_pad("", $length, $char, STR_PAD_BOTH) . $end . PHP_EOL;
}

/**
 * create table
 * @function table
 * @param callable $callback
 * @return void
 */
function table($callback, $length = 18)
{
    # declare state
    useState("table-length", [], $length);

    # set header
    _header();
    
    # set body
    $callback();
    
    # set footer
    _footer();
}
