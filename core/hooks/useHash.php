<?php

/**
 * hash password
 * @function useHash
 * @param string $password
 * @return array
 */
function useHash(string $password): string {
    return password_hash($password, PASSWORD_BCRYPT);
}