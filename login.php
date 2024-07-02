
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Pixels Photography</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="login3.php">
    <style>
        body {
    font-family: 'Jost', sans-serif;
    background-color: #f8f8f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
    background-color: #111;
}

.login-box {
    background-color: #fff;
    padding: 6rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

.login-box h2 {
    margin-bottom: 1rem;
    color: #111;
}

.input-group {
    margin-bottom: 1rem;
    text-align: left;
}

.input-group label {
    display: block;
    font-size: 14px;
    color: #333;
    margin-bottom: 0.5rem;
}

.input-group input {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 0.75rem 1rem;
    background-color: #111;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 23.7%;
    margin-top: 1rem;
}

button:hover {
    background-color: #333;
}

.error-message {
    color: red;
    margin-top: 1rem;
    display: none;
}

.bttn1 {
    position: absolute;
    margin-top: 326px;
    margin-left: 29px;
}

    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Admin Login</h2>
            <form id="loginForm" action="login3.php" method="post">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
            </div>
            <button  class="bttn1" type="button" onclick="adminPannel()">Login</button><br>
            </div>
                <div class="error-message" id="errorMessage"></div>
            </form>
        </div>
    </div>
    <!-- <script src="admin.js">  -->
    <script>
    function adminPannel() {
      window.location.href = "admin.php";
    }
</script>
</body>
</html>
