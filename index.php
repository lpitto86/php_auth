<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Authentication</title>

</head>
<body>
    <header>
        Authentication
    </header>
    <main class="container-mg m-5">
        <?php
            if (
                isset($_SESSION['email'])
                &&
                isset($_SESSION['name'])
            ) {
        ?>
            <h1>
                Benvenuto <?php echo $_SESSION['name'] ?>
            </h1>
        <?php
            }
            else {
        ?>
        <a href="login.php">
            Login
        </a>
        <?php
            }
        ?>
    </main>
    <footer>
    </footer>
</body>
</html>