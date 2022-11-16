<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>

    <?php

    require 'db_conn.php';
    require 'Korisnik.php';
    session_start();

    if (isset($_POST['login_btn'])) {
        Korisnik::login($_POST['username'], $_POST['password'], $db_connection);
    }

    ?>


    <div class="container">

        <h1 class="text-center" id="login_h1">Login page</h1>

        <div class="login-form">

            <form method="post">
                <label>Username: </label>
                <input type="text" class="form-control" name="username">

                <label>Password: </label>
                <input type="password" class="form-control" name="password">

                <button type="submit" class="btn btn-danger" name="login_btn" id="login_btn">Login</button>
            </form>
        </div>
    </div>

</body>

</html>