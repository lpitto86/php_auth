<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Login</title>

</head>
<body>
    <header>
        Login
    </header>
    <main class="container-md p-5 bg-primary text-white">
        <form class="container-sm p-5" action="profile.php" method="POST">
            <div>
                <label for="email">
                    Email
                </label>
                <div>
                    <input type="email" name="email" id="email">
                </div>
            </div>
            <div>
                <label for="password">
                    Password
                </label>
                <div>
                    <input type="password" name="password" id="password">
                </div>
            </div>
            <div>
                <button type="submit">
                    Accedi
                </button>
            </div>
        </form>
    </main>
    <footer>
    </footer>
</body>
</html>