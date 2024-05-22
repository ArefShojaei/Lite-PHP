<?php

/**
 * @package
 */
import("@core/shared/helpers/assert/_validateAssertion");



/**
 * assert true
 * @function assertTrue
 * @param bool $actual
 * @return void
 */
function assertTrue(bool $actual): void {
    _validateAssertion($actual);
}


/**
 * assert false
 * @function assertFalse
 * @param bool $actual
 * @return void
 */
function assertFalse(bool $actual): void {
    _validateAssertion($actual);
}


/**
 * assert same
 * @function assertSame
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertSame(mixed $expected, mixed $actual): void {
    $result = $expected === $actual;

    _validateAssertion($result);
}


/**
 * assert equals
 * @function assertEquals
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertEquals(mixed $expected, mixed $actual): void {
    $result = $expected == $actual;

    _validateAssertion($result);
}


/**
 * assert array has key
 * @function assertArrayHasKey
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertArrayHasKey(mixed $expected, mixed $actual): void {
    $result = array_key_exists($expected, $actual);

    _validateAssertion($result);
}


/**
 * assert contains
 * @function assertContains
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertContains(mixed $expected, mixed $actual): void {
    $result = in_array($expected, $actual);

    _validateAssertion($result);
}


/**
 * assert count
 * @function assertContains
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertCount(mixed $expected, mixed $actual): void {
    $result = count($actual) == $expected;

    _validateAssertion($result);
}


/**
 * assert same size
 * @function assertSameSize
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertSameSize(mixed $expected, mixed $actual): void {
    $result = count($expected) == count($actual);

    _validateAssertion($result);
}


/**
 * assert empty
 * @function assertEmpty
 * @param mixed $actual
 * @return void
 */
function assertEmpty(mixed $actual): void {
    $result = empty($actual);

    _validateAssertion($result);
}


/**
 * assert greater than
 * @function assertGreaterThan
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertGreaterThan(mixed $expected, mixed $actual): void {
    $result = $expected > $actual;

    _validateAssertion($result);
}


/**
 * assert greater than or equal
 * @function assertGreaterThanOrEqual
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertGreaterThanOrEqual(mixed $expected, mixed $actual): void {
    $result = $expected >= $actual;

    _validateAssertion($result);
}


/**
 * assert less than
 * @function assertLessThan
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertLessThan(mixed $expected, mixed $actual): void {
    $result = $expected < $actual;

    _validateAssertion($result);
}


/**
 * assert less than or equal
 * @function assertLessThanOrEqual
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertLessThanOrEqual(mixed $expected, mixed $actual): void {
    $result = $expected <= $actual;

    _validateAssertion($result);
}


/**
 * assert is array
 * @function assertIsArray
 * @param mixed $actual
 * @return void
 */
function assertIsArray(mixed $actual): void {
    $result = is_array($actual);

    _validateAssertion($result);
}


/**
 * assert is list
 * @function assertIsList
 * @param mixed $actual
 * @return void
 */
function assertIsList(mixed $actual): void {
    $result = array_is_list($actual);

    _validateAssertion($result);
}


/**
 * assert is bool
 * @function assertIsBool
 * @param mixed $actual
 * @return void
 */
function assertIsBool(mixed $actual): void {
    $result = is_bool($actual);

    _validateAssertion($result);
}


/**
 * assert is callable
 * @function assertIsCallable
 * @param mixed $actual
 * @return void
 */
function assertIsCallable(mixed $actual): void {
    $result = is_callable($actual);

    _validateAssertion($result);
}


/**
 * assert is float
 * @function assertIsFloat
 * @param mixed $actual
 * @return void
 */
function assertIsFloat(mixed $actual): void {
    $result = is_float($actual);

    _validateAssertion($result);
}


/**
 * assert is int
 * @function assertIsInt
 * @param mixed $actual
 * @return void
 */
function assertIsInt(mixed $actual): void {
    $result = is_int($actual);

    _validateAssertion($result);
}


/**
 * assert is iterable
 * @function assertIsIterable
 * @param mixed $actual
 * @return void
 */
function assertIsIterable(mixed $actual): void {
    $result = (is_array($actual) || array_is_list($actual));

    _validateAssertion($result);
}


/**
 * assert is numberic
 * @function assertIsNumeric
 * @param mixed $actual
 * @return void
 */
function assertIsNumeric(mixed $actual): void {
    $result = is_numeric($actual);

    _validateAssertion($result);
}


/**
 * assert is resource
 * @function assertIsResource
 * @param mixed $actual
 * @return void
 */
function assertIsResource(mixed $actual): void {
    $result = is_resource($actual);

    _validateAssertion($result);
}


/**
 * assert is string
 * @function assertIsString
 * @param mixed $actual
 * @return void
 */
function assertIsString(mixed $actual): void {
    $result = is_string($actual);

    _validateAssertion($result);
}


/**
 * assert is null
 * @function assertNull
 * @param mixed $actual
 * @return void
 */
function assertNull(mixed $actual): void {
    $result = is_null($actual);

    _validateAssertion($result);
}


/**
 * assert string starts with
 * @function assertStringStartsWith
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertStringStartsWith(mixed $expected, mixed $actual): void {
    $result = str_starts_with($expected, $actual);

    _validateAssertion($result);
}


/**
 * assert string ends with
 * @function assertStringEndsWith
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertStringEndsWith($expected, $actual): void {
    $result = str_ends_with($expected, $actual);

    _validateAssertion($result);
}


/**
 * assert string contains string
 * @function assertStringContainsString
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertStringContainsString(mixed $expected, mixed $actual): void {
    $result = str_contains($expected, $actual);

    _validateAssertion($result);
}


/**
 * assert json
 * @function assertJson
 * @param mixed $actual
 * @return void
 */
function assertJson(mixed $actual): void {
    $result = json_decode($actual);

    _validateAssertion($result);
}