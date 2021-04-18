<h1>Gatete</h1>
<table id="table_id" class="display" border='1'>
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Sexo</th>

        </tr>
    </thead>   
    <tbody>
        <?php var_dump($gatos);foreach( $gatos as $gato ): ?>
            <tr>
                <td><?=$gato['idgato']?></td>
                <td><?=$gato['nombre']?></td>
                <td><?=$gato['sexo']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table> 