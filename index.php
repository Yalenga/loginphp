<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container">
        <div class="text-center">
            
            <form action="data/login.php" method="POST">
                <h1>Connexion</h1>
                <input type="text" class="form-control mb-3" name="username" placeholder="Votre nom d'utilisateur"></br></br>
                <input type="password" class="form-control mb-3" name="password" placeholder="Votre mot de Pass"></br></br>
                                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Connexion</button>
                </div>
                <p class="mt-3">Pas encore membre ? <a href="register.php">créer un compte !</a></p>
            </form>
        </div>
    </div>
</body>
</html>