<?php

import("@core/helpers/assets");
import("@core/helpers/url");
import("@core/helpers/build");
import("@core/helpers/translate");
import("@core/hooks/useError");
import("@core/shared/view/_encryptView");


/**
 * Render view
 * @param $data view data
 */
function view(string $name, array $data = []): void {
    [$encryptedViewName, $viewName] = _encryptView($name);

    $filePath = buildPath(COMPILED_VIEWS_PATH, "/" . $encryptedViewName);

    if(!file_exists($filePath)) useError("\"{$name}\" view not found!");
    
    # Extract data to use in template engine
    extract($data);

    # Render template
    require_once $filePath;
} 