<?php

class UserService
{
    public function findAll()
    {
        $conn = new PDO("mysql:host=localhost;dbname=test;port=3307;charset=utf8", "toto", "toto");
        $stmt = $conn->prepare("SELECT * FROM user");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
}
