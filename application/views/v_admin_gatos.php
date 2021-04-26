<h2>Hola
    <?php
    if(isset($this->session->nombre)){
        echo $this->session->nombre;
    }
    ?>! Bienvenid@
</h2>
<section>
    <h3>Añade un nuevo gato</h3>
    <form action="<?= base_url("index.php/gatos/insertar_gato");?>" method="post" enctype="multipart/form-data">
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <div></div>
        <fieldset>
            <legend>Sexo</legend>
            <label>Macho</label>
            <input type="radio" name="genero" value= "M" > <br>
            <label>Hembra</label>
            <input type="radio" name="genero" value= "H" > <br>
        </fieldset>
        <label>descripción</label><br>
        <textarea type="text" name="descripcion" id="descripcion"></textarea><br>
        <label>Selecciona Imagen</label>
        <input type="file" name="file" id="file" accept=".jpg, .png, .gif, .jpeg"> <br>
        <div class="error_modal"><?= $error;?></div>
        <button type="submit">Agregar</button>
    </form>
</section>
<section>
    <table id="table_id" class="display tabla-admin" border='1'>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Descripción</th>

            </tr>
        </thead>   
        <tbody>
            <?php 
                if($gatos != NULL) {
                    
                    foreach( $gatos as $gato ): 
            ?>
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
</section>
<form method='post' action='<?= base_url("index.php/gatos/desconectar");?>'>
<input type='submit'  value='Desconectar' name='desconectar'/> 