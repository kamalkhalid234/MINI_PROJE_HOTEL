<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Login form responsive</title>
</head>

<body>
    <div class="l-form">
        <div class="shape1"></div>
        <div class="shape2"></div>

        <div class="form">
            <img src="../assets/img/authentication.svg" alt="" class="form__img">
            <form action="../fun/Fun_enregistre.php" class="form__content" method="POST">
                <h1 class="form__title">Welcome</h1>
                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>
                    <div class="form__div-input">
                        <label for="" class="form__label">Username</label>
                        <input type="text" class="form__input" name="Username">
                    </div>
                </div>
                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>
                    <div class="form__div-input">
                        <label for="" class="form__label">Email</label>
                        <input type="text" class="form__input" name="Email">
                    </div>
                </div>
                <div class="form__div">
                    <div class="form__icon">
                        <i class='bx bx-lock'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="" class="form__label">Password</label>
                        <input type="password" class="form__input" name="Password">
                    </div>
                </div>
                <a href="login.php" class="form__forgot">Login</a>
                <input type="submit" class="form__button" value="Enregistre" nam="submit">


        </div>

    </div>

    <!-- ===== MAIN JS ===== -->
    <script src="../assets/js/main.js"></script>
</body>

</html>