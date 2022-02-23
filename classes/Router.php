<?php
require CLASSES . '/Controller.php';

class Router
{

    public function routing()
    {
        $page = DEFAULT_ROUTE; // le nom du fichier qui sera inclus par défaut

        // détermination du nom de fichier à inclure en fonction de $_GET["page"]
        if (isset($_SERVER["PATH_INFO"]) && $_SERVER["PATH_INFO"] !== '/') {
            if (array_key_exists($_SERVER["PATH_INFO"], ROUTES)) { // on vérifie que la valeur de $_GET["page"] est bien prévue dans le tableau $routes
                $page = ROUTES[$_SERVER["PATH_INFO"]];
            } else {
                $page = NOT_FOUND_ROUTE;
            }
        }
        $controller = new Controller();
        if (method_exists($controller, $controller->$page())) {
            $controller->$page();
        }
    }
}


// on inclut le fichier correspondant à $page
// $file = TEMPLATE_PAGES . "/" . $page . ".php";
// var_dump($page);
// if (file_exists($file)) {
//     if ($page === "users") {
//         $conn = new PDO("mysql:host=localhost;dbname=test;port=3307;charset=utf8", "toto", "toto");
//         $stmt = $conn->prepare("SELECT * FROM user");
//         $stmt->execute();
//         $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     }elseif($page === "home"){
//     //faire quelque chose
// }
//     include $file;
// }