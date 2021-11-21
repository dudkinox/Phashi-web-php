<?php
require('../http/db.php');
$clearCal = "TRUNCATE TABLE cal";
$clearDate = "TRUNCATE TABLE date";
$clearGive = "TRUNCATE TABLE give";
$clearHead = "TRUNCATE TABLE head";
$clearImage = "TRUNCATE TABLE image";
$clearother = "TRUNCATE TABLE other";
$clearpay = "TRUNCATE TABLE pay";
$clearsent = "TRUNCATE TABLE sent";
$cleartake = "TRUNCATE TABLE take";

if (
    $conn->query($clearCal) === TRUE &&
    $conn->query($clearDate) === TRUE &&
    $conn->query($clearGive) === TRUE &&
    $conn->query($clearHead) === TRUE &&
    $conn->query($clearImage) === TRUE &&
    $conn->query($clearother) === TRUE &&
    $conn->query($clearpay) === TRUE &&
    $conn->query($clearsent) === TRUE &&
    $conn->query($cleartake) === TRUE
) {
    header("location: ../");
} else {
    echo "Error: " . $clearCal . "<br>" . $conn->error;
    echo "Error: " . $clearDate . "<br>" . $conn->error;
    echo "Error: " . $clearGive . "<br>" . $conn->error;
    echo "Error: " . $clearHead . "<br>" . $conn->error;
    echo "Error: " . $clearImage . "<br>" . $conn->error;
    echo "Error: " . $clearother . "<br>" . $conn->error;
    echo "Error: " . $clearpay . "<br>" . $conn->error;
    echo "Error: " . $clearsent . "<br>" . $conn->error;
    echo "Error: " . $cleartake . "<br>" . $conn->error;
    exit;
}
