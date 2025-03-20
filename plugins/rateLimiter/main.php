<?php

import("@core/modules/plugin/createPlugin");
import("@core/hooks/useSession");
import("@core/hooks/useHTTP");
import("@core/helpers/abort");
import("@modules/app/_enum");
import("@core/hooks/useEnum");


/**
 * @type Runner
 */
createPlugin("rateLimiter", function(array $params): void {
    $requests = useSession("requests");
    
    if (!isset($requests) || empty($requests)) useSession("requests", []);
    

    # Set state
    $currentTimestamp = time();

    $_SESSION["requests"][] = $currentTimestamp;

    # Filter states by timestamp
    $filteredTimestamps = array_filter(useSession("requests"), function($timestamp) use ($currentTimestamp, $params) {
        return ($currentTimestamp - $timestamp) < $params["timeFrameInMinutes"];
    });

    useSession("requests", $filteredTimestamps);

    # Validate request count (limit)
    if (count(useSession("requests")) >= $params["limit"]) die(abort(429, useEnum("HTTP::429")));
}, false);