<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--todo=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!--todo=============== CSS ===============-->
    <link rel="stylesheet" href="../css/bejelentkezes.css">
    <title>Rocket planner</title>
</head>

<body>
    <!--todo=============================== 0.szekció ======================-->

    <!--todo=============== NAV ===============-->

    <nav class="nav">
        <div id="logo_kep">

        </div>
        <p class="nav_logo">
            Rocket planner
        </p>
    </nav>

    <main id="main">
        <!--todo======================================== Bejelentkezés ==========================================-->
        <div class="container">
            <form action="login_code.php" method="POST" class="form" id="bejelentkezesForm">

                <h1 class="form_title">Bejelentkezés</h1>
                <div class="form_uzenet form_uzenet-error">
                    <!--helyes vagy hibás bevitel kiírása-->
                </div>

                <!--todo=============== felhasználónév ===============-->
                <div class="form_input_csoport">

                    <div class="form_icon">

                        <!-- <i class='bx bxs-user input_user_icon icon'></i>-->
                        <input type="text" name="email" class="form_input" placeholder="Felhasználónév / Email cím">

                    </div>

                    <div class="form_input-error-message">
                        <!--Ez egy hibaüzenet!-->
                    </div>
                </div>

                <!--todo=============== jelszó ===============-->
                <div class="form_input_csoport">

                    <div class="form_icon">

                        <div class="input_overlay" id="inputOverlay"></div>
                        <!--<i class='bx bxs-lock-alt input_lock_icon icon'></i>-->
                        <input type="password" name="password" class="form_input" id="inputPassword" placeholder="Jelszó" required>
                        <i class='bx bx-hide input_hideEye_icon' id="inputHideEyeIcon"></i>

                    </div>

                    <div class="form_input-error-message">
                        <!--!!!!!      <==      !!!!!!-->
                        <!--Ez egy hibaüzenet!-->
                    </div>
                </div>

                <!--todo=============== tovább gomb ===============-->
                <button class="form_button" name="log_button" type="submit">Bejelentkezés</button>

                <!--todo=============== elfelejtett jelszó. tovább a regisztációra ===============-->
                <p class="form_text">
                    <a href="#" class="form_link">Elfelejtett jelszó?</a>
                </p>
                <p class="form_text">
                    <a class="form_link" href="./" id="linkRegisztracio"> Nincs fiókod? Regisztrálj!</a>
                </p>

            </form>

            <!--todo======================================== Regisztáció ===========================================-->
            <form action="registration_code.php" method="POST" class="form form_hiden" id="regisztracioForm">

               

                <h1 class="form_title">Regisztráció</h1>
                <div class="form_uzenet form_uzenet-error">
                    <!--helyes vagy hibás bevitel kiírása-->
                </div>

                <!--todo=============== felhasználónév ===============-->
                <div class="form_input_csoport">
                    <input type="text" name="username" id="Felhaszn_regiszt" class="form_input karekter_szam" placeholder="Felhasználónév" required>

                    <div class="form_input-error-message">
                        <!--Ez egy hibaüzenet!-->
                    </div>
                </div>

                <!--todo=============== Email cím ===============-->
                <div class="form_input_csoport">
                    <input type="email" name="email" class="form_input" placeholder="Email cím" required>
                    <div class="form_input-error-message">
                        <!--Ez egy hibaüzenet!-->
                    </div>
                </div>

                <!--todo=============== jelszó ===============-->
                <div class="form_input_csoport">

                    <input type="password" name="password" id="Jelsz_regiszt" class="form_input karekter_szam" placeholder="Jelszó" required>


                    <div class="form_input-error-message">
                        <!--!!!!!      <==      !!!!!!-->
                        <!--Ez egy hibaüzenet!-->
                    </div>
                </div>


                <!--
                <div class="form_input_csoport">

                    <input type="password" id="Jelsz_regiszt_ismet" class="form_input karekter_szam" placeholder="Jelszó ismét">

                    <div class="form_input-error-message">
                        
                    </div>
                </div>
                -->

                <!--todo=============== tovább gomb ===============-->
                <button class="form_button" name="reg_button" type="submit">Tovább</button>

                <!--todo=============== vissza a bejelentkezéshez ===============-->

                <p class="form_text">
                    <a class="form_link" href="#" id="linkBejelentkezes"> Már van fiókod? Lépj be!</a>
                </p>
            </form>
        </div>

    </main>
    <!--todo=============== footer ===============-->
    <!--
    <footer id="footer">
        <p>copyright: &copy;</p>
    </footer>
   
    <!--todo=============== script ===============-->
    <script src="../js/bejelentkezes.js"></script>
</body>

</html>