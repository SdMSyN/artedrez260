<?php
include('../config/conexion.php');
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device-witdh, user-scalable=no, initial-scalable=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title></title>
        <!-- Css -->
        <link rel="stylesheet" type="text/css" href="../components/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../components/css/estilos.css">
        <!-- jQuery -->
        <script src="../components/js/jquery.min.js"></script>
        <script src="../components/js/jquery.validate.min.js"></script>
        <script src="../components/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div id="loading">
                    <img src="../assets/img/Cargando.gif" height="300" width="400">
                </div>
            </div>

            <div class="container">
                <div class=" row">
                    <div class=" col-xs-12 col-sm-12 col-md-12">
                        <h1>
                            Rating FENAMAC en línea
                        </h1>
                        <hr class="bg-info">
                        <form id="search_chess" name="search_chess">
                            <div>
                                <p class="text-danger small">*Campo Obligatorio </p>
                                <label for="nombrec">Nombre Completo:</label>
                                <input class="form-control" id="name" name="nombrec" placeholder="Nombre Apellido Paterno Apellido Materno" required="" ><br>
                            </div>
                            <div class="alert alert-primary" role="alert">
                                Aplicar Filtro selecciona un campo 
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="id" value="option1" checked >
                                <label class="form-check-label" for="inlineCheckbox1">Id</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="nombre" value="option2" checked >
                                <label class="form-check-label" for="inlineCheckbox2">Nombre</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="titulo" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Titulo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="asociacion" value="option4" checked >
                                <label class="form-check-label" for="inlineCheckbox4">Asociacion</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="rating" value="option5" checked>
                                <label class="form-check-label" for="inlineCheckbox5">Rating</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox6"  name="g" value="option6" >
                                <label class="form-check-label" for="inlineCheckbox6">G</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox7"  name="fecha" value="option7">
                                <label class="form-check-label" for="inlineCheckbox7">Fecha de Nacimiento</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" name="flags" value="option8">
                                <label class="form-check-label" for="inlineCheckbox8">Flags</label>
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

                <div class="row text-center"><h1>Resultado Fenamac</h1></div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="data">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Titulo</th>
                                <th>Asociacion</th>
                                <th>Rating</th>
                                <th>G</th>
                                <th>Fecha</th>
                                <th>Flags</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>


            </div>
            <script type="text/javascript">
                $('#loading').hide();
                $(document).ready(function () {
                    //añadir nuevo
                    $('#search_chess').validate({
                    rules: {
                        inputName: {required: true},
                        inputCheckbox1: {required: true}
                    },
                    messages: {
                        inputName: "Nombre del ajedrecista obligatorio",
                        inputCheckbox1: "Id del ajedrecista obligatorio"
                    },
                    tooltip_options: {
                        inputName: {trigger: "focus", placement: "bottom"},
                            inputCheckbox1: {trigger: "focus", placement: "bottom"}
                    },
                    submitHandler: function (form) {
                        $('#loading').show();
                        $.ajax({
                            type: "POST",
                            url: "../controllers/Consulta.php",
                            data: $('form#search_chess').serialize(),
                            success: function (msg) {
                                console.log(msg);
                                var msg = jQuery.parseJSON(msg);
                                if (msg.error == 0) {
                                    $("#data tbody").html("");
                                    $.each(msg.dataRes, function (i, item) {
                                        var newRow = '<tr>'
                                            + '<td>' + msg.dataRes[i].id_no + '</td>'
                                            + '<td>' + msg.dataRes[i].name + '</td>'
                                            + '<td>' + msg.dataRes[i].title + '</td>'
                                            + '<td>' + msg.dataRes[i].club_name + '</td>'
                                            + '<td>' + msg.dataRes[i].rat_nac + '</td>'
                                            + '<td>' + msg.dataRes[i].fide_no + '</td>'
                                            + '<td>' + msg.dataRes[i].birthday + '</td>'
                                            + '<td>' + msg.dataRes[i].k + '</td>'
                                            + '</tr>';
                                            $(newRow).appendTo("#data tbody");
                                    })
                                     $("#loading").hide();
                                } else {
                                    var newRow = '<tr><td colspan="3">' + msg.msgErr + '</td></tr>';
                                    $("#data tbody").html(newRow);
                                }
                            },
                            error: function (x, e) {
                                var cadErr = '';
                                if (x.status == 0) {
                                cadErr = '¡Estas desconectado!\n Por favor checa tu conexión a Internet.';
                                } else if (x.status == 404) {
                                cadErr = 'Página no encontrada.';
                                } else if (x.status == 500) {
                                cadErr = 'Error interno del servidor.';
                                } else if (e == 'parsererror') {
                                cadErr = 'Error.\nFalló la respuesta JSON.';
                                } else if (e == 'timeout') {
                                cadErr = 'Tiempo de respuesta excedido.';
                                } else {
                                cadErr = 'Error desconocido.\n' + x.responseText;
                                }
                                alert(cadErr);
                            }
                        });
                            $(".loader").hide();
                    }, error: function () {
                        alert("Error no se encontro ajedrecista");
                    }
                    });
                });
            </script>
    </body>
</html>	
