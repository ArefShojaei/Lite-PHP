<?php

function _isMatchedRoute(array $matches): bool {
    return isset($matches[0]) ? true : false;
}