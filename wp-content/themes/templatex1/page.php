<?php
/**
 * The template for displaying all page.
 *
 * @package storefront
 */
get_header(); ?>
<style>
/*@media screen and (max-width: 980px){*/
/*.menu__btn {*/
/*	top:20px;*/
/*}*/
/*.woo_h1 {*/
/*  margin-top: 120px;*/
/*  margin-left: 140px;*/
/*  font-size: 30px;*/
/*  width: 30%;*/
/*}*/
/*.breadcrumbs {*/
/*	margin-top: 70px;*/
/*}*/
/*.hamburger-menu {*/
/*    padding-bottom: 0px;*/
/*    margin-top: -80px;*/
/*	background-color: #F5F5F5;*/

/*}*/
/*}*/
</style>	
<div class="container entry_content">
<div class="woo_bread_wrap bread_main_wrap">
<section class="site">
	<?php
		if ( is_active_sidebar( 'bread_widget' ) ) : 
		dynamic_sidebar( 'bread_widget' );
		endif;
	?>
    <?php
    the_title( '<h1 class="title_privacy-policy">', '</h1>' );
    ?>
</div>
</section>

<section class="site">
    <div class="privacy-policy__wrap">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>


	<?php $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
    );
$parent = new WP_Query( $args );
if ( $parent->have_posts() ) :?>
	<ul class="privacy-policy">
        <li class="list__privacy">
       <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
	        <a href="<?php the_permalink() ?>"><span><?php the_title(); ?></span></a>
	   <?php endwhile; ?>
        </li>
	</ul>
<?php endif; wp_reset_query(); ?>
    </div>
</section>

<?php get_footer();