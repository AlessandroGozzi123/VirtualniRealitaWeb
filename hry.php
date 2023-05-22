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
                            <h1>Hry pro virtuální realitu</h1>
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
                        <p>Zde přinášíme tři nejlepší hry pro virtuální realitu, které by si každý majitel virtuálních brýlí měl vyzkoušet.</p>
                        <h1>Half-Life: Alyx</h1>
                        <img src="assets/img/alyx.jpg"  alt="Half-Life: Alyx" class="img-fluid">
                        <p>Half-Life: Alyx je jedna z nejpropracovanějších her pro virtuální realitu vůbec. Prakticky jakýkoliv předmět, který ve hře potkáte, se dá uchopit a případně použít. Hra má dobrý příběh založen na světe ze série her Half-Life a dokonale využívá virtuální realitu.</p>
                        <h1>Job Simulator</h1>
                        <img src="assets/img/job.jpg" alt="Job Simulator" class="img-fluid">
                        <p>Job Simulator není dlouhá hra, ale vzato velice zábavná. Účelem hry je "simulovat" práci. Ve hře vás přivítá otravný robot, který vám zadá práci a je na vás, jak se s tím vypořádáte.</p>
                        <h1>The Elder Scrolls V: Skyrim</h1>
                        <img src="assets/img/skyrim.jpg" alt="The Elder Scrolls V: Skyrim" class="img-fluid">
                        <p>The Elder Scrolls V: Skyrim je jedna z nejlépe hodnocených her, která kdy vznikla. Fantasy svět ve kterém lítají draci a vy jako hlavní hrdina je musíte porazit. Dříve hra jen na počítač a konzole. Nyní předělaná na virtuální realitu!</p>
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
