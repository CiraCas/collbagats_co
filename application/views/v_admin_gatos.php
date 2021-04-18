<h1>Gatete</h1>
<table id="table_id" class="display tabla-admin" border='1'>
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Descripción</th>
            <th></th>

        </tr>
    </thead>   
    <tbody>
        <?php 
        if($gatos != NULL) {
            
            foreach( $gatos as $gato ): 
                var_dump ($gato);?>
            var_dump ($gato);
                <tr>
                    <td><?=$gato['idgato']?></td>
                    <td><?=$gato['nombre']?></td>
                    <td><?=$gato['sexo']?></td>
                    <td><?=$gato['descripcion']?></td>
                    <td class= "casilla-iconos">
                        <i class="fas fa-trash-alt icon-admin"></i>
                        <i class="fas fa-edit"></i>
                    </td>

                </tr>
            <?php endforeach; 
        }else{
            echo "No hay gatos en adopción en estos momentos";
        }
        ?>

    </tbody>
</table> 