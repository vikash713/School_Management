<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Login</title>
    <style>
        /* Reset some default styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #53b6e1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .container h2 {
            margin-bottom: 20px;
        }

        .container label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }

        .container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            gap: 10px; /* Space between the buttons */
        }

        .button-container input[type="submit"],
        .button-container .register-btn {
            width: 48%; /* Adjusted to fit in the container side by side */
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .button-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }

        .button-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .button-container .register-btn {
            background-color: #2196F3;
            color: white;
        }

        .button-container .register-btn:hover {
            background-color: #0b79d0;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>School Login</h2>
        <form action="#" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="login-username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="login-password" required>
            
            <div class="button-container">
                <input type="submit" value="Login" class="login-submit" onclick="window.location.href='welcome.php'" >
                <input type="submit" value="Register" class="login-password" onclick="window.location.href='register.php'"></input>
            </div>
            
            <p class="error-message">Invalid username or password</p> <!-- Static error message for demonstration -->
        </form>
    </div>
</body>
</html>
