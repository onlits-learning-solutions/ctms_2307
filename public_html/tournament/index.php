<?php
include 'read.php';
$tournaments = fetchTournaments();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>List of Tournaments</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Venue</th>
                <th>Organiser</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($tournaments as $tournament) {
            ?>
            <tr>
                <td><?= $tournament['id'] ?></td>
                <td><?= $tournament['name'] ?></td>
                <td><?= $tournament['venue'] ?></td>
                <td><?= $tournament['organiser'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>