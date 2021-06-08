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
        <section class="grupos-fotos">
        <?php 
                    if($gatos != NULL) {
                        
                        foreach( $gatos as $gato ): 
                ?>
                    
                            <section class="grupo-foto-public">
                                
                            
                                <?php if( $gato['imagen'] != '0') { 
                                ?>
                                    <img class="public-foto" src="<?= base_url("subidas/gatos/" . $gato['imagen'])?> " alt="gato">
                                <?php } else { 
                                ?>
                                    <img class="public-foto" src="<?= base_url("subidas/gatos/sombra.png")?> " alt="gato">
                                <?php } ?>

                                <h3><?=$gato['nombre']?></h3>
                                
                                <!-- <?php  if($gato['sexo'] != 'M') {?>
                                    <i class="fas fa-venus icon-sex"></i>
                                    <div>Hembra</div>
                                <?php } else { ?>
                                    <i class="fas fa-mars icon-sex"></i>
                                    <div>Macho</div>
                                <?php } ?>-->
                                <a href="#"></a>
                                    <button class="boton-casilla" >Adopta</button>
                                </a>
                            </section>
                    
                    <?php endforeach; 
                }else{
                    echo "No hay gatos en adopción en estos momentos";
                }
                ?>
        
        </section>

    </div>
</section>


