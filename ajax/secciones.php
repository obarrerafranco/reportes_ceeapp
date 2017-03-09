 <?php 
 require '../registros/db.php';

   $seman = $_POST['id_semana'];
   echo $seman;
   $logos = "";
   $letras = "SELECT cl.letra as letra,cl.nombre_cliente as nam_cli, cl.logo as logo FROM campanas cp 
              INNER JOIN clientes cl ON cl.id = cp.id_cliente 
              INNER JOIN reportes_clientes rp ON cp.id = rp.id_campana
              INNER JOIN semanas wk ON rp.id_semana = wk.id
              WHERE rp.id_semana = $seman AND status=1 GROUP BY letra ASC";
    $actual= 0;
    $actual1= 0;
    foreach ($PDO->query($letras) as $lets2) {
      $actual++;
      if($actual%2==0){
       $logos .='<section id="'.strtolower($lets2['letra']).'" class="bg-light-gray">';  
      }else{
        $logos .='<section id="'.strtolower($lets2['letra']).'">'; 
      }

          
       $logos .= '<div class="container">
          <div><h2 class="section-heading">'.$lets2['letra'].'</h2></div><br />';
            $lista = "SELECT cl.letra as letra,cl.nombre_cliente as nam_cli,cl.id as id_cliente, cl.logo as logo, rp.id_semana as id_semana, rp.id_ciudad as idciudad FROM campanas cp
                INNER JOIN clientes cl ON cl.id = cp.id_cliente 
                INNER JOIN reportes_clientes rp ON cp.id = rp.id_campana
                INNER JOIN semanas wk ON rp.id_semana = wk.id
                WHERE rp.id_semana = $seman AND status=1 AND letra= '".$lets2['letra']."' GROUP BY nam_cli ASC";


            foreach ($PDO->query($lista) as $list2) {
                $actual1++;
                    if($actual1%4==0){
                      $logos .='<div class="row">';  
                    }else{
                    
                    }
                $logos .='<div class="col-6 col-sm-3">
                      <div class="text-center">
                         <form method="post" id="a'.$list2["id_cliente"].'" action="reportes/clientes/index.php">
                          <a href="#" onclick="enviar('.$list2["id_cliente"].')"><img src="img/logos/'.$list2['logo'].'"></a>
                          <h3 class="text-center"><a href="#" onclick="enviar('.$list2["id_cliente"].')">'.$list2["nam_cli"].'</a></h3>
                          <input type="hidden" name="wekks" value="'.$list2['id_semana'].'">
                          <input type="hidden" name="client" value="'.$list2['id_cliente'].'">
                          <input type="hidden" name="citias" value="'.$list2['idciudad'].'">
                        </form>
                      </div>
                    </div>';

                  if($actual1%4==0){
                      $logos .='</div>';  
                    }else{
                    
                    }
         
              }                                               
              $logos .= '</div>
               </section>';

    }


    echo $logos;
    ?>