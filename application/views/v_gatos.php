<div class="contenedor"> 
        <h2>Gatos en adopcion</h2>
        <section class="grupos-fotos">
        <?php 
                    if($gatos != NULL) {
                        
                        foreach( $gatos as $gato ): 
                ?>
                    
                            <div class="grupo-foto-public">
                                
                            
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
                            </div>
                    
                    <?php endforeach; 
                }else{
                    echo "No hay gatos en adopción en estos momentos";
                }
                ?>
            </div>
        
        </section>

    </div>