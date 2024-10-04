<?php

import("@core/hooks/useState");


function createValidatorContract(string $name, callable $callback): void {
    useState("validator.contracts.{$name}", $callback);
}