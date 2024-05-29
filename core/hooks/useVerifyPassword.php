<?php

/**
 * verify password
 * @function useVerify
 * @param string $password
 * @param string $hashedPassword
 * @return bool
 */
function useVerifyPassword(string $password, string $hashedPassword): bool {
    return password_verify($password, $hashedPassword);
}