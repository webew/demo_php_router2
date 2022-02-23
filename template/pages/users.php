<h1>Users</h1>

<?php
// $conn = new PDO("mysql:host=localhost;dbname=test;port=3307;charset=utf8", "toto", "toto");
// $stmt = $conn->prepare("SELECT * FROM user");
// $stmt->execute();
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($users as $user) : ?>
    <h3><?= $user["email"] ?></h3>
<?php endforeach ?>