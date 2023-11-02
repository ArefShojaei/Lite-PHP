<?php

/**
 * @desc bcrypt password
 * @function useHash
 * @param {string} $password
 * @return {string}
 */
function useHash(string $password): string {
    return password_hash($password, PASSWORD_BCRYPT);
}