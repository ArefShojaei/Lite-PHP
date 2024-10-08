<?php

import("@core/helpers/parse");


/**
 * Parse HTML content by URL
 */
function useHTML(string $url): string|false {
    return @parse($url);
}