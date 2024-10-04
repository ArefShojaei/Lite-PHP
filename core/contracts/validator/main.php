<?php

import("@core/modules/validator/createValidatorContract");


/**
 * Validator contracts
 * 
 * 
 * ----------- Contracts -----------
 ** required
 ** type
 ** min
 ** max
 * ---------------------------------
 */
createValidatorContract("required", function(string $schemaKey, mixed $schemaValue, string $validationType) use (&$reports) {
    $result = [
        "message" => "Value should not be null!",
    ];
    
    if(empty($schemaValue)) $reports[$schemaKey]["required"] = $result;

    return $reports;
});

createValidatorContract("type", function(string $schemaKey, mixed $schemaValue, string $validationType) use (&$reports) {
    $result = [
        "message" => "Type should be {$validationType}!",
    ];
    
    $type = "is_{$validationType}"($schemaValue);


    if(!$type) $reports[$schemaKey]["type"] = $result;

    return $reports;
});

createValidatorContract("min", function(string $schemaKey, mixed $schemaValue, string $validationType) use (&$reports) {
    $result = [
        "message" => "Min Length should not be less than {$validationType}!",
    ];

    if(strlen($schemaValue) < $validationType) $reports[$schemaKey]["min"] = $result;

    return $reports;
});

createValidatorContract("max", function(string $schemaKey, mixed $schemaValue, string $validationType) use (&$reports) {
    $result = [
        "message" => "Max Length should not be grater than {$validationType}!",
    ];

    if(strlen($schemaValue) > $validationType) $reports[$schemaKey]["max"] = $result;

    return $reports;
});