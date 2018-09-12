# Creando el primer paquete

## Estructura de directorios

``` 
 xserver
    |-- composer.json
    |-- examples
    |-- src
    |   |-- codigo
    |   `-- funcional
    `-- test
```

## Comandos

```
    mkdir /var/www/html/nombre_persona
    cd /var/www/html/nombre_persona
    mkdir xserver
    mkdir xserver/src
    mkdir xserver/test
    mkdir xserver/examples
```
    
## Inicializando nuestro paquete
    `composer init`
    
## Creamos nuestro "codigo funcional"
    `vi src/xserver.php`
    
    ...
    
## Necesitamos un modulo que permita realizar conexiones a servidores a travez de HTTP (conectar a la REST). 

    PETICIONES-HTTP
    http://docs.guzzlephp.org/en/stable/

    REST-ALEPH
    http://$HOST:$PORT/X?op=find-doc&doc_number=$NUMERO_SISTEMA&base=$BASE
    
    $config ={
        "HOST"=>"example.com.mx",
        "PORT"=>"3000",
        "BASE"=>"BIB"
    }


## GIT (Resumen)

    git init
    vi .gitignore
    git add .
    git remote add origin https://github.com/gjhernandez1234/xserver
    git remote -v
    git fetch
    git push origin master

    git tag -a v1.0 -m 'version para el curso 1.0'
    git push origin v1.0

    git add . && git commit -m "modificando la documentacion" && git push origin master
    
    