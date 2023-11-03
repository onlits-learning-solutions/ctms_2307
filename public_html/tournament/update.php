<?php

function fetchTournament(int $id)
{

    include '../env.php';

    $con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
    $sql = "SELECT * FROM tournament WHERE id=''";

    $result = mysqli_query($con, $sql);

    print_r ($result);
}
