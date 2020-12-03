<?php get_header();?>
    <!--Blog-->
    <div class="formularioimagen">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <!--Buscador-->
                    <form role="search" method="get" class="search-form2" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <button class="btn-search" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                    </svg>
                    </button>
                        <input type="search" id="search-field2" placeholder="Escribe lo que necesites..." value="" name="s" autocomplete="off">
                        <button class="btn btn-lg btn-success" type="submit">Buscar</button>
                        <?php
								if ( in_category('recursos') ) {
                                    echo '<div class="suggestion-wrap">
                                    <a href="/tematica/fuentes/" rel="tag">Fuentes</a>
								<a href="/tematica/vectores/" rel="tag">Vectores</a></span>
								<a href="/tematica/iconos-psd/" rel="tag">Iconos PSD</a>
								<a href="/tematica/plantillas-psd/" rel="tag">Plantillas PSD</a>
                                <a href="/tematica/webs-psd/" rel="tag">Webs PSD</a>
                                </div>';                           
								}
								else if ( in_category('temas-de-wordpress') ) {
									echo '<div class="suggestion-wrap">
                                    <a href="/tematica/belleza/" rel="tag">Belleza</a>
									<a href="/tematica/blog/" rel="tag">Blog</a>
									<a href="/tematica/bodas/" rel="tag">Bodas</a>
									<a href="/tematica/clinica-hospital/" rel="tag">Hospital</a>
									<a href="/tematica/deportes/" rel="tag">Deportes</a>
									<a href="/tematica/diseno-arquitectura/" rel="tag">Diseño</a>
									<a href="/tematica/educacion/" rel="tag">Educación</a>
									<a href="/tematica/empresa-negocio/" rel="tag">Negocio</a>
									<a href="/tematica/inmobiliaria/" rel="tag">Inmobiliaria</a>
									<a href="/tematica/motor/" rel="tag">Motor</a>
									<a href="/tematica/multitematico/" rel="tag">Multipropósito</a>
									<a href="/tematica/musica-conciertos-grupos/" rel="tag">Música</a>
									<a href="/tematica/noticias-magazine/" rel="tag">Noticias</a>
									<a href="/tematica/portafolio/" rel="tag">Portafolio</a>
									<a href="/tematica/tienda/" rel="tag">Tienda</a>
									<a href="/tematica/viajes/" rel="tag">Viajes</a>
                                </div>';
                                    }
								?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <br/>
    <?php
    if ( in_category('review')){
        echo '<div class="container-fluid-dos">';
        echo '<div class="row">';
        echo '<div class="col-md-2 icocatreview">';
        echo '<a href="https://pc-solucion.es/category/review/hardware/teclados/"><img class="img-rounded" src="https://res.cloudinary.com/pcsolucion/image/upload/v1569688488/Pcsolucion-LiukinTheme/reviews_de_teclados.jpg" /></a>' .'<br/>' .'<h3 class="categoriareview">Teclados</h3>';
        echo '</div>';
        echo '<div class="col-md-2 icocatreview">';
        echo '<a href="https://pc-solucion.es/category/review/hardware/ratones/"><img class="img-rounded" src="https://res.cloudinary.com/pcsolucion/image/upload/v1569688140/Pcsolucion-LiukinTheme/reviews_de_ratones.jpg" /></a>' .'<br/>' .'<h3 class="categoriareview">Ratones</h3>';
        echo '</div>';
        echo '<div class="col-md-2 icocatreview">';
        echo '<a href="https://pc-solucion.es/category/review/hardware/auriculares/"><img class="img-rounded" src="https://res.cloudinary.com/pcsolucion/image/upload/v1569687654/Pcsolucion-LiukinTheme/reviews_de_auriculares.jpg" /></a>' .'<br/>' .'<h3 class="categoriareview">Auriculares</h3>';
        echo '</div>';
        echo '<div class="col-md-2 icocatreview">';
        echo '<a href="https://pc-solucion.es/category/review/hardware/almacenamiento/"><img class="img-rounded" src="https://res.cloudinary.com/pcsolucion/image/upload/v1569687874/Pcsolucion-LiukinTheme/reviews_de_ssd_discos_usb.jpg" /></a>' .'<br/>' .'<h3 class="categoriareview">Almacenamiento</h3>';
        echo '</div>';  
        echo '<div class="col-md-2 icocatreview">';
        echo '<a href="https://pc-solucion.es/category/review/hardware/torres-cajas/"><img class="img-rounded" src="https://res.cloudinary.com/pcsolucion/image/upload/v1569688628/Pcsolucion-LiukinTheme/reviews_cajas_de_pc.jpg" /></a>' .'<br/>' .'<h3 class="categoriareview">Torres/Cajas</h3>';
        echo '</div>';
        echo '<div class="col-md-2 icocatreview">';
        echo '<a href="https://pc-solucion.es/category/review/hardware/mandos-gamepads/"><img class="img-rounded" src="https://res.cloudinary.com/pcsolucion/image/upload/v1569687260/Pcsolucion-LiukinTheme/reviews_de_gamepads.jpg" /></a>' .'<br/>' .'<h3 class="categoriareview">Mandos/Gamepads</h3>';
        echo '</div>';
        
        echo '</div>';
        
        echo '<div class="row">';
        echo '<div class="col-md-2 icocatreview">';
        echo '';
        echo '</div>';
        echo '<div class="col-md-2 icocatreview">';
        echo '<a href="https://pc-solucion.es/category/review/hardware/monitores/"><img class="img-rounded" src="https://res.cloudinary.com/pcsolucion/image/upload/v1569691270/Pcsolucion-LiukinTheme/reviews_de_monitores.jpg" /></a>' .'<br/>' .'<h3 class="categoriareview">Monitores</h3>';
        echo '</div>';
        echo '<div class="col-md-2 icocatreview">';
        echo '<a href="https://pc-solucion.es/category/review/hardware/tarjetas-graficas/"><img class="img-rounded" src="https://res.cloudinary.com/pcsolucion/image/upload/v1569691517/Pcsolucion-LiukinTheme/reviews_de_tarjetas_graficas.jpg" /></a>' .'<br/>' .'<h3 class="categoriareview">Tarjetas Gráficas</h3>';
        echo '</div>';
        echo '<div class="col-md-2 icocatreview">';
        echo '<a href="https://pc-solucion.es/category/review/hardware/refrigeraciones/"><img class="img-rounded" src="https://res.cloudinary.com/pcsolucion/image/upload/v1569691657/Pcsolucion-LiukinTheme/reviews_de_refrigeracion_pc.jpg" /></a>' .'<br/>' .'<h3 class="categoriareview">Refrigeraciones</h3>';
        echo '</div>';  
        echo '<div class="col-md-2 icocatreview">';
        echo '<a href="https://pc-solucion.es/category/review/hardware/webcams/"><img class="img-rounded" src="https://res.cloudinary.com/pcsolucion/image/upload/v1569691861/Pcsolucion-LiukinTheme/reviews_de_webcams.jpg" /></a>' .'<br/>' .'<h3 class="categoriareview">Webcams</h3>';
        echo '</div>';
        echo '<div class="col-md-2 icocatreview">';
        echo '';
        echo '</div>';
    echo '</div>';
    }
    else{

    }

    ?>
    <br/>
    <h1 class="titulocat"><?php echo single_term_title(); ?></h1>
    <p class="descat"><?php echo term_description(); ?></p>
        <div class="row">
    <?php $i = 1; while(have_posts()) : the_post();?>
        <div class="col-lg-4">
            <div class="col-lg-12 destacada-archive card-body phome">
            <?php
				if ( in_category('review') ) {
            echo '<span class="anota">';
            $terms = get_the_term_list( $post->ID, 'generos', '', ', ' ); 
            $terms = strip_tags( $terms );
            echo $terms;
            echo '</span>';
                }
                else{

                }
            ?>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        <?php endif; ?>
                        <h2 class="nombre-archive"><a class="nombre-archive text-center"href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            </div>
        </div>
        <?php if ( $i % 3 === 0 ) { echo '</div><div class="row">'; } ?>
    <?php $i++; endwhile; wp_reset_query(); ?>
</div>
                <!--Entrada-->
                <!--Paginacion-->
                <div class="card-body">
                   <?php get_template_part('template-parts/content', 'paginacion');?>
                </div>
                <!--Paginacion-->
            </div>
            <!--Entradas-->
        </div>
    </div>
    <!--Blog-->
    <?php get_footer();?>