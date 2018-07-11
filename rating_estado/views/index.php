<?php
include('../config/conexion.php');
include('cabecera.php')
?> 

<!DOCTYPE html>
<html>
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
            <div class="row">
                <h1>
                    Consultar el Top de los mejores Ajedrecistas por Asociación
                </h1>
            </div>
            <form action="Consulta.php" method="post" name="FormualarioEstado">
                <div class="row">
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="1">
                        <img src="../assets/img/as-ags.jpg" title="Aguascalientes" class="img-thumbnail img-responsive"/>Aguascalientes
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="2">
                        <img src="../assets/img/as-b c.jpg" title="Baja California" class="img-thumbnail img-responsive"/>Baja California
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="3">
                        <img src="../assets/img/as-bcs.jpg" title="Baja California Sur" class="img-thumbnail img-responsive"/>Baja California Sur
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="4">
                        <img src="../assets/img/as-cam.jpg" title="Campeche" class="img-thumbnail img-responsive"/>Campeche
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="5">
                        <img src="../assets/img/as-chh.jpg" title="Chihuahua" class="img-thumbnail img-responsive"/>Chihuahua
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="6">
                        <img src="../assets/img/as-chs.jpg" title="Chiapas" class="img-thumbnail img-responsive"/>Chiapas
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="7">
                        <img src="../assets/img/as-coa.jpg" title="Coahuila" class="img-thumbnail img-responsive"/>Coahuila
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="8">
                        <img src="../assets/img/as-col.jpg" title="Colima" class="img-thumbnail img-responsive"/>Colima
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="9">
                        <img src="../assets/img/as-d f.jpg" title="D.F." class="img-thumbnail img-responsive"/>D.F
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="10">
                        <img src="../assets/img/as-dgo.jpg" title="Durango" class="img-thumbnail img-responsive"/>Durango
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="11">
                        <img src="../assets/img/as-edm.jpg" title="Estado de Mexico" class="img-thumbnail img-responsive"/>Estado de Mexico
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="12">
                        <img src="../assets/img/as-gro.jpg" title="Guerrero" class="img-thumbnail img-responsive"/>Guerrero
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="13">
                        <img src="../assets/img/as-gto.jpg" title="Guanajuato" class="img-thumbnail img-responsive"/>Guanajuato
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="14">
                        <img src="../assets/img/as-hgo.jpg" title="Hidalgo" class="img-thumbnail img-responsive"/>Hidalgo
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="15">
                        <img src="../assets/img/as-ims.jpg" title="IMSS" class="img-thumbnail img-responsive"/>IMSS
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="16">
                        <img src="../assets/img/as-ipn.jpg" title="IPN" class="img-thumbnail img-responsive"/>IPN
                    </div>
                </div>    
                <div class="row">
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="17">
                        <img src="../assets/img/as-jal.jpg" title="Jalisco" class="img-thumbnail img-responsive"/>Jalisco
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="18">
                        <img src="../assets/img/as-mch.jpg" title="Michoacan" class="img-thumbnail img-responsive"/>Michoacan
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="19">
                        <img src="../assets/img/as-mor.jpg" title="Morelos" class="img-thumbnail img-responsive"/>Morelos
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="20">
                        <img src="../assets/img/as-nay.jpg" title="Nayarit" class="img-thumbnail img-responsive"/>Nayarit
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="21">
                        <img src="../assets/img/as-n l.jpg" title="Nuevo Leon" class="img-thumbnail img-responsive"/>Nuevo Leon
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="22">
                        <img src="../assets/img/as-oax.jpg" title="Oaxaca" class="img-thumbnail img-responsive"/>Oaxaca
                    </div>
                    <div class="col-sm-3"> 
                        <input type="radio" name="asoc" value="23">
                        <img src="../assets/img/as-pue.jpg" title="Puebla" class="img-thumbnail img-responsive"/>Puebla
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="24">
                        <img src="../assets/img/as-qro.jpg" title="Queretaro" class="img-thumbnail img-responsive"/>Queretaro
                    </div>
                </div>    
                <div class="row">    
                    <div class="col-sm-3"> 
                        <input type="radio" name="asoc" value="25">
                        <img src="../assets/img/as-roo.jpg" title="Quiintana Roo" class="img-thumbnail img-responsive"/>Quiintana Roo
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="26">
                        <img src="../assets/img/as-sin.jpg" title="Sinaloa" class="img-thumbnail img-responsive"/>Sinaloa
                    </div>
                    <div class="col-sm-3"> 
                        <input type="radio" name="asoc" value="27">
                        <img src="../assets/img/as-slp.jpg" title="San Luis Potosi" class="img-thumbnail img-responsive"/>San Luis Potosi
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="28">
                        <img src="../assets/img/as-son.jpg" title="Sonora" class="img-thumbnail img-responsive"/>Sonora
                    </div>
                </div>    
                <div class="row"> 
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="29">
                        <img src="../assets/img/as-tab.jpg" title="Tabasco" class="img-thumbnail img-responsive"/>Tabasco
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="30">
                        <img src="../assets/img/as-tms.jpg" title="Tamaulipas" class="img-thumbnail img-responsive"/>Tamaulipas
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="31">
                        <img src="../assets/img/as-tlx.jpg" title="Tlaxcala" class="img-thumbnail img-responsive"/>Tlaxcala
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="32">
                        <img src="../assets/img/as-unm.jpg" title="UNAM" class="img-thumbnail img-responsive"/>UNAM
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="33">
                        <img src="../assets/img/as-ver.jpg" title="Veracruz" class="img-thumbnail img-responsive"/>Veracruz
                    </div>
                    <div class="col-sm-3"> 
                        <input type="radio" name="asoc" value="34">
                        <img src="../assets/img/as-yuc.jpg" title="Yucatan" class="img-thumbnail img-responsive"/>Yucatan
                    </div>
                    <div class="col-sm-3">
                        <input type="radio" name="asoc" value="35">
                        <img src="../assets/img/as-zac.jpg" title="Zacatecas" class="img-thumbnail img-responsive"/>Zacatecas
                    </div>
                    <div class="col-sm-3"> 
                        <input type="radio" name="asoc" value="36">
                        <img src="../assets/img/as-mex.jpg" title="M&Eacute;XICO" class="img-thumbnail img-responsive"/>M&Eacute;XICO
                    </div>
                </div> 
                <p>Número de Jugadores a Mostrar:
                    <input type="text" name="top" value="10" size="2" maxlength="2">
                </p>
                <p style="font-size:20px; color: blue; "> Selecciona los campos de la informaci&oacute;n que deseas visualizar en tu consulta. </p>
                <input name="id" type="checkbox" checked="checked" />Id&nbsp;
                <input name="no" type="checkbox" checked="checked" />Nombre&nbsp;
                <input name="ti" type="checkbox" checked="checked"/>T&iacute;tulo&nbsp;
                <input name="as" type="checkbox" />Asociaci&oacute;n&nbsp;
                <input name="ra" type="checkbox" checked="checked" />Rating&nbsp;
                <input name="ge" type="checkbox" />G&nbsp;
                <input name="fn" type="checkbox" checked="checked"/>Fecha de Nacimiento&nbsp;
                <input name="fl" type="checkbox" checked="checked"/>Flags
                <br>  
                <input type="submit" value="Mostrar Top" onClick="validarNum()"><i style="color: black; font-size: 9px;"></i>
            </form>
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
                        //inputName: "Nombre del ajedrecista obligatorio",
                        //inputCheckbox1: "Id del ajedrecista obligatorio"
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
                            data: $('FormualarioEstado#search_chess').serialize(),
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
