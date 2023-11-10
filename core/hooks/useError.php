<?php

/**
 * custom execption error
 * @function useError
 * @param string $message error message
 * @return void
 */
function useError(string $message): void {
    throw new \Exception($message);
}