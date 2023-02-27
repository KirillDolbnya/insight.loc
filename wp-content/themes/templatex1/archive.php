<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); 
$categories = get_the_category();
if(!empty($categories[0]->cat_ID)) {
$category_id = $categories[0]->cat_ID;
} else {
	$category_id = null;
}

$maincategory = get_queried_object();
$idofcat = $maincategory->term_id;
$currentCatID = $maincategory->term_id;
?>

<div class="projects">
<section class="site">
<!-- <div class="otstup"></div> -->
        <div class="bedroom__nav">
		<?php
			if ( is_active_sidebar( 'bread_widget' ) ) : 
			dynamic_sidebar( 'bread_widget' );
			endif;
		?>
        </div>

<?php the_archive_title( '<h1 class="woo_h1 archive_title_h1">', '</h1>' ); ?>

<div class="projects__wrap">


<?php
$terms = get_field('rubric_list', get_option('page_on_front')); 
$count = 0;
$current_cat_id  = get_query_var('cat');
$showposts = 100;
$args = array('cat' => $current_cat_id, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => $showposts,'post_status' => 'publish');
query_posts($args);
$count_row = count($args)+1;
?>


  <div class="pc-slider projects_box_main">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
	  
<?php


    if (have_posts()) : while (have_posts()) : the_post(); $count++; ?>      

  <?php if($count % 4 == 1): ?>
          <div class="swiper-slide">
          <div class="itc-slider__item">
          <div class="block__projects">

              <div class="rightscreen">
                <div class="screen">
				
                  <a href="<?php the_permalink(); ?>" class="projectsAdapt fotoAdaptiv_1 project_item_link">
                    <img class="fotoAdaptiv fotoONE" src="<?=get_the_post_thumbnail_url()?>">
                     <div class="podKartinkoi">
                     <p><?php the_title(); ?></p>
                     <img class="plusArrow" src="<?=get_template_directory_uri()?>/assests/images/Rectangle 178.svg">
                     </div>
                  </a>
				  
                </div>
              </div>
	<?php endif ?>
	
	<?php if($count % 4 == 2): ?>
	     <div class="left left_object_fix">
                <div class="screen">
				<div class="leftscreen">
				
				<a href="<?php the_permalink(); ?>" class="projectsAdapt secondProj fotoAdaptiv_2 project_item_link">
				<img class="fotoAdaptiv FOTO TWO" src="<?=get_the_post_thumbnail_url()?>">
				<div class="podKartinkoi">
				<p><?php the_title(); ?></p>
				<img src="<?=get_template_directory_uri()?>/assests/images/Rectangle 178.svg">
				</div>
				</a>
				
				</div>
				
			<div class="rightscreen winSmall marginleft object_menu_fix">
      <ul class="proMenu">

	  <? if($currentCatID == 1) { ?>
      <li style="color: #757472 !important;">Все проекты</li>
	  <? } else { ?>
		<li>
			<a href="/category/projects/">
				Все проекты
			</a>
		</li>
	  <? } ?>
	  
<!--    --><?php //foreach( $terms as $term ): ?>
<!--	--><?// if($term->term_id != $currentCatID) { ?>
<!--		<li> -->
<!--			<a href="--><?php //echo esc_url( get_term_link( $term ) ); ?><!--">-->
<!--				--><?php //echo esc_html( $term->name ); ?>
<!--			</a>-->
<!--		</li>-->
<!--	--><?// } else { ?>
<!--		<li style="color: #00000 !important;">--><?php //echo esc_html( $term->name ); ?><!--</li>-->
<!--	--><?// }  ?>
<!--		--><?php //endforeach; ?>
<!--    </ul>-->
			<btn class="strelka itc-slider__btn itc-slider__btn_next"><img src="<?=get_template_directory_uri()?>/assests/images/Rectangle 188.svg"><p>Тяните</p></btn>
			</div>
			</div>
			</div>
         </div>
	<?php endif ?>
	
<!--	<div style="height:60px"></div>-->
	<?php if($count % 4 == 3): ?>
	<div class="screen">
		
        <div class="rightscreen">
          <div class="screen">
			  <a href="<?php the_permalink(); ?>" class="projectsAdapt fotoAdaptiv_3 project_item_link">
              <img class="fotoAdaptiv fotoTHREE" src="<?=get_the_post_thumbnail_url()?>">
              <div class="podKartinkoi">
				<p><?php the_title(); ?></p>
				<img class="plusArrowThird" src="<?=get_template_directory_uri()?>/assests/images/Rectangle 178.svg">
              </div>
              </a>
            </div>
        </div>
	<?php endif ?>
	
	<?php if($count % 4 == 0): ?>
		<div class="left left_object_fix2">
			<div class="screen">
			<div class="leftscreen leftscreen_visible">
			<a href="<?php the_permalink(); ?>" class="projectFour projectsAdapt fotoAdaptiv_4 project_item_link">
			<img class="fotoAdaptiv fotoFOUR" src="<?=get_the_post_thumbnail_url()?>">
			<div class="podKartinkoi">
				<p><?php the_title(); ?></p>
				<img src="<?=get_template_directory_uri()?>/assests/images/Rectangle 178.svg">
			</div>
			</a>
			</div>
			</div>
        </div>
		</div>
     </div>
     </div>
<?php endif ?>



    <?php endwhile; else: ?>
    <?php endif; ?>  
	</div>
     </div>
</div>	  
	  
	  
  <div class="mobile-slider">
    <div class="swiper mobile-swiper">
      <div class="swiper-wrapper">
	  
<?php
$terms = get_field('rubric_list', get_option('page_on_front')); 
$count = 0;
$current_cat_id  = get_query_var('cat');
$showposts = 100;
$args = array('cat' => $current_cat_id, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => $showposts,'post_status' => 'publish');
query_posts($args);
    if (have_posts()) : while (have_posts()) : the_post(); $count++; ?>   
	  
	  
        <div class="swiper-slide">
            <div class="screen">
              <a href="<?php the_permalink(); ?>">
                <img class="img-project" src="<?=get_the_post_thumbnail_url()?>">
                <div class="podKartinkoi">
                  <p><?php the_title(); ?></p>
                  <img src="<?=get_template_directory_uri()?>/assests/images/Rectangle 178.svg">
                </div>
              </a>
            </div>
        </div>
   <?php endwhile; else: ?>
<?php endif; ?>  
		
	
   
      </div>
      <div class="mobile-pagination pagin-wrapp"></div>
    </div>
	
  </div>
</div>
</section>
</div>


<?php
get_footer();
