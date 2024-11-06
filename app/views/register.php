<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ICOSSCOPE</title>
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

        .container {
            max-width: 400px;
            margin: auto;
            padding-top: 50px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 15px;
            text-align:left;
        }

        .form-control {
            width: 100%;
            padding: 7px;
            font-size: 16px;
            margin-top: 7px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .account_type {
            width: 100%;
            padding: 7px;
            font-size: 16px;
            margin-top: 7px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .button-group .btn {
            width: 48%;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-login {
            background-color: #f0f0f0;
            color: #333;
        }

        .btn-register {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>ICOSSCOPER</h1>
        <div class="nav-links">
            <a href="/home">Home</a>
            <a href="/?page=register">Register</a>
            <a href="/?page=login">Login</a>
        </div>
    </div>
    <div class="container">
        <form action="/?page=register_action" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" required>
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" required>
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" required>
                <label for="email">E-mail Address</label>
                <input type="text" class="form-control" name="email" required>
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" required>
                <label for="password">Confirm Password</label>
                <input type="text" class="form-control" name="confirm_password" required>
                <label for="account_type">Account Type</label>
                <select name="account_type" class="form-control" required>
                    <option value="" disabled selected>Choose account type</option>
                    <option value="Participant">Participant</option>
                    <option value="Presenter">Presenter</option>
                </select>
            </div>
            <div class="button-group">
                <button type="submit" class="btn btn-register">Register</button>
                <button type="button" class="btn btn-login" onclick="window.location.href='/?page=login'">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
