<?php

import("@core/helpers/assets");
import("@core/helpers/url");
import("@core/helpers/build");
import("@core/helpers/translate");
import("@core/hooks/useError");


/**
 * Render view
 * @param $data view data
 */
function view(string $name, array $data = []): void {
    $filePath = buildPath(COMPILED_VIEWS_PATH, "/{$name}");

    if(!file_exists($filePath)) useError("\"{$name}\" view not found!");

    # Extract data to use in template engine
    extract($data);

    # Render template
    require_once $filePath;
} 