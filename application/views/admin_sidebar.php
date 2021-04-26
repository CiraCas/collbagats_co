<div class="franja-lateral">
    <div class="bo-logo">
        <img class="logo" src=<?= base_url("assets/img/logo.png");?> alt="logo">
    </div>
    <nav class="menu-navigation">
        <div></div>
        <ul class="menu-list">
            <li class="menu-list-item <?php if($activa == 'gatos') echo 'activa';?>">
                <a href="<?= base_url("index.php/gatos/gato");?>">Gatos</a>
            </li>
            <li class="menu-list-item <?php if($activa == 'adopciones') echo 'activa';?>">
                <a href="#">Adopciones</a>
            </li>
            <li class="menu-list-item <?php if($activa == 'noticias') echo 'activa';?>">
                <a href="#">Noticias</a>
            </li>
            <li class="menu-list-item <?php if($activa == 'usuarios') echo 'activa';?>">
                <a href="<?= base_url("index.php/usuarios/usuario");?>">Usuarios</a>
            </li>
        </ul>
    </nav>
</div>