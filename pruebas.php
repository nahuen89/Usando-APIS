<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'vendor/autoload.php';
        require_once './config/clienteGoogle.php';

        $service = new Google_Service_Books($client);
        $optParams = array('langRestrict' => 'es', 'filter'=>'ebooks', 'maxResults'=>'1', 'fields'=>'items(id, selfLink, volumeInfo(title, description, authors, categories, industryIdentifiers))');
        $busqueda = $service->volumes->listVolumes("messi", $optParams);
        //$busqueda = $service->volumes->listVolumes("messi");
        
        var_dump($busqueda);
        ?>
        </pre>
    </body>
</html>
