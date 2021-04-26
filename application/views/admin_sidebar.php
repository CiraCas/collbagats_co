<div class="franja-lateral">
    <div class="bo-logo">
        <img class="logo" src=<?= base_url("assets/img/logo.png");?> alt="logo">
    </div>
    <section class="menu-navigation">
        <h2>Hola
        <?php
        if(isset($this->session->nombre)){
            echo $this->session->nombre;
        }
        ?>! Bienvenid@
        <form method='post' action='<?= base_url("index.php/gatos/desconectar");?>'>
        <input type='submit'  value='Desconectar' name='desconectar'/>
        </form>
        </h2>
        
        <nav >
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
    </section>
</div>