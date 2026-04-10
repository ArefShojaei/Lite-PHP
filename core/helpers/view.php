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
function view(string $name, array $data = []): string {
    [$encryptedViewName, $_] = _encryptView($name);

    $filePath = buildPath(COMPILED_VIEWS_PATH, "/" . $encryptedViewName);

    if(!file_exists($filePath)) useError("\"{$name}\" view not found!");
    
    extract($data);

    # Render template
    ob_start();

    require_once $filePath;

    $page = ob_get_clean();

    return $page;
}