<?php

class LoginService
{
    public function handleForm()
    {
        $email = $_POST["email"] ?? strip_tags($_POST["email"]);
        $pwd = $_POST["pwd"] ?? strip_tags($_POST["pwd"]);

        $conn = new PDO("mysql:host=localhost;dbname=test;port=3307;charset=utf8", "toto", "toto");
        $stmt = $conn->prepare("SELECT * FROM user WHERE email=?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            if (password_verify($pwd, $user["pwd"])) {
                $_SESSION["user"]["id"] = $user["id"];
                $_SESSION["user"]["email"] = $user["email"];
            }
        }
    }
}
