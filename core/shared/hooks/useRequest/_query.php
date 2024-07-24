<?php

import("@core/hooks/useHTTP");


/**
 * Request query
 */
function _query(): array {
    parse_str(useHTTP("QUERY_STRING"), $queries);
        
    # Remove first data from the $queries
    array_shift($queries);

    # Get the queries
    return $queries;
}