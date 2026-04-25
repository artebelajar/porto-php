<?php $_page = 'login'; ?>
<?php include 'partial/meta.php'; ?>

<body>
    <?php include 'partial/navbar.php'; ?>
    <div class="container">

        <form action="" method="post" class="login-form">
            <h1>Login</h1>
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>
    </div>

    <?php include 'partial/footer.php'; ?>
</body>
</html>