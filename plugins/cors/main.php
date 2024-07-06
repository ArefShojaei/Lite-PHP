<?php

import("@core/modules/plugin/createPlugin");
import("@core/hooks/useHeader");


/**
 * @type Runner
 */
createPlugin("cors", function() {
    useHeader("Access-Control-Allow-Origin", "*");
    useHeader("Access-Control-Allow-METHODS", "*");
    useHeader("Access-Control-Allow-HEADERS", "*");
}, false);