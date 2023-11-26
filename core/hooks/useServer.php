<?php

/**
 * use server data in $_SERVER super global
 * @function useServer
 * @param string $key
 * @param mixed $defaultValue
 * @return void
 */
function useServer(string $name, mixed $defaultValue): void {
    $_SERVER[$name] = $defaultValue;
}