<header>
    <nav>
        <ul>
            <li><a href="home">Accueil</a></li>
            <li><a href="estella">Estella</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="services">Services</a></li>
            <li><a href="users">Users</a></li>
            <?php if (isset($_SESSION["user"])) : ?>
                <li><a href="logout">Déconnexion</a></li>
            <?php else : ?>
                <li><a href="login">Connexion</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>