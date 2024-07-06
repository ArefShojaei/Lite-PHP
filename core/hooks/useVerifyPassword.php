<?php

/**
 * Verify password
 */
function useVerifyPassword(string $password, string $hashedPassword): bool {
    return password_verify($password, $hashedPassword);
}