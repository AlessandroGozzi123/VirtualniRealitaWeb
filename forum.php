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
                            <h1>Forum</h1>
                            <span class="subheading">Zde můžete vkládat příspěvky.</span>
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
                        <?php 
                        if(isset($_SESSION['loggedUser'])) {
                        //Nastevení proměnných pro připojení k databázi
                        $hostName = "efis.tul.cz";
                        $databaseName = "alessandro_gozzi";
                        $userName = "root";
                        $password = "";

                        //Připojení k MySQL serveru
                        $idSpojeni = mysqli_connect($hostName,$userName,$password);

                        if(!$idSpojeni)
                            die("<p>Spojení s MySQL serverem neproběhlo úspěšně</p>");

                        //Připojení k databázi
                        $idDB = mysqli_select_db($idSpojeni,$databaseName);

                        if(!$idDB)
                            die("<p>Databáze $databaseName neexistuje.</p>");
                        else
                            printf("<p>Databáze $databaseName nalezena.</p>");

                        //kod na vymazani
                        if(isset($_REQUEST['vymazID']))
                        {
                            if($admin == 1) {
                                $vymazID = $_REQUEST['vymazID'];
                                mysqli_query($idSpojeni,"DELETE FROM forumDB WHERE id='$vymazID'");
                            } else {
                                $vymazID = $_REQUEST['vymazID'];
                                mysqli_query($idSpojeni,"DELETE FROM forumDB WHERE id='$vymazID' AND prezdivka='$login'");
                            }
                        }
                        
                        //kod na aktualizaci
                        if(isset($_REQUEST['updateID']))
                        {
                            $updateID = $_REQUEST['updateID'];
                            $dotazUpdate = mysqli_query($idSpojeni,"SELECT id,prezdivka,tema,prispevek FROM forumDB WHERE id='$updateID'");
                            $pocetUpdate = mysqli_num_rows($dotazUpdate); //vrátí počet záznamů (řádků)
                            $detailUpdate = mysqli_fetch_array($dotazUpdate);
                            //tento kod zobrazi panel pro aktualizaci udaju
                            ?>
                            <hr>
                            <p>Počet nalezených záznamů: <b><?php echo($pocetUpdate); ?></b></p>
                            <p>ID ktere chceme editovat: <b><?php echo($updateID); ?></b></p>
                            <form method= "post">
                            <input type="hidden" name="prezdivka" value="<?php  printf("$login"); ?>">
                            <fieldset>
                            <p><b>Téma:</b></p>
                            <select name="tema" >
                                <option value="recenze" <?php if($detailUpdate['tema']=='recenze') echo('selected');?>>Recenze</option>
                                <option value="dotaz" <?php if($detailUpdate['tema']=='dotaz') echo('selected');?>>Dotaz</option>
                                <option value="odpoved" <?php if($detailUpdate['tema']=='odpoved') echo('selected');?>>Odpověď</option>
                                <option value="vzkaz" <?php if($detailUpdate['tema']=='vzkaz') echo('selected');?>>Vzkaz</option>
                                <option value="navod" <?php if($detailUpdate['tema']=='navod') echo('selected');?>>Návod</option>
                            </select>
                            </fieldset>
                            <br>
                            <textarea name="prispevek" id="" cols="30" rows="10" placeholder="Zde napište úpravu příspěvku." style="resize:none"></textarea>
                            <input type="submit" value="Aktualizovat údaje" name="submit">
                            </form>
                            <hr>
                  <?php }
                        //kod kdyz uzivatel klikne na aktualizaci
                        if(isset($_REQUEST['submit']))
                        {
                            if($admin == 1) {
                                $tema = $_REQUEST['tema'];
                                $prispevek = $_REQUEST['prispevek'];
                                $dotazUpdate = mysqli_query($idSpojeni, "UPDATE forumDB SET tema='$tema', prispevek='$prispevek' WHERE id='$updateID'");
                                header('location: forum.php');
                            } else {
                                $tema = $_REQUEST['tema'];
                                $prispevek = $_REQUEST['prispevek'];
                                $dotazUpdate = mysqli_query($idSpojeni, "UPDATE forumDB SET tema='$tema', prispevek='$prispevek' WHERE id='$updateID' AND prezdivka='$login'");
                                header('location: forum.php');
                            }
                        }
                        //tento kod zobrazi tabulku
                        $sqlDotaz01 = "SELECT id,prezdivka,tema,prispevek FROM forumDB";  

                        $dotazDB = mysqli_query($idSpojeni,$sqlDotaz01);

                        $pocetZaznamu = mysqli_num_rows($dotazDB);

                        printf("<p>Počet záznamů odpovídajících dotazů: $pocetZaznamu</p>");
                        
                        ?>
                        <a href="vlozit_prispevek.php" class="tlacitko">Vložit příspěvek</a>
                        <br><br>
                        <?php
                        
                        printf("<table id='example' class='table' border='1' cellspacing='0' bgcolor='white'>
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Přezdívka</th>
                                    <th>Téma</th>
                                    <th>Text</th>
                                    <th>Vymazat</th>
                                    <th>Editovat</th>
                                </tr>   
                                </thead>");
                        

                            //tento while cyklus vytiskne vsechny tlacitka delete update
                            while($detailKnihy=mysqli_fetch_array($dotazDB))
                            {
                                printf("<tr>");
                                for($i=0;$i<4;++$i)
                                printf("<td>" .$detailKnihy[$i]."</td>");
                                


                            ?>


                            <td><a href="forum.php?vymazID=<?php echo($detailKnihy['id']);?>" onclick="return confirm('Skutečně chcete smazat tuto knihu s ID <?php echo($detailKnihy['id']);?>?')">Delete</a></td>
                            <td><a href="forum.php?updateID=<?php echo($detailKnihy['id']);?>">Update</a></td>

                            <?php
                            printf("</tr>");
                            }    
                        
                            printf("</table>");

                            mysqli_close();
                        } else {
                            echo("Abyste mohli vidět forum musíte být přihlášení.");
                        } //tady konci ten prvni if cyklus ze radku 57
                        ?>
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
