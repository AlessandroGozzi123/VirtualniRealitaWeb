<?php
    session_start();
    $login = $_SESSION['loggedUser'];
    $admin = $_SESSION['admin'];

    if(isset($_SESSION['loggedUser'])) {
        printf("<p>Login: $login, admin: $admin</p>");
    }
    else {
        printf("<p>Nikdo není přihlášen</p>");
    }
    
    if($admin==1 && isset($_SESSION['loggedUser'])) {
        printf("<p>Role administrátora.</p>");
        printf("<p>Můžeš vkládat. Můžeš upravovat a mazat všechny příspěvky, tzn. i příspěvky ostatních.</p>");
    }
    else if($admin==0 && isset($_SESSION['loggedUser'])) {
        printf("<p>Role uživatele.</p>");
        printf("<p>Můžeš vkládat a upravova své příspěvky.</p>");
        ?><a href="nastaveni.php">Nastavení</a><?php
    }
    else {
        printf("<p>Role uživatele.</p>");
        printf("<p>Můžeš pouze prohlížet web.</p>");
    }
?>
<br>