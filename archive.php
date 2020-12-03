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
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <br/>
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
    <?php get_footer();?>