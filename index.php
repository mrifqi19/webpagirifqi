<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNT</title>
    <link rel="stylesheet" href="assets/login.css">
</head>
<body>
    <section class="forms-section">
    <h1 class="section-title">Hana Nan</h1>
    <div class="forms">
        <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
            Login
            <span class="underline"></span>
        </button>
        <form class="form form-login" action="proses/proses_login.php" method="POST">
            <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <div class="input-block">
                <label for="login-username">Username</label>
                <input id="login-username" type="text" name="username" placeholder="Masukkan Username Anda" required>
            </div>
            <div class="input-block">
                <label for="login-password">Password</label>
                <input id="login-password" type="password" name="password" placeholder="Masukkan Password Anda" required>
            </div>
            </fieldset>
            <button type="submit" class="btn-login" name="login" value="Login">Login</button>
        </form>
        </div>
        <div class="form-wrapper" action="proses/proses_signup.php" method="POST">
        <button type="button" class="switcher switcher-signup">
            Sign Up
            <span class="underline"></span>
        </button>
        <form class="form form-signup" action="proses/proses_signup.php" method="POST">
            <fieldset>
            <legend>Please, enter your username, email, password and password confirmation for sign up.</legend>
            <div class="input-block">
                <label for="signup-name">Nama Lengkap</label>
                <input id="signup-name" type="text" name="nama_user" placeholder="Masukkan Nama Anda"required>
            </div>
            <div class="input-block">
                <label for="signup-username">Username</label>
                <input id="signup-username" type="text" name="username" placeholder="Masukkan Username Anda"required>
            </div>
            <div class="input-block">
                <label for="signup-email">E-mail</label>
                <input id="signup-email" type="email" name="email" placeholder="Masukkan Email Anda"required>
            </div>
            <div class="input-block">
                <label for="signup-password">Password</label>
                <input id="signup-password" type="password" name="password" placeholder="Masukkan Password Anda"required>
            </div>
            <div class="input-block">
                <label for="signup-level">Level</label>
                <select name="level" id="signup-level">
                    <option value="admin">User</option>
                    <option value="user">Admin</option>
                </select>
            </div>
            </fieldset>
            <button type="submit" class="btn-signup" name="signup">Sign Up</button>
        </form>
        </div>
    </div>
    </section>

    <script src="assets/login.js"></script>
</body>
</html>