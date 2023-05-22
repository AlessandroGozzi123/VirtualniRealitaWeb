<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Virtuální realita</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html"><img alt="Virtuální realita" src="assets\img/logo.png"
                    width="120" height="120"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <?php include 'navigace.php'; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Přihlášení</h1>
                            <span class="subheading"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="postranni_sloupec">
                        <?php include 'postranni_sloupec.php'; ?>
                    </div>
                      <h1>Přihlášení uživatele - script </h1>
                      <!-- pravy alt+ů -->
                      <?php
                        $login = $_POST["login"];
                        $heslo1 = sha1($_POST["heslo1"]);


                        //Nastevení proměnných pro připojení k databázi
                        $hostName = "efis.tul.cz";
                        $databaseName = "alessandro_gozzi";
                        $userName = "root";
                        $password = "";

                        //Připojení k MySQL serveru
                        $idSpojeni = mysqli_connect($hostName,$userName,$password);

                        if (!$idSpojeni)
                          die("<p>Spojení s MySQL serverem neproběhlo úspěšně</p>");

                        //Připojení k databázi
                        $idDB = mysqli_select_db($idSpojeni,$databaseName);

                        if(!$idDB)
                          die("<p>Databáze $databaseName neexistuje.</p>");
                        else
                          printf("<p>Databáze $databaseName nalezena.</p>");

                        //Přihlášení uzivatele do DB
                        session_destroy();
                        session_start(); //zahájení uživatelské relace

                        $sqlDotaz = "SELECT * FROM uzivateleDB WHERE login='$login' AND heslo1='$heslo1'";

                        $dotazUzivatel = mysqli_query($idSpojeni, $sqlDotaz);

                        $pocetUzivatel = mysqli_num_rows($dotazUzivatel);
                        printf("<p>Počet vyhledaných záznamů: $pocetUzivatel</p>");
                        
                        $detailUzivatel = mysqli_fetch_array($dotazUzivatel);
                        
                        if($pocetUzivatel == 1) {
                        $_SESSION['loggedUser'] = $login;    //ulozeni prezdivky (login) do pole
                        $_SESSION['admin'] = $detailUzivatel['admin'];
                        printf("<p>Uživatel <b>" .$_SESSION['loggedUser']. "</b> byl v DB nalezen");
                        printf("<p><a href='index.php'>Pokračovat na úvodní stránku</a></p>");
                        }
                        else {
                        printf("<p>Uživatel NEBYL v databázi nalezen nebo jste zadali špatné heslo</p>");
                        printf("<p><a href='login_form.php'>Znovu se přihlásit</a></p>");
                        }
                        
                        mysqli_close();
                      ?>
                      <p>Za <b>10 sekund</b> dojde k přesměrování na hlavní stránku</p>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Webdesign &copy; Alessandro Gozzi</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
