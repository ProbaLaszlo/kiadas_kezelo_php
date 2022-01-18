<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--todo=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!--todo=============== CSS ===============-->
    <link rel="stylesheet" href="../css/style.css">
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

    <main class="main">
        <!--todo=============== 1. Szekció ===============-->
        <section class="elso_szekcio" id="elsoSzekcio">
            <div class="elso_szekcio_raketa">
                <!--?=============== rakétás kép ===============-->
            </div>

            <div class="elso_szekcio_leiras">


                <div class="elso_szekcio_udvozles">
                    <h1 class="udvozlom">
                        Üdvözlöm a Rocket
                    </h1>

                    <h1 class="planer">
                        Planner oldalán!
                    </h1>
                </div>

                <div class="elso_szekcio_gombok">

                    <a href="bejelentkezes.php" class="btn_bejelentkezes" id="btnBejelentkezes">
                        Bejelentkezés
                    </a>

                    <a class="btn_regisztacio" id="btnRegisztacio">
                        Regisztráció
                    </a>

                </div>

            </div>
        </section>
        <!--todo=============== 2. Szekció ===============-->

        <section class="masodik_szekcio" id="masodikSzekcio">
            <div class="masodik_szekcio_hullam">

                <div class="custom-shape-divider-top-1636999801">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                            class="shape-fill"></path>
                    </svg>
                </div>
            </div>

            <!--todo=============== dobozok ===============-->
            <div id="dobozOsszefogas">
                <!--todo-------icon script:--------->
                <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>

                <!--?=============== elso doboz ===============-->
                <div class="dobozok" id="elsoDoboz">

                    <h1 class="doboz_cim">
                        Költségvetési jelentés
                    </h1>

                    <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="loop-on-hover" colors="primary:#143c5c,secondary:#2e96eb" style="width:130px;height:130px">
                    </lord-icon>
                    <p class="doboz_szoveg">
                        Jelentse kiadásait pénzügyeinek pontos megtervezése érdekében!
                    </p>
                </div>

                <!--?=============== masodik doboz ===============-->
                <div class="dobozok" id="masodikDoboz">

                    <h1 class="doboz_cim">
                        Kiadás megtervezése
                    </h1>


                    <lord-icon src="https://cdn.lordicon.com/puvaffet.json" trigger="loop-on-hover" colors="primary:#143c5c,secondary:#2e96eb" style="width:130px;height:130px ">
                    </lord-icon>

                    <p class="doboz_szoveg ">
                        Tervezze meg jövőbeni kiadásait és állítson be költségkeretet, hogy pontos előrejelzést kapjon!
                    </p>
                </div>

                <!--?=============== harmadik doboz ===============-->
                <div class="dobozok" id="harmadikDoboz">

                    <h1 class="doboz_cim ">
                        Költségvetési riasztás
                    </h1>


                    <lord-icon src="https://cdn.lordicon.com/apbzdxqr.json" trigger="loop-on-hover" colors="primary:#143c5c,secondary:#2e96eb" style="width:130px;height:130px ">
                    </lord-icon>

                    <p class="doboz_szoveg ">
                        Állítson be személyre szabott riasztásokat, amennyiben túllépi vagy várhatóan túllépi a költségvetést!
                    </p>
                </div>
            </div>

        </section>

        <!--todo=============== Harmadik Szekció ===============-->
        <section class="harmadik_szekcio" id="harmadikSzekcio">
            <div class="harmadik_szekcio_hullam">

                <div class="custom-shape-divider-top-1639760920">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                            class="shape-fill"></path>
                    </svg>
                </div>
            </div>

            <!--todo=============== Szöveg ===============-->
            <div id="harmadik_szekcio_szoveg_gomb">
                <div id="flex_start">
                    <h3 id="harmadik_szekcio_szoveg">Szerezze vissza <br> az irányítást pénzügyei felett! </h3>

                    <a class="harmadik_szekcio_btn_regisztacio" id="harmadik_szekcioBtnRegisztacio">
                       Regisztráció
                    </a>

                </div>
            </div>

        </section>

        <!--todo=============== Negyedik Sekció ===============-->
        <!--todo=============== FOOTER ===============-->
        <footer id="footer">
            <p>copyright: &copy;</p>
        </footer>
    </main>
</body>

</html>