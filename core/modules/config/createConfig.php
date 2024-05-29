<?php

/**
 * @package
 */
import("@core/hooks/useState");


/**
 * register config
 * @function createConfig
 * @param string $name
 * @param array $params
 * @return void
 */
function createConfig(string $name, array $params): void {
    useState("configs.{$name}", $params);
}