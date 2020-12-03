<?php get_header();?>
    <!--Blog-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--Entrada-->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="card-body phome">
                    <a href="<?php the_permalink();?>">
                        <h2 class="entry-title"><?php the_title();?></h2>
                    </a>
                    <?php the_excerpt();?>
                </div>
                <?php endwhile;?>
                <?php else: ?>
				    <img class="nadaqever center-block " src="https://res.cloudinary.com/pcsolucion/image/upload/v1558495332/Pcsolucion-LiukinTheme/nadaquever.gif">
		            <br>
		            <p class="nadena">No se ha encontrado nada relacionado con tu búsqueda, vuelve a pruebar con otras palabras</p>
		            <br>
                    </p>
                    <div class="center-block">
    					<form role="search" method="get" class="search-form2" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input type="search" id="search-field2" placeholder=" Escribe lo que necesites..." value="" name="s" autocomplete="off">
							<button class="btn btn-lg btn-success" type="submit">Buscar</button>
						</form>	
					</div>
			    <?php endif;?>
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