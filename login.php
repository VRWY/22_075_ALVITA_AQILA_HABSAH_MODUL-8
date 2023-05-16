<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="stylepbw.css">
        <title>Login</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="p-3 m-0 border-0 bd-example">
    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">LOGIN</h5>
            <p class="card-text">Masukkan username & Password</p>
            <div class="form">
            <form action="config_log.php" method="post">
                <table>
                    <tr class="nim">
                        <td><input type="text" placeholder="username" name="username" id="username"></td>
                    </tr>
                    <tr class="password">
                        <td><input type="password" placeholder="Password" name="pass"></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
            </div>
            <p class="text-center lupa"> Lupa Password? <a href="#" class="klik"> Klik disini! </a></p>
        </div>
    </div>

    </body>
</html>