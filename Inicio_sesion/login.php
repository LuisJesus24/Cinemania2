<?php
    include '../includes/templates/header.php';
?>
<body>
    <link rel="stylesheet" href="../build/css/app.css">
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
            <form class="col-3" method="POST" action="./php/login.php">
                <h2>Iniciar Sesión</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                </div>
                <a href="./restablecer.php">Olvidé mi contraseña</a> <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../scripts.js"></script>
</body>
</html>