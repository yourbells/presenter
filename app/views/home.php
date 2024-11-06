<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
<style>
    .navbar {
            background-color: #3d008c;
            padding: 15px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: -10px -8px;
        }

        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }

        .navbar .nav-links {
            display: flex;
            gap: 20px;
        }

        .navbar .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        .navbar .nav-links a:hover {
            color: #ffccff;
        }
</style>
<body>
<div class="navbar">
    <h1>ICOSSCOPER</h1>
    <div class="nav-links">
        <a href="/home">Home</a>
        <a href="/?page=register">Register</a>
        <a href="/?page=login">Login</a>
    </div>
</div>
</body>
</html>
