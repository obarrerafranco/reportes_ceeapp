 <?php 
 require '../registros/db.php';

   $seman = $_POST['id_sem'];
   $clie = $_POST['id_cli'];
   $logos = "";
   
         
       $logos .= '<section><h2 class="section-heading">Campañas</h2><div class="container">';
            $lista = "SELECT cl.letra as letra,cl.nombre_cliente as nam_cli,cp.id_cliente as id_cliente, cl.logo as logo, cp.nombre_campana as nombre_cp,rp.id_semana as id_semana, rp.id_ciudad as id_ciudad, rp.id_campana as id_campana FROM campanas cp 
              INNER JOIN clientes cl ON cl.id = cp.id_cliente 
              INNER JOIN reportes_clientes rp ON cp.id = rp.id_campana
              INNER JOIN semanas wk ON rp.id_semana = wk.id
              WHERE rp.id_semana = $seman AND cp.id_cliente = $clie AND status=1 GROUP BY cp.id DESC";

              $actual1 = 0;
            foreach ($PDO->query($lista) as $list2) {
                $actual1++;
                    if($actual1%4==0){
                      $logos .='<div class="row">';  
                    }else{
                    
                    }
                $logos .='<div class="col-6 col-sm-3">
                      <div class="text-center">
                         <form method="post" id="a'.$list2["id_campana"].'" action="../reportes/campanas/index.php">
                          <a href="#" onclick="enviar('.$list2["id_campana"].')"><img src="../img/logos/'.$list2['logo'].'"></a>
                          <h3 class="text-center"><a href="#" onclick="enviar('.$list2["id_campana"].')">'.$list2["nombre_cp"].'</a></h3>
                          <input type="hidden" name="wekks" value="'.$list2['id_semana'].'">
                          <input type="hidden" name="client" value="'.$list2['id_cliente'].'">
                          <input type="hidden" name="citias" value="'.$list2['id_ciudad'].'">
                          <input type="hidden" name="camps" value="'.$list2['id_campana'].'">
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

    echo $logos;
    ?>