<?php get_header();?>
    <!--Blog-->
    <div class="container">
        <div class="row">
            <!--Entradas-->
            <div class="col-lg-12">
                <!--Entrada-->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="card-body">
                        <h1><?php the_title();?></h1>
                        <a class="small"><?php the_category('');?></a>
                        <?php the_content();?>
                    </div>
                <?php endwhile; endif; ?>
                <!--Entrada-->
            </div>
            <!--Entradas-->
        </div>
    </div>
    <!--Blog-->
<?php get_footer();?>