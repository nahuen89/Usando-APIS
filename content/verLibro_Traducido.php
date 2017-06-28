
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="page-header"><?= $libro['volumeInfo']['title'] ?> |
                    <small><?= $libro['volumeInfo']['authors'][0] ?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-4 col-sm-4 col-lg-4">
                <img class="img-responsive" src="<?= $libro['volumeInfo']['imageLinks']['small'] ?>" alt="">
            </div>

            <div class="col-md-8 col-sm-8 col-lg-8">
                <h3>Descripción</h3>
                <p><?= $libro['volumeInfo']['description'] ?></p>
                
            </div>

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="page-header">Traducción de Descripción</h1>
            </div>
            <p>
                <?php
                    $serv = new Google_Service_Translate($client);
                    //$param = array('source' => 'en');
                    $text = $libro['volumeInfo']['description'];
                    $traduc = $serv->translations->listTranslations($text,'es');
                    //var_dump($traduc['data']["translations"][0]['translatedText']);
                    echo $traduc['data']["translations"][0]['translatedText'];
                    
                ?>
            </p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="page-header">Visualizar</h1>
            </div>
        </div>

    <script type="text/javascript" src="https://www.google.com/books/jsapi.js"></script>
    <script type="text/javascript">
        <?php 
        $isbn = $libro['volumeInfo']['industryIdentifiers'][0]['identifier'];
        //echo $isbn;
        ?>
      google.books.load({"language": "es"});

      function initialize() {
        var viewer = new google.books.DefaultViewer(document.getElementById('viewerCanvas'));
        viewer.load('ISBN:<?= $isbn ?>');
      }

      google.books.setOnLoadCallback(initialize);
    </script>
  
    <div id="viewerCanvas" style="width: 100%; height: 600px"></div>
 


<?php
//var_dump($libro['volumeInfo']['industryIdentifiers'][0]['identifier']);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

