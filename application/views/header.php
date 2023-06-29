<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elecciones Ecuador</title>
    <!-- Importando JQuerry -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- API Key de GoogleMaps-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoObNZz2rn6AMxGvMKq1GDTFvd7CzGwdY&libraries=places&callback=initMap"></script>
</head>

<body>
    <style>
        .foot {
            background-color: #000000;
            color: #ffffff;
        }

        .tit {
            margin-top: 10px;
            padding: 12px;
            background-color: #996e02;
            border-radius: 22px;
            color: white;
        }
    </style>


    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <img src="<?php echo base_url(); ?>/assets/images/logo.png" alt="Inicio" width="125px">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url(); ?>/dignidades/ingresar">Ingresar Candidato</a></li>
                    <li><a href="<?php echo site_url(); ?>/dignidades/listar">Listar Candidatos</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ubicaciones <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url(); ?>/dignidades/locaPre">Presidente</a></li>
                            <li><a href="<?php echo site_url(); ?>/dignidades/locaAsaNac">Asambleista Nacional</a></li>
                            <li><a href="<?php echo site_url(); ?>/dignidades/locaAsaPro">Asambleista Provincial</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo site_url(); ?>/dignidades/locaGene">Localizaciones Generales</a></li>
                            <li><a href="<?php echo site_url(); ?>/dignidades/locaIdeo">Localizaciones de Ideologias</a></li>

                            
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>