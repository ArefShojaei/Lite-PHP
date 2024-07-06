<?php

/**
 * Hash password
 */
function useHash(string $password): string {
    return password_hash($password, PASSWORD_BCRYPT);
}