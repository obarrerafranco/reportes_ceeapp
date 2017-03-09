<?php 
require '../registros/db.php';

    $lista ="";
    $seman = $_POST['id_semana'];
    $letras = "SELECT letra FROM campanas cp 
                INNER JOIN clientes cl ON cl.id = cp.id_cliente 
                INNER JOIN reportes_clientes rp ON cp.id = rp.id_campana
                INNER JOIN semanas wk ON rp.id_semana = wk.id
                WHERE rp.id_semana = $seman AND status=1 GROUP BY letra ASC";

         $lista .= '<li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll2" href="http://localhost:8081/cee_report/reportes/jcdecaux/">JCDecaux</a>
                    </li>';       

      foreach ($PDO->query($letras) as $lets) {

          $lista .=  '<li><a class="page-scroll2" href="#'.strtolower($lets['letra']).'">'.utf8_encode($lets['letra']).'</a></li>';

      }

    $lista .= '<li>
        <a class="page-scroll2" href="login/logout.php">Salir</a>
    </li>';

    echo $lista;
?>