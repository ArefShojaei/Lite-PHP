<?php

/**
 * @package
 */
import("@core/helpers/assets");
import("@core/helpers/url");
import("@core/helpers/build");


/**
 * render view
 * @function view
 * @param string $name view name
 * @param array $data view data
 * @return void
 */
function view(string $name, array $data = []): void {
   # decalre file path
    $filePath = buildPath("views", "/{$name}");

    # extract array of "key & value" as view data to "variable"
    extract($data);

    # render template
    require_once $filePath;
} 