<?php

import("@core/hooks/useState");


function createValidator(string $name, array $schema): void {
    useState("validator.schemas.{$name}", $schema);
}