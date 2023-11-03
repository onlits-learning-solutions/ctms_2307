<?php
function createTournament(array $tournament): void
{
    include '../env.php';

    $name = $tournament['name'];
    $venue = $tournament['venue'];
    $organizer = $tournament['organizer'];

    $con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
    $sql = "INSERT INTO tournament(name, venue, organiser) VALUES('$name','$venue','$organizer')";

    mysqli_query($con, $sql);

    $con->close();

    header("location:index.php");
}