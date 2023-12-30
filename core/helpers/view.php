<?php

/**
 * @package
 */
import("@core/helpers/assets");
import("@core/helpers/url");
import("@core/helpers/build");
import("@core/helpers/__");


/**
 * render view
 * @function view
 * @param string $name view name
 * @param array $data view data
 * @return void
 */
function view(string $name, array $data = []): void {
   # decalre file path
    $filePath = buildPath(BASE_VIEWS_PATH, "/{$name}");

    # extract array of "key & value" as view data to "variable"
    extract($data);

    # render template
    require_once $filePath;
} 