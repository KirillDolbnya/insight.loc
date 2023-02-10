<?php
/**
 * The template for displaying all page.
 *
 * @package storefront
 */
get_header(); ?>
<style>
@media screen and (max-width: 500px){
.menu__btn {
	top:20px;	
}
.woo_h1 {
  margin-top: 120px;
  margin-left: 140px;
  font-size: 70px;
  width: 30%;
}
.breadcrumbs {
	margin-top: 70px;
}
.hamburger-menu {
    padding-bottom: 0px;
    margin-top: -80px;
	background-color: #F5F5F5;

}
</style>	
<div class="container entry_content">
<div class="woo_bread_wrap bread_main_wrap">
<section class="site">
	<?php
		if ( is_active_sidebar( 'bread_widget' ) ) : 
		dynamic_sidebar( 'bread_widget' );
		endif;
	?>
</div>
<?php 
	the_title( '<h1 class="woo_h1">', '</h1>' );
?>
</section>


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
if ( $parent->have_posts() ) : ?>
	<ul class="pages_list">
       <?php while ( $parent->have_posts() ) : $parent->the_post(); ?><li>
	   <a href="<?php the_permalink() ?>"><span><?php the_title(); ?></span></a>
	   </li><?php endwhile; ?>
	</ul>
<?php endif; wp_reset_query(); ?>
</div>

<?php get_footer();