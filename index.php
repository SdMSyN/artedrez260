<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device-witdh, user-scalable=no, initial-scalable=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>


        <div class="container">
            <?php include('cabecera.php'); ?>   
            <div class=" row">
                <div class=" col-xs-12 col-sm-8 col-md-8">
                    <h1>
                        Rating FENAMAC en línea
                    </h1>
                    <hr class="bg-info">
                    <form action="buscarRating.php" method="post" class="" name="form1">
                        <div>
                            <p class="text-danger small">*Campo Obligatorio </p>
                            <label for="nombrec">Nombre Completo:</label>
                            <input class="form-control" id="inputap" name="input_nombrec" placeholder="apellido paterno, apellido materno, nombre" required="" ><br>
                        </div>
                        <div class="alert alert-primary" role="alert">
                            Aplicar Filtro selecciona un campo 
                        </div>
                        <div>
                            <input name="id" type="checkbox" checked="checked" >Id&nbsp;
                            <input name="no" type="checkbox" checked="checked" >Nombre&nbsp;
                            <input name="ti" type="checkbox" >T&iacute;tulo&nbsp;
                            <input name="as" type="checkbox" checked="checked" >Asociaci&oacute;n&nbsp;
                            <input name="ra" type="checkbox" checked="checked" >Rating&nbsp;
                            <input name="ge" type="checkbox" >G&nbsp;
                            <input name="fn" type="checkbox" >Fecha de Nacimiento&nbsp;
                            <input name="fl" type="checkbox" >Flags
                        </div>
                        <button type="submit" class="btn btn-warning" >Consultar Rating</button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-4">
                    <p> 
                        <b>Id:</b> Número de Identificación en la lista de la FENAMAC<br>
                        <b>Nombre:</b> Nombre y Apellidos del Ajedrecista <br>
                        <b>Título:</b> El título que ostenta como maestro, puede ser; g(Gran), m(Internacional), f(Fide), n(Nacional), c(Candidato) <br>
                        <b>Asociación:</b> Asociación a la cual está inscrito el Ajedrecista. <br>
                        <b>Rating:</b> Nacional o FIDE, mostrará el más alto. <br>
                        <b>G:</b> Partidas jugadas que se tomaron en cuenta para el nuevo Rating. <br>
                        <b>Fecha de Nacimiento:</b>> Fecha de Nacimiento del Ajedrecista. <br>
                        <b>Flags:</b> Banderas.</p>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>	
