<?php
require_once "config/config.php"; // charge le fichier et empêche de le charger une 2éme fois
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include TEMPLATE_PARTS . "/_header.php";
    ?>


    <main>
        <?php
        $routes = ["home", "about", "contact", "admin"]; //toutes les valeurs de $_GET["page"] acceptées

        $page = "home"; // le nom du fichier qui sera inclus par défaut

        // détermination du nom de fichier à inclure en fonction de $_GET["page"]
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            if (!in_array($page, $routes)) { // on vérifie que la valeur de $_GET["page"] est bien prévue dans le tableau $routes
                $page = "404";
            }
        }
        // on inclut le fichier correspondant à $page
        $file = TEMPLATE_PAGES . "/" . $page . ".php";
        if (file_exists($file)) {
            include $file;
        }
        ?>
    </main>

    <footer>
        FOOTER
    </footer>

</body>

</html>