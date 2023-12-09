<?php

/**
 * verify password
 * @param string $password
 * @param string $hashedPassword
 * @return bool
 */
function useVerify(string $password, string $hashedPassword): bool {
    return password_verify($password, $hashedPassword);
}