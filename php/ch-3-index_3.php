<?php
$people = array(
    1 => array(
        "firstname" => "Shivam",
        "lastname" => "Dubey"
    ),
    2 => array(
        "firstname" => "Chandan",
        "lastname" => "Dubey"
    ),
    3 => array(
        "firstname" => "Shubham",
        "lastname" => "Dubey"
    )
);
header("Content-Type: application/json; charset=UTP-8");
echo json_encode($people);
?>