<?php

/**
 * Get random ID
 */
function useID(): string {
    return md5(rand());
}