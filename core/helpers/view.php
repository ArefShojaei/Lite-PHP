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
 * Render view
 * @function view
 * @param string $name view name
 * @param array $data view data
 * @return void
 */
function view(string $name, array $data = []): void {
   # Decalre file path
    $filePath = buildPath(BASE_VIEWS_PATH, "/{$name}");

    # Show error when the view (template) doesn't exist
    if(!file_exists($filePath)) useError("\"{$name}\" view not found!");

    # Extract array of "key & value" as view data to "variable"
    extract($data);

    # Render template
    require_once $filePath;
} 