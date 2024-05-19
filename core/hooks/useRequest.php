<?php

/**
 * @package
 */
import("@core/shared/hooks/useRequest/_host");
import("@core/shared/hooks/useRequest/_ip");
import("@core/shared/hooks/useRequest/_method");
import("@core/shared/hooks/useRequest/_params");
import("@core/shared/hooks/useRequest/_protocol");
import("@core/shared/hooks/useRequest/_query");
import("@core/shared/hooks/useRequest/_route");
import("@core/shared/hooks/useRequest/_userAgent");


/**
 * request info
 * @function useRequest
 * @param string $action
 * @return string|array
 */
function useRequest(string $action): string|array {
    # call $aciton dynamicly
    return ("_" . $action)();
}