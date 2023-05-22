<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
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
                            <h1>Registrace/přihlášení</h1>
                            <span class="subheading">Zde si můžete založit účet.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="postranni_sloupec">
                <?php include 'postranni_sloupec.php'; ?>
            </div>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="odstavec_registrace">
                            <h1>Registrace uživatele</h1>
                            <br>
                            <form action="registrace_script.php" method="post">
                            <label>Login (*)</label><input type="text" name="login" pattern="[A-Za-z0-9]{5,255}" title="libovolná kombinace písmen a číslic a minimálně 5 znaků" placeholder="Váš login" required>
                            <br><br>
                            <label>Heslo (*) </label><input type="password" name="heslo1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="alespoň 8 znaků (alespoň 1 číslo,alespoň 1 malé písmeno,alespoň 1 VELKÉ PÍSMENO" required>
                            <br><br>
                            <label>Heslo potvrzení (*) </label><input type="password" name="heslo2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="alespoň 8 znaků (alespoň 1 číslo,alespoň 1 malé písmeno,alespoň 1 VELKÉ PÍSMENO" required>
                            <br><br>
                            <label>Email (*) </label><input type="email" name="email" placeholder="Váš email" required>
                            <br><br>
                            <label>Jméno (*) </label><input type="text" name="jmeno" placeholder="Vaše jméno" required>
                            <br><br>
                            <label>Příjmení (*) </label><input type="text" name="prijmeni" placeholder="Vaše jméno" required>
                            <br><br>
                            <input type="submit" value="Uložit uživatele do DB">
                            <br><br>
                            </form>
                        </div>
                        <div class="odstavec_registrace">
                            <h1>Přihlášení uživatele</h1>
                            <br>
                            <form action="login_script.php" method="post">
                                <label>Login (*)</label><input type="text" name="login" pattern="[A-Za-z0-9]{5,255}" title="libovolná kombinace písmen a číslic a minimálně 5 znaků" placeholder="Váš login" required>
                                <br><br>
                                <label>Heslo (*) </label><input type="password" name="heslo1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="alespoň 8 znaků (alespoň 1 číslo,alespoň 1 malé písmeno,alespoň 1 VELKÉ PÍSMENO" required>
                                <br><br>
                                <input type="submit" value="Přihlásit">
                                <br><br>
                            </form>
                        </div>
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
                        <div class="small text-center text-muted fst-italic">Webdesign &copy; Alessandro Gozzi 2022</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
