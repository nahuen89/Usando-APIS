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
        <?php
        require_once 'vendor/autoload.php';
        require_once './config/clienteGoogle.php';
        
        $service = new Google_Service_Translate($client);
        $param = array('source' => 'en');
        $traduc = $service->translations->listTranslations("hello",'es');
        var_dump($traduc['data']["translations"][0]['translatedText']);
        
        ?>
    </body>
</html>
