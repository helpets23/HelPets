<?php

include_once "config.php";

$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$outgoing_id = $_SESSION['unique_id'];
$output = "";

$sql = mysqli_query($conn, "SELECT * FROM user
                            WHERE unique_id != '$outgoing_id' AND fname = '$searchTerm'");
if (mysqli_num_rows($sql) > 0) {
    include "data.php";
}

echo $output;