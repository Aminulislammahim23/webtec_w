<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="../day2/assets/css/signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="signup-container">
        <div class="left-panel">
            <div class="brand">
                <div class="brand-name">CodeCraft</div>
            </div>
            <h1>Create Account</h1>
            <p class="subtitle">Join our learning platform and start your journey</p>

            <form action="register.php" method="POST" class="signup-form">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="text" id="contact" name="contact" placeholder="11 digits" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" required></textarea>
            </div>

            <div class="form-group">
                <input type="checkbox" id="terms" name="terms">
                <label for="terms">I agree to the <a href="#">terms and conditions</a></label>
            </div>

            <div class="form-group captcha-box">
                <div id="recaptcha-placeholder">Complete CAPTCHA if enabled</div>
            </div>

            <button type="submit" class="btn">Sign Up</button>

            <div class="links">
                <a href="login.php">Already have an account? Log In</a>
            </div>
            </form>
        </div>
        <div class="right-panel">
            <div class="overlay-text">
                <h2>Welcome to CodeCraft</h2>
                <p>Learn programming with industry experts and advance your career in technology.</p>
            </div>
        </div>
    </div>

    <script src="../day2/assets/js/signupVal.js"></script>
</body>
</html>