<section class="collbaSlider">

    <div class="slider">
        <div><img class="sliderImg" src="<?= base_url("subidas/slider/principal.jpg")?> " alt="poble"></div>
        <div><img class="sliderImg" src="<?= base_url("subidas/slider/familia.jpg")?> " alt="gato"></div>
        <div><img class="sliderImg" src="<?= base_url("subidas/slider/adopta.jpg")?> " alt="gato"></div>
        <div><img class="sliderImg" src="<?= base_url("subidas/slider/ajuda.jpg")?> " alt="gato"></div>
    </div>
</section>

<section class="seccion-fondo">
    <div class="contenedor"> 
        <h2>Gatos en adopcion</h2>
        <section>
        <div class="multiple-items">
        <?php 
                    if($gatos != NULL) {
                        
                        foreach( $gatos as $gato ): 
                ?>
                    
                            <div >
                                <section class="grupo-foto-slick">
                                
                            
                                <?php if( $gato['imagen'] != '0') { 
                                ?>
                                    <img class="public-foto" src="<?= base_url("subidas/gatos/" . $gato['imagen'])?> " alt="gato">
                                <?php } else { 
                                ?>
                                    <img class="public-foto" src="<?= base_url("subidas/gatos/sombra.png")?> " alt="gato">
                                <?php } ?>

                                <h3><?=$gato['nombre']?></h3>
                                
                                <a href="#"></a>
                                    <button class="boton-casilla" >Adopta</button>
                                </a>
                                </section>

                            </div>
                    
                    <?php endforeach; 
                }else{
                    echo "No hay gatos en adopción en estos momentos";
                }
                ?>
            </div>
        
        </section>

    </div>
</section>
<section>
    <div class="contenedor"> 
        <h2>Actualidad</h2>

        <section>
        <div class="multiple-items">
        <?php 
                    if($noticias != NULL) {
                        
                        foreach( $noticias as $noti ): 
                ?>
                    
                            <div >
                                <section class="grupo-foto-slick fondo">
                                
                            
                                <h3><?=$noti['titulo']?></h3>
                            <?php if( $noti['imagen'] != '0') { 
                            ?>
                                <img class="public-foto" src="<?= base_url("subidas/actualidad/" . $noti['imagen'])?> " alt="noticia">
                            <?php } else { 
                            ?>
                                <img class="public-foto" src="<?= base_url("subidas/actualidad/noImage.jpg")?> " alt="noticia">
                            <?php } ?>
                            
                            <div><?=$noti['fecha']?></div>
                            <div><?=$noti['descripcion']?></div>
                                
                                <a href="#"></a>
                                    <button class="boton-casilla" >Leer más</button>
                                </a>
                                </section>

                            </div>
                    
                    <?php endforeach; 
                }else{
                    echo "No hay noticias en estos momentos";
                }
                ?>
            </div>
        
        </section>

    </div>
</section>


