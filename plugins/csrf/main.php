<?php

import("@core/modules/plugin/createPlugin");
import("@core/hooks/useSession");
import("@core/hooks/useHTTP");
import("@core/hooks/usePOST");
import("@core/helpers/abort");


/**
 * @type Runner
 */
createPlugin("csrf", function() {
    $key = "_token";

    # Set CSRF token
    if (!useSession($key)) {
        $token = bin2hex(random_bytes(32));
    
        useSession($key, $token);
    }

    # Validate CSRF token
    if (useHTTP("REQUEST_METHOD") === "POST") 
        array_key_exists($key, usePOST()) && hash_equals(useSession($key), usePOST($key)) || die(abort(403, "Invalid CSRF token!"));
}, false);