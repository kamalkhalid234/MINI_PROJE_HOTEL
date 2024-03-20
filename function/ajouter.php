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
            <form action="../fun/Fun_ajouter.php" class="form__content" method="POST">
                <h1 class="form__title">ajouter un produit</h1>
                <!-- NomHotel -->
                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>
                    <div class="form__div-input">
                        <label for="" class="form__label">NomHotel</label>
                        <input type="text" class="form__input" name="NomHotel">
                    </div>
                </div>
                <!-- Email -->
                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>
                    <div class="form__div-input">
                        <label for="" class="form__label">Email</label>
                        <input type="text" class="form__input" name="Email">
                    </div>
                </div>
                <!-- tele -->
                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>
                    <div class="form__div-input">
                        <label for="" class="form__label">tele</label>
                        <input type="text" class="form__input" name="tele">
                    </div>
                </div>
                <!-- prix -->
                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>
                    <div class="form__div-input">
                        <label for="" class="form__label">prix</label>
                        <input type="text" class="form__input" name="prix">
                    </div>
                </div>

                <!-- discription -->
                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>
                    <div class="form__div-input">
                        <br><label for="" class="form__label">discription</label>
                        <input type="text" class="form__input" name="discriptio">
                    </div>
                </div>
                <!-- 11111111111111111111 -->
                <div>
                    <input type="file" name="photo"><br>
                    <br><br>

                </div>
                <input type="submit" class="form__button" value="Ajouter" nam="submit">
            </form>
        </div>
    </div>
    <!-- ===== MAIN JS ===== -->
    <script src="../assets/js/main.js"></script>
</body>

</html>