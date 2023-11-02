<?php

/**
 * @desc env mode
 * @function useMode
 * @example production || development
 * @return {string}
 */
function useMode(): string {
    return $_ENV["APP_MODE"];
}