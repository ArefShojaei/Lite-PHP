<?php

import("@core/shared/helpers/assert/_validateAssertion");


function assertTrue(bool $actual): void {
    _validateAssertion($actual);
}

function assertFalse(bool $actual): void {
    _validateAssertion($actual);
}

function assertSame(mixed $expected, mixed $actual): void {
    $result = $expected === $actual;

    _validateAssertion($result);
}

function assertEquals(mixed $expected, mixed $actual): void {
    $result = $expected == $actual;

    _validateAssertion($result);
}

function assertArrayHasKey(mixed $expected, mixed $actual): void {
    $result = array_key_exists($expected, $actual);

    _validateAssertion($result);
}

function assertContains(mixed $expected, mixed $actual): void {
    $result = in_array($expected, $actual);

    _validateAssertion($result);
}

function assertCount(mixed $expected, mixed $actual): void {
    $result = count($actual) == $expected;

    _validateAssertion($result);
}

function assertSameSize(mixed $expected, mixed $actual): void {
    $result = count($expected) == count($actual);

    _validateAssertion($result);
}

function assertEmpty(mixed $actual): void {
    $result = empty($actual);

    _validateAssertion($result);
}

function assertGreaterThan(mixed $expected, mixed $actual): void {
    $result = $expected > $actual;

    _validateAssertion($result);
}

function assertGreaterThanOrEqual(mixed $expected, mixed $actual): void {
    $result = $expected >= $actual;

    _validateAssertion($result);
}

function assertLessThan(mixed $expected, mixed $actual): void {
    $result = $expected < $actual;

    _validateAssertion($result);
}

function assertLessThanOrEqual(mixed $expected, mixed $actual): void {
    $result = $expected <= $actual;

    _validateAssertion($result);
}

function assertIsArray(mixed $actual): void {
    $result = is_array($actual);

    _validateAssertion($result);
}

function assertIsList(mixed $actual): void {
    $result = array_is_list($actual);

    _validateAssertion($result);
}

function assertIsBool(mixed $actual): void {
    $result = is_bool($actual);

    _validateAssertion($result);
}

function assertIsCallable(mixed $actual): void {
    $result = is_callable($actual);

    _validateAssertion($result);
}

function assertIsFloat(mixed $actual): void {
    $result = is_float($actual);

    _validateAssertion($result);
}

function assertIsInt(mixed $actual): void {
    $result = is_int($actual);

    _validateAssertion($result);
}

function assertIsIterable(mixed $actual): void {
    $result = (is_array($actual) || array_is_list($actual));

    _validateAssertion($result);
}

function assertIsNumeric(mixed $actual): void {
    $result = is_numeric($actual);

    _validateAssertion($result);
}

function assertIsResource(mixed $actual): void {
    $result = is_resource($actual);

    _validateAssertion($result);
}

function assertIsString(mixed $actual): void {
    $result = is_string($actual);

    _validateAssertion($result);
}

function assertNull(mixed $actual): void {
    $result = is_null($actual);

    _validateAssertion($result);
}

function assertStringStartsWith(mixed $expected, mixed $actual): void {
    $result = str_starts_with($expected, $actual);

    _validateAssertion($result);
}

function assertStringEndsWith($expected, $actual): void {
    $result = str_ends_with($expected, $actual);

    _validateAssertion($result);
}

function assertStringContainsString(mixed $expected, mixed $actual): void {
    $result = str_contains($expected, $actual);

    _validateAssertion($result);
}

function assertJson(mixed $actual): void {
    $result = json_decode($actual);

    _validateAssertion($result);
}