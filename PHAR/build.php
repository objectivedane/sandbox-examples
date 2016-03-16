<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 16/03/16
 * Time: 09:16
 */

//php.ini has disabled phar writing my default in my case.  (Another reason to use php cli server, it told me).
//Change phar.readonly to Off in the [phar] section (cli/php.ini and apache2/php.ini)

$phar = new Phar("build/app.phar", 0, "app.phar");
$phar->buildFromDirectory("./app");
$phar->setStub(
    $phar->createDefaultStub(
        "backend/index.php", "frontend/index.php"
    )
);

