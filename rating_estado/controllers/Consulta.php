<?php
    include('../config/conexion.php');
    $ajedrecista = array();
    $msgErr = '';
    $limit = '99';
    $ban = false;

    
    //$nombrec = (isset ($_POST['nombrec'])) ? $_POST['nombrec'] : "";
    $asoc = (isset($POST['asoc']))? $POST[asoc] : "";
    $id = (isset ($_POST['id'])) ? $_POST['id'] : "";
    $nombre = (isset ($_POST['nombre'])) ? $_POST['nombre'] : "";
    $titulo = (isset ($_POST['titulo'])) ? $_POST['titulo'] : "";
    $asociacion = (isset ($_POST['asociacion'])) ? $_POST['asociacion'] : "";
    $rating = (isset ($_POST['rating'])) ? $_POST['rating'] : "";
    $g = (isset ($_POST['g'])) ? $_POST['g'] : "";
    $fecha = (isset ($_POST['fecha'])) ? $_POST['fecha'] : "";
    $flags = (isset ($_POST['flags'])) ? $_POST['flags'] : "";
    
    $sqlPostajedrecista = "SELECT * FROM $tFed WHERE club_name ='$asoc' ORDER BY rating DESC LIMIT'$limit'";
    
    
    $resPostAjedrecista = $con->query($sqlPostajedrecista);
    if($resPostAjedrecista->num_rows > 0){
        while($rowPostAjedrecista = $resPostAjedrecista->fetch_assoc()){
            //$cadRes .= '<option value="'.$rowGetMateria['id'].'">'.$rowGetMateria['nombre'].'</option>';
            $id = $rowPostAjedrecista['id_no'];
            $nombre = $rowPostAjedrecista['name'];
            $titulo = $rowPostAjedrecista['title'];
            $asociacion = $rowPostAjedrecista['clun_name'];
            $rating = $rowPostAjedrecista['rat_nac'];
            $g = $rowPostAjedrecista['fide_no'];
            $fecha = $rowPostAjedrecista['birthday'];
            $flags = $rowPostAjedrecista['k'];
            $ajedrecista[] = array('id_no'=>$id, 'name'=>$nombre, 'title'=>$titulo, 'club_name'=>$asociacion, 'rat_nac'=>$rating,
                'fide_no'=>$g, 'birthday'=>$fecha, 'k'=>$flags);
            $ban = true;
        }
    }else{
        $ban = false;
        $msgErr = 'El ajedrecista no tiene Rating '.$con->error;
    }
    
    if($ban){
        echo json_encode(array("error"=>0, "dataRes"=>$ajedrecista));
    }else{
        echo json_encode(array("error"=>1, "msgErr"=>$msgErr));
    }
?>    
 