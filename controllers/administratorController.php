<?php
/*
    CRUD creado por Oscar Amado
    Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

    function index(){
        require_once('views/all/header.php');
        require_once('views/all/nav.php');
        require_once('views/index/index.php');
        require_once('views/index/modals.php');
        require_once('views/all/footer.php');
    }

    function table_autos(){
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>#</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
                <th>Pasajeros</th>
                <th>Cilindros</th>
                <th>Transmision</th>
                <th>Velocidad</th>
                <th>Opciones</th>
                </tr>
            </thead>
            <tbody >       
        <?php
        foreach (parent::get_view_autos() as $data) {
        ?>
        <tr>
            <td><?php echo $data->id; ?> </td>
            <td><?php echo $data->modelo; ?> </td>
            <td><?php echo $data->año; ?> </td>
            <td><?php echo $data->color; ?> </td>
            <td><?php echo $data->pasajeros; ?> </td>
            <td><?php echo $data->cilindros; ?> </td>
            <td><?php echo $data->transmicion; ?> </td>
            <td><?php echo $data->velocidad; ?> </td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Seleccionar <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" onclick="ModalUpdate('<?php echo $data->id; ?>','<?php echo $data->modelo; ?>','<?php echo $data->año; ?>','<?php echo $data->color; ?>','<?php echo $data->pasajeros; ?>','<?php echo $data->cilindros; ?>','<?php echo $data->transmicion; ?>','<?php echo $data->velocidad; ?>');">Actualizar</a></li>
                  <li><a href="#" onclick="deleteAuto('<?php echo $data->id; ?>');">Borrar</a></li>
                </ul>
              </div>
            </td>
        </tr>
        <?php
        }
        ?>
            </tbody>
        </table>    
    <?php   
    }
    
    function deleteauto(){       
            parent::set_delete_auto($_REQUEST['id']);        
    }

    function registerauto(){
        $data = array(
                    'modelo'      => $_REQUEST['modelo'],
                    'año'         => $_REQUEST['año'],
                    'color'       => $_REQUEST['color'],
                    'pasajeros'   => $_REQUEST['pasajeros'],
                    'cilindros'   => $_REQUEST['cilindros'],
                    'transmision' => $_REQUEST['transmision'],
                    'velocidad'   => $_REQUEST['velocidad']
                    );      
                    parent::set_register_auto($data);      
    }    
    
    function updateauto(){
        $data = array(
                    'id'         => $_REQUEST['id'],
                    'modelo'      => $_REQUEST['modelo'],
                    'año'         => $_REQUEST['año'],
                    'color'       => $_REQUEST['color'],
                    'pasajeros'   => $_REQUEST['pasajeros'],
                    'cilindros'   => $_REQUEST['cilindros'],
                    'transmision' => $_REQUEST['transmision'],
                    'velocidad'   => $_REQUEST['velocidad']
                    );      
            parent::set_update_auto($data);        
    }    
    
}
?>
