<?php
include 'read.php';

function printSeparator(int $n): void
{
    for ($i = 1; $i <= $n; $i++)
        printf("-");

    echo "\n";
}

$tournaments = fetchTournaments();

printSeparator(184);

printf("%-5s%-65s%-80s%s\n", "Id", "Name", "Venue", "Organiser");

printSeparator(184);

// for ($i = 0; $i < count($data); $i++) {
//     $id = $data[$i]['id'];
//     $name = $data[$i]['name'];
//     $venue = $data[$i]['venue'];
//     $organiser = $data[$i]['organiser'];

//     printf("%-5s%-65s%-80s%s\n", $id, $name, $venue, $organiser);
// }

foreach($tournaments as $tournament) {
    printf("%-5s%-65s%-80s%s\n", $tournament['id'], $tournament['name'], $tournament['venue'], $tournament['organiser']);
}

printSeparator(184);

echo "Aal is Well!\n";
