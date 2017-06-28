# Usando-APIS
Ejemplo de uso de las api google books y traslate 

el Ejempli es

## Enlace a la precentacion realizada para este trabajo
[Precentacion de las apis](https://docs.google.com/presentation/d/1cj04lx_WUNATBya6r9-sAZuZpyKxEKi7QWA66f8nMys/edit?usp=sharing)

una ves que creamos el proyecto en google-cloud nos dara una key
vamos el archivo /config/clienteGoogle.php
```markdown
$clave = "";
        
$client = new Google_Client();
$client->setApplicationName("PruebasFI2016");
$client->setDeveloperKey($clave);

```
