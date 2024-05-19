<?php

/**
 * get data from database
 * @function _getDataFromDatabase
 * @private
 * @param object $result
 * @return array
 */
function _getDataFromDatabase(object $result): array {
    # declare to extract data from the database and adding to this array as the response data
    $response = [];

    # add new data of the $result to the $response array
    while($row = mysqli_fetch_assoc($result)) {
        array_push($response, $row);
    }
        
    # is empty data
    if(!count($response)) {
        return $response;
    }

    # return the $response
    return count($response) > 1 ? $response : $response[0];    
}