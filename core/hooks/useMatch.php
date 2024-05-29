<?php

/**
 * Get matched expression as Regex
 * @function useMatch
 * @param string $pattern
 * @param string $subject
 * @param bool $isMatchedAll
 * @return array
 */
function useMatch(string $pattern, string $subject, bool $isMathedAll = false): array
{
    $isMathedAll ? preg_match_all($pattern, $subject, $matches) : preg_match($pattern, $subject, $matches);

    return $matches;
}