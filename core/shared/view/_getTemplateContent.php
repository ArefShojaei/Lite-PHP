<?php

function _getTemplateContent(string $file): string {
    return file_get_contents($file);
}