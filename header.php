<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--CSS-->
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
<?php if ( is_home() ) { ?>
<h1 class="off"><?php bloginfo("name"); ?></h1>
<?php }  else { ?>
<?php
}
?>
     <!--Menu-->
	  <nav class="navbar navbar-expand-md navbar-light bg-white" role="navigation">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php 
			if ( function_exists( 'the_custom_logo' ) ) {
 					the_custom_logo();
			}
			else{
			echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
			}
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
       ?>
    </div>
</nav>