<?php

import("@core/helpers/parse");


function _getTemplateContent(string $file): string {
    return parse($file);
}