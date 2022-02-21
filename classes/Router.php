<?php

class Router
{

    public function routing()
    {
        $page = DEFAULT_ROUTE . ".php"; // le nom du fichier qui sera inclus par défaut

        // var_dump($_SERVER["PATH_INFO"]);// /home ou /about ...

        // détermination du nom de fichier à inclure en fonction de $_GET["page"]
        if (isset($_SERVER["PATH_INFO"])) {
            if (array_key_exists($_SERVER["PATH_INFO"], ROUTES)) { // on vérifie que la valeur de $_GET["page"] est bien prévue dans le tableau $routes
                $page = ROUTES[$_SERVER["PATH_INFO"]];
            } else {
                $page = NOT_FOUND_ROUTE . ".php";
            }
        }
        // on inclut le fichier correspondant à $page
        $file = TEMPLATE_PAGES . "/" . $page;
        if (file_exists($file)) {
            include $file;
        }
    }
}
