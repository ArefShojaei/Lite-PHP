<?php

import("@core/helpers/parse");


/**
 * Parse HTML by URL
 */
function useHTML(string $url): string|false {
    return @parse($url);
}