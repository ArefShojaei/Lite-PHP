<?php

import("@core/hooks/useGlobal");
import("@core/contracts/validator/main");


/**
 * Validate input data
 */
function useValidator(string $name, array $data): array {
    $reports = [];

    $schema = useGlobal("validator.schemas.{$name}");
    
    $contracts = useGlobal("validator.contracts");


    foreach ($schema as $schemaKey => $schemaRules) {
        # Check to not exist schema keys in input data
        if(!array_key_exists($schemaKey, $data)) {
            $reports[$schemaKey] = ["message" => "The key must define with a value!"];

            return $reports;
        }


        # Send input data to validator contracts
        foreach ($schemaRules as $key => $value) {
            $callback = $contracts[$key];

            $reports = $callback($schemaKey, $data[$schemaKey], $value);
        }
    }


    return $reports ?? []; 
}