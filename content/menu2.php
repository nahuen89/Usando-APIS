 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Biblio-Ref</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form navbar-left" method="GET">
						<div class="form-group">
							<input type="text" name="busLibro" class="form-control" placeholder="Nombre del libro">
						</div>
						<button type="submit" class="btn btn-default">Buscar</button>
						</form>
					</li>
					
                    <li>
                        <a href="./index.php">Español</a>
                    </li>
                    <li>
                        <a href="./ingles.php">Ingles</a>
                    </li>
                    <li>
                        <a href="./frances.php">Frances</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('./biblio.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Biblio-Ref</h1>
                        <hr class="small">
                        <span class="subheading" style="color:#F5F5F5">Referencia de librosen distintos idiomas</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


<?php


