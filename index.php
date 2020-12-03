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
                        <input type="search" id="search-field2" placeholder="Escribe lo que necesites..." value="" name="s" autocomplete="on">
                        <button class="btn btn-lg btn-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 entradas-home">
                <!--Entrada-->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <div class="card-body phome">
                <?php 
                                $sep = '';
                                foreach ((get_the_category()) as $cat) {
                                    echo $sep . '<a href="' . get_category_link($cat->term_id) . '"  class="cathome ' . $cat->slug . '" title="Ver todos los post de '. esc_attr($cat->name) . '">' . $cat->cat_name . '</a>';
                                $sep = ' ';
                                }
                                ?>
                    <a href="<?php the_permalink($post);?>">
                    <h2 class="entry-title <?php echo esc_attr($cat->name);?>" ><?php the_title();?></h2>
                    </a>
                    <hr/> 
                    <div class="row">
                        <div class="col-lg-4 homedesc">
                            <?php 
                                the_post_thumbnail('medium');
                            ?>
                        </div>
                        <div class="col-lg-8">
                            <?php
                                the_excerpt();
                            ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                <!--Entrada-->  
                </div>
                <?php get_sidebar();?>
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