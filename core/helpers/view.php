<?php

/**
 * @package
 */
import("@core/helpers/assets");
import("@core/helpers/url");
import("@core/helpers/build");
import("@core/helpers/translate");
import("@core/hooks/useError");


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

    # show error when the view (template) doesn't exist
    if(!file_exists($filePath)) useError("The \"{$name}\" view not found!");

    # extract array of "key & value" as view data to "variable"
    extract($data);

    # render template
    require_once $filePath;
} 