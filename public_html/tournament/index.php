<?php
include 'read.php';
$tournaments = fetchTournaments();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTMS Tournaments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-3">
    <header>
        <h1>CTMS 1.0</h1>
    </header>
    <nav class="navbar bg-light navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a href="./tournament/index.php" class="nav-link">Tournament</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a href="./player/index.php" class="nav-link">Player</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <h3 class="mt-3">List of Tournaments</h3>
        <a class="btn btn-primary mt-3 mb-3" href="new.php">New Tournament</a>
        <table class="table">
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
    </main>
    <footer>

    </footer>
</body>

</html>