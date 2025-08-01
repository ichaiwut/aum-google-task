<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Welcome</h1>
    <button onclick="logout()">Logout</button>

    <script>
        const user = localStorage.getItem('username');

        if (!user) {
            window.location.href = 'login.php';
        } else {
            document.querySelector('h1').textContent = `Welcome ${user}`;
        }

        function logout() {
            localStorage.removeItem('username');
            window.location.href = 'login.php';
        }
    </script>
</body>

</html>