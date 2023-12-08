<?php

/**
 * bcrypt password
 * @function useHash
 * @param string $password
 * @return array
 */
function useHash(string $password): array {
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    function verify($password, $hashedPassword): bool {
        return password_verify($password, $hashedPassword);
    }

    return [$hashedPassword, "verify"];
}