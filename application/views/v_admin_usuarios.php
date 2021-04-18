<h2>Hola
    <?php
    if(isset($this->session->nombre)){
        echo $this->session->nombre;
    }
    ?>! Bienvenid@
</h2>
<table id="table_id" class="display" border='1'>
    <thead>
        <tr>
            <th>Email</th>
            <th>Nombre</th>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>Permisos</th>
        </tr>
    </thead>   
    <tbody>
        <?php foreach( $usuarios as $usu ): ?>
            <tr>
                <td><?=$usu['mail']?></td>
                <td><?=$usu['nombre']?></td>
                <td><?=$usu['apellido1']?></td>
                <td><?=$usu['apellido2']?></td>
                <td><?=$usu['tipo_usuario']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table> 

<form method='post' action='<?= base_url("index.php/admin/desconectar");?>'>
    <input type='submit'  value='Desconectar' name='desconectar'/>
</form>