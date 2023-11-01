<?php
    include  'create.php';
    createTournament($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Tournament</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container">
    <header>
        <h1 class="mt-3">CTMS 1.0</h1>
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
                    <a href="index.php" class="nav-link">Tournament</a>
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
        <h3 class="mt-3 mb-3">New Tournament</h3>
        <form method="post">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="venue" class="form-label mt-3">Venue</label>
            <input type="text" name="venue" id="venue" class="form-control">
            <label for="organizer" class="form-label mt-3">Organizer</label>
            <input type="text" name="organizer" id="organizer" class="form-control">
            <button class="btn btn-primary mt-3 mb-5">Submit</button>
        </form>
    </main>
    <footer>
        <p>&copy;2023, Onlits Learning Solutions</p>
    </footer>
</body>

</html>