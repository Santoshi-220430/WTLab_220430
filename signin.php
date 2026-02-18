<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body class="back">

    <section class="login-card">
        <h3>Smart HealthCare Dashboard</h3>
        <p>Please sign in to continue</p>

        <form action="login.php" method="post">

            <div class="input-group">
                <a href="google-login.php">
    <button type="button">Login with Google</button>
</a>

                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>
                
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>
            <div class="forgot-password">
                <a href="#" >Forgot Password?</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="index.html">Cancel</a>
            </div>
            <input type="submit" value="Sign In" class="btn">
            <div class="hr-text">
                <span>OR</span>
             </div>
             <div></div>
             
             <div class="line">Don't have an account? <a href="editprofile2.php">Sign Up</a></div>
        </form>
    </section>

</body>
</html>
