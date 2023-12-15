<?php

/**
 * @package
 */
import("@core/private/hooks/useRequest/_host");
import("@core/private/hooks/useRequest/_ip");
import("@core/private/hooks/useRequest/_method");
import("@core/private/hooks/useRequest/_params");
import("@core/private/hooks/useRequest/_protocol");
import("@core/private/hooks/useRequest/_query");
import("@core/private/hooks/useRequest/_route");
import("@core/private/hooks/useRequest/_userAgent");


/**
 * use the request http
 * @function useRequest
 * @param string $action
 * @return string|array
 */
function useRequest(string $action): string|array {
    # call $aciton dynamicly
    return ("_" . $action)();
}