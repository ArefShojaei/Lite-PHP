<?php

function _getDataFromDatabase(object $result): array {
    $response = [];

    # Add new data
    while($row = mysqli_fetch_assoc($result)) {
        array_push($response, $row);
    }
        
    if(!count($response)) return $response;

    
    # Get the response
    return count($response) > 1 ? $response : $response[0];    
}