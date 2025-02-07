<?php

import("@core/modules/plugin/createPlugin");
import("@core/hooks/useSession");
import("@core/hooks/useHTTP");
import("@core/hooks/usePOST");


/**
 * @type Runner
 */
createPlugin("csrf", function() {
    $token = useSession("csrf-token");

    # Set CSRF token
    if (!isset($token) || empty($token)) {
        $token = bin2hex(random_bytes(32));
    
        useSession("csrf-token", $token);
    }

    if (useHTTP("REQUEST_METHOD") === "POST") 
        !hash_equals(useSession("csrf-token"), usePOST("csrf-token")) && die("CSRF token isn't valid!");
}, false);