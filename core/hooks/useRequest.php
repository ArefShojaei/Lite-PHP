<?php

import("@core/shared/hooks/useRequest/_host");
import("@core/shared/hooks/useRequest/_ip");
import("@core/shared/hooks/useRequest/_method");
import("@core/shared/hooks/useRequest/_protocol");
import("@core/shared/hooks/useRequest/_query");
import("@core/shared/hooks/useRequest/_route");
import("@core/shared/hooks/useRequest/_userAgent");


/**
 * Get HTTP Request info
 */
function useRequest(string $action): string|array {
    # Call $aciton dynamicly
    return ("_" . $action)();
}