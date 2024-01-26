<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?= Html::title('TEC-AJALPAN - itssna-publico'); ?>
    <?= Html::link('res/bootstrap/css/bootstrap.css'); ?>
    <?= Html::link('res/font-awesome/css/fontawesome-all.min.css'); ?>
    <?= Html::script('res/js/jquery.min.js'); ?>
    <style>
    body {
        background-color: #ffffff; /* Cambia a blanco */
    }

    .navbar-header {
        display: flex;
        justify-content: space-between;
    }

    .navbar-left {
        display: flex;
        position: absolute;
        top: 0;
        right: 0;
        margin-top: 15px; /* Adjust as needed */
    }

    .navbar-left a {
        margin-right: 70px;
    }

    .navbar-search {
        position: absolute;
        top: 0;
        right: 0;
        margin-top: 14px; /* Adjust as needed */
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 70%;
    }
</style>

</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top fixed-top">
        <div class="container">

        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./"><b></b></a>
                <img src="/SERV/gobmexico.png" alt="Descripción de la imagen" style="width: 130px; height: auto;">
                
                <div class="navbar-left">
                    <a href="https://www.gob.mx/gobierno" title="Gobierno" class="nav-link" style="color:#fff">Gobierno</a>
                    <a href="https://www.gob.mx/participa" title="Participación Ciudadana" class="nav-link" style="color:#fff">Participa</a>
                    <a href="https://datos.gob.mx" title="Datos Abiertos" class="nav-link" style="color:#fff">Datos</a>
                </div>

                <div class="navbar-search">
                    <a href="https://www.gob.mx/busqueda" style="color:#fff">
                        <span class="sr-only">Búsqueda</span>
                        <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="width: 20px; height: 20px;">
                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="./?view=blog">BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php View::load("index"); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <hr>
                <p class="text-muted text-center">Powered by <a href="https://www.itssna.edu.mx/" target="_blank">itssna</a> &copy; 2024</p>
            </div>
        </div>
    </div>

    <?= Html::script('res/bootstrap/js/bootstrap.min.js'); ?>
</body>
</html>
