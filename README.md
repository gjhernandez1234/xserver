# Xserver

Clase que controla las consultas realizadas al servicio de X-server de ALEPH

## Instalación

Agregar al composer.json el siguiente paquete.

```json
    "require": {
        ...
        "gjhernandez1234/xserver":"dev-master"
    },
    "repositories": [
        {
            "type": "vcs",
            "url":  "https://{user_bitbucket}@bitbucket.org/desarrollosibe/sibexserver.git"
        }
    ]
    ...
```
Ejecutar el comando:
```bash
    composer update
```

Uso

```php
<?php

use gjhernandez1234\xserver\xServer;

require "vendor/autoload.php";

$config =array(
        "HOST"=>"aleph.ecosur.mx",
        "PORT"=>"8991",
        "BASE"=>"CFS01_WEB"
	);

$xServer = new xServer($config);


$xServer->getRegistroXML("5646");
```

