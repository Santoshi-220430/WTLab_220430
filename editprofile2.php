<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up/Create Account</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body class="back">

    <section class="login-card">
        <h3>Smart HealthCare Dashboard</h3>
        <p>Please sign in to continue</p>

        <form action="signup.php" method="post">

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>
                
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" required>              
                
            </div>
            <input type="submit" value="Sign In" class="btn">
            
             
            
        </form>
    </section>

</body>
</html>
