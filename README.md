# Mon appli

## Configurer les routes de l'application

```php
// config/routes.php

<?php

return [
    "home" => "home.php",
    "about" => "about.php",
    "contact" => "contact.php",
    "services" => "services.php",
];
```

```php
// config/config.php.php

<?php

define("TEMPLATE", "template");
define("TEMPLATE_PARTS", TEMPLATE . "/template_parts");
define('TEMPLATE_PAGES', TEMPLATE . "/pages");
define("CLASSES", "classes");

define('ROUTES', include 'routes.php');
define('DEFAULT_ROUTE', "home");
define('NOT_FOUND_ROUTE', "404");

```
