<?php

import("@core/modules/plugin/createPlugin");
import("@core/hooks/useSession");
import("@core/hooks/useHTTP");
import("@core/helpers/abort");


/**
 * @type Runner
 */
createPlugin("rateLimiter", function(array $params): void {
    # Init state
    $requests = useSession("requests");
    
    if (!isset($requests) || empty($requests)) useSession("requests", []);
    

    # Set state
    $currentTimestamp = time();

    $_SESSION["requests"][] = $currentTimestamp;

    # Filter states by timestamp
    $filteredTimestamps = array_filter(useSession("requests"), function($timestamp) use ($currentTimestamp, $params) {
        return ($currentTimestamp - $timestamp) < $params["timeFrame"];
    });

    useSession("requests", $filteredTimestamps);


    # Validate request count (limit)
    if (count(useSession("requests")) >= $params["limit"]) {
        http_response_code(429);
        
        abort(429, "To many requests"); 
        
        exit;
    }
}, false);