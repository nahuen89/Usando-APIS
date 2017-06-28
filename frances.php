<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BiblioRef</title>

    <!-- Bootstrap core CSS -->
    <link href="libs/btp/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="libs/jquery.min.js"></script>
    <script src="libs/btp/js/bootstrap.min.js"></script>

  </head>

  <body>

    <?php require_once './content/menu.php' ?>
    

    <div class="container">
      
      <?php
        require_once 'vendor/autoload.php';
        require_once './config/clienteGoogle.php';

        $service = new Google_Service_Books($client);
        $optParams = array('langRestrict' => 'fr', 'filter'=>'ebooks', 'maxResults'=>'12');
        
        //Pagina inicio
        if (!isset($_GET['verlibro']) && !isset($_GET['busLibro']) ){
        
                $results = $service->volumes->listVolumes('zinedine zidane', $optParams);

                ?>
                <div class="row">
                <?php
                $cont = 0;
                foreach ($results as $item) {
                    //echo $item['volumeInfo']['title'], "<br /> \n";

                ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $item['volumeInfo']['imageLinks']['thumbnail'] ?>" alt="">
                            <div class="caption">
                                
                                <h4><a target="_blank" href="<?= $item['volumeInfo']['infoLink'] ?>"><center><?= $item['volumeInfo']['title'] ?></center></a></h4>
                                <p><?= substr($item['volumeInfo']['description'], 0, 125) ?>...</p>
                            </div>
                            <p>
                            <center><a class="btn btn-primary" href="?verlibro=<?= $item['id']?>">Visualiser</a></center>
                            </p>
                        </div>
                    </div>



                <?php
                  $cont++;
                  if ($cont % 3 == 0){
                      echo "</div><!--FIN ROW-->"
                      . "<div class='row'>";

                  }
                }
                //echo $item['volumeInfo']['imageLinks']['thumbnail'];
              ?>
                </div><!--FIN ROW-->

                <?php
                
        
        }
        ?>
        
        <?php
        
        //Visualizar Liro
        if (isset($_GET['verlibro'])){
            $libroId = $_GET['verlibro'];
            //$results = $service->volumes->listVolumes('pulga messi argentina barcelona', $optParams);
            $libro = $service->volumes->get($libroId);
            require_once './content/verLibro_Traducido.php';
  
        }
        ?>
                
        <?php
        if (isset($_GET['busLibro'])){
            $busLibro = $_GET['busLibro'];
            
            $busqueda = $service->volumes->listVolumes("$busLibro", $optParams);

                ?>
                <div class="row">
                <?php
                $cont = 0;
                foreach ($busqueda as $item) {
                    //echo $item['volumeInfo']['title'], "<br /> \n";

                ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $item['volumeInfo']['imageLinks']['thumbnail'] ?>" alt="">
                            <div class="caption">
                                <h4><a target="_blank" href="<?= $item['volumeInfo']['infoLink'] ?>"><center><?= $item['volumeInfo']['title'] ?></center></a></h4>
                                <p><?= substr($item['volumeInfo']['description'], 0, 125) ?>...</p>
                            </div>
                            <p>
                            <center><a class="btn btn-primary" href="?verlibro=<?= $item['id']?>">Visualiser</a></center>
                            </p>
                        </div>
                    </div>



                <?php
                  $cont++;
                  if ($cont % 3 == 0){
                      echo "</div><!--FIN ROW-->"
                      . "<div class='row'>";

                  }
                }
                //echo $item['volumeInfo']['imageLinks']['thumbnail'];
              ?>
                </div><!--FIN ROW-->

                <?php
                //var_dump ($item['id']);
            
        }
        ?>
                
      
   
      

    </div> <!-- /container -->

   
    
    <?php
        
    ?>
  </body>
</html>
