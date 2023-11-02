<?php

/**
 * @desc custom execption error
 * @function useError
 * @param {string} $message
 * @return {void}
 */
function useError(string $message): void {
    throw new \Exception($message);
}