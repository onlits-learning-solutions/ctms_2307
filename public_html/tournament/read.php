<?php

function fetchTournaments(): array | null
{
    include '../env.php';

    $con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
    $sql = "SELECT * FROM tournament";

    $result = mysqli_query($con, $sql);

    $data = $result->fetch_all(MYSQLI_ASSOC);

    return $data;
}