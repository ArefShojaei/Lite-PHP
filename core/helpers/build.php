<?php

import("@core/helpers/url");


function buildURL(string $url): string {
    return baseURL() . $url;
}

function buildPath(string $basePath, string $file, string $ext = PHP_FILE_EXTENTION): string {
    return dirname(__DIR__, 2) .  $basePath . $file . $ext;
}