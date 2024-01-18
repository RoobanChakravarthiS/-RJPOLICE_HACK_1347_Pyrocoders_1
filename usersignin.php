<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #404258;
            background-color: #f5f5f5; /* Light Gray */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-container {
            background-color: #ffffff; /* White */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        .password-container {
            position: relative;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        button {
            background-color: #3c7efc; /* Dodger Blue */
            color: #ffffff; /* White */
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        #button {
            background-color: #3c7efc; /* Dodger Blue */
            color: #ffffff; /* White */
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9; /* Darker Dodger Blue */
        }
        #button:hover {
            background-color: #2980b9; /* Darker Dodger Blue */
        }
    </style>
</head>
<body>

<div class="signup-container">
    <h2>Sign Up</h2>
    <form id="signup-form" action="usersign.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <div class="password-container">
            <input type="password" id="password" name="password" required>
            <button type="button" id="toggle" onclick="togglePasswordVisibility()"><i class="fa fa-eye-slash" id="eye"></i></button>
        </div>

        <label for="confirm-password">Confirm Password:</label>
            <div class="password-container">
        <input type="password" id="confirm-password" name="confirm-password" required>
        <button type="button" id="toggle" onclick="togglePasswordVisibility()"><i class="fa fa-eye-slash" id="eye"></i></button>
            </div>

        <input type="submit" name="submit" id="button" value="Sign Up" >
    </form>
</div>

<script>


    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var eyeIcon = document.getElementById('eye');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList = 'fa fa-eye-slash'; // Replace with your closed eye icon
        } else {
            passwordInput.type = 'password';
            eyeIcon.src = 'fa fa-eye'; // Replace with your open eye icon
        }
    }
</script>
</body>
</html>