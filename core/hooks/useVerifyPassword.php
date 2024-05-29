<?php

/**
 * verify password
 * @function useVerify
 * @param string $password
 * @param string $hashedPassword
 * @return bool
 */
function useVerify(string $password, string $hashedPassword): bool {
    return password_verify($password, $hashedPassword);
}