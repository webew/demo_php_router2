<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>

<body>

    <?php
    include TEMPLATE_PARTS . "/_header.php";
    ?>

    <main>
        <?php include TEMPLATE_PAGES . $vue; ?>
    </main>

    <?php
    include TEMPLATE_PARTS . "/_footer.php";
    ?>

</body>

</html>