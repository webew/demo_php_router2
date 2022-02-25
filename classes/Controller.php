<?php
require CLASSES . "/AbstractController.php";
require SERVICES . "/LoginService.php";
require SERVICES . "/UserService.php";

class Controller extends AbstractController
{
    private LoginService $loginService;

    public function __construct()
    {
        $this->loginService = new LoginService();
    }

    public function estella()
    {
        $this->render("/estella.php");
    }

    public function getUsers()
    {
        $userService = new UserService();
        echo json_encode($userService->findAll());
    }

    public function home()
    {
        $this->render("/home.php");
    }

    public function about()
    {
        $this->render("/about.php");
    }

    public function contact()
    {
        $this->render("/contact.php");
    }

    public function services()
    {
        $this->render("/services.php");
    }

    public function users()
    {
        $userService = new UserService();
        $this->render("/users.php", ["users" => $userService->findAll(), "toto" => "Toto"]);
    }

    public function page404()
    {
        $this->render("/page404.php");
    }

    public function loginForm()
    {
        $this->render("/connexion.php");
    }

    public function handleConnexionForm()
    {
        $this->loginService->handleForm();
        header("location: ./home");
    }

    public function logout()
    {
        unset($_SESSION["user"]);
        header("location: ./home");
    }
}
