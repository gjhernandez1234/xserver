#Creando el primer paquete

##Estructura de directorios

``` 
 xserver
    |-- composer.json
    |-- examples
    |-- src
    |   |-- codigo
    |   `-- funcional
    `-- test
```

##Comandos:

```
    mkdir /var/www/html/nombre_persona
    cd /var/www/html/nombre_persona
    mkdir xserver
    mkdir xserver/src
    mkdir xserver/test
    mkdir xserver/examples
```
    
##Inicializando nuestro paquete
    `composer init`
    
##Creamos nuestro "codigo funcional"
    `vi src/xserver.php`
    
    ...
    
##Necesitamos un modulo que permita realizar conexiones a servidores a travez de HTTP (conectar a la REST). 

    PETICIONES-HTTP
    http://docs.guzzlephp.org/en/stable/

    REST-ALEPH
    http://$HOST:$PORT/X?op=find-doc&doc_number=$NUMERO_SISTEMA&base=$BASE
    
    http://{$config['HOST']}:{$config['PORT'}/X?op=find-doc&doc_number={$NUMERO_SISTEMA}&base={$config['BASE']}
    
    $config ={
        "HOST"=>"aleph.ecosur.mx",
        "PORT"=>"8991",
        "BASE"=>"CFS01_WEB"
    }



    
    