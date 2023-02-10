<?php get_header(); ?>
<div class="content">
<div class="container">
<?php
echo do_shortcode('[woocommerce_product_search]');
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
_e("<h1 class='archive_title_h1'>Результаты поиска: ".get_query_var('s')."</h1>"); ?>
<div class="blog_row">
<?
        while ( $the_query->have_posts() ) {
		$the_query->the_post();
        ?>
		<? get_template_part('archivecart')?> 
        <?php
        }
?>	
</div>	
<?php
}else{
?>
<h1 class="archive_title_h1">Ничего не найдено</h1>
<div class="alert alert-info">
<p>Извините, но по Вашему запросу товаров не найдено</p>
</div>
<?php } ?>
</div>
</div>
<?php get_footer(); ?>