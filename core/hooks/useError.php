<?php

/**
 * use custom error message
 * @function useError
 * @param string $message error message
 * @return void
 */
function useError(string $message): void {
    throw new \Exception($message);
}