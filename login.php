<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="action.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <script>
        if (localStorage.getItem('username')) {
            window.location.href = 'index.php';
        }
        document.querySelector('form').addEventListener('submit', function() {
            const username = document.getElementById('username').value;
            if (username) {
                localStorage.setItem('username', username);
            }
        });
    </script>
</body>
</html>