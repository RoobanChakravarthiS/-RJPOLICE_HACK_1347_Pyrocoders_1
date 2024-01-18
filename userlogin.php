<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #404258;
    background-color: #fff;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    box-sizing: border-box;
}

.container {
    display: flex;
}

p
{
    text-align:center;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 20px;
}

form {
    width:fit-content;
    display: flex;
    flex-direction: column;
}

h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #333;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 10px;
    margin-bottom: 16px;
    width:300px;
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
        button{
            background-color: #3c7efc;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
        }
#button {
    background-color: #3c7efc;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#button:hover {
    background-color: #2980b9;
}
button:hover {
    background-color: #2980b9;
}

 </style>
</head>
<body bgcolor="mint">

<div class="container">
    <div class="form-container">
        <form id="signin-form" action="userlog.php" method="post">
            <h2>Sign In</h2>
            <label for="signin-username">Username:</label>
            <input type="text" id="signin-username" name="signin-username" required>

            <label for="signin-password">Password:</label>
            <div class="password-container">
                <input type="password" id="password" name="password" required>
                <button type="button" id="toggle" onclick="togglePasswordVisibility()"><i class="fa fa-eye-slash" id="eye"></i></button>
            </div>
            <input type="submit" id ="button" name="submit" VALUE="Sign In">
            <p>If you have not registered yet?<a href="usersignin.php">Sign Up</a></p>
        </form>
    </div>

<script>
    
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var eyeIcon = document.getElementById('eye');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList = 'fa fa-eye'; // Replace with your open eye icon
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList = 'fa fa-eye-slash'; // Replace with your closed eye icon
        }
    }

</script>
</body>
</html>