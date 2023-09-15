<?php

$snowArray = array();

$connection = pg_connect("host=snowfall-database port=5432 dbname=snowfall user=postgres password=secret");
$query = 'SELECT * FROM "snow";';
$result = pg_query( $connection, $query);

while ($row = pg_fetch_array($result)) {
    // create an array from each row in the table
    $snow_item = array(
        "id" => $row["id"],
        "date" => $row["date"],
        "amount" => $row["amount"],
    );
    // add to our main data array
    array_push($snowArray, $snow_item);
}

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// send response
http_response_code(200);
// send back the array as JSON
echo json_encode( $snowArray );