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
                <div class=" col-xs-12 col-sm-12 col-md-12">
                    <h1>
                        Rating FENAMAC en línea
                    </h1>
                    <hr class="bg-info">
                    <form action="Consulta.php" method="post" class="" name="form1">
                        <div>
                            <p class="text-danger small">*Campo Obligatorio </p>
                            <label for="nombrec">Nombre Completo:</label>
                            <input class="form-control" id="name" name="nombrec" placeholder="Nombre Apellido Paterno Apellido Materno" required="" ><br>
                        </div>
                        <div class="alert alert-primary" role="alert">
                            Aplicar Filtro selecciona un campo 
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="id" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Id</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="nombre" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Nombre</label>
                        </div>
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="titulo" value="option3">
                            <label class="form-check-label" for="inlineCheckbox2">Titulo</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="asociacion" value="option4"  >
                                <label class="form-check-label" for="inlineCheckbox3">Asociacion</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="rating" value="option5">
                                <label class="form-check-label" for="inlineCheckbox2">Rating</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6"  name="g" value="option6" disabled>
                                    <label class="form-check-label" for="inlineCheckbox2">G</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7"  name="fecha" value="option7" disabled>
                                    <label class="form-check-label" for="inlineCheckbox2">Fecha de Nacimiento</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox8" name="flags" value="option8" disabled>
                                    <label class="form-check-label" for="inlineCheckbox2">Flags</label>
                        </div> <br>
                                        <button type="submit" class="btn btn-warning" >Consultar Rating</button>
                                        </form>
                                    </div> <br>
                                    <br>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
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

                                <script src="js/jquery-3.3.1.min.js"></script>
                                <script src="js/bootstrap.min.js"></script>
                                </body>
                                </html>	
