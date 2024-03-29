<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header();

//no use
$categories = get_the_category();
if (!empty($categories[0]->cat_ID)) {
	$category_id = $categories[0]->cat_ID;
} else {
	$category_id = null;
}

$maincategory = get_queried_object(); //объект текущией категории
$idofcat = $maincategory->term_id;//ID текущей категории
$currentCatID = $maincategory->term_id;//ID текущей категории
?>

	<div class="projects">
		<section class="site">
			<!-- <div class="otstup"></div> -->
			<div class="bedroom__nav">
				<?php //подключаем сайт бар
				if (is_active_sidebar('bread_widget')) :
					dynamic_sidebar('bread_widget');
				endif;
				?>
			</div>
            <div class="title__archive">
                <img class="iconSon" src="<?= get_template_directory_uri() ?>/assests/images/star.svg">
			    <?php the_archive_title('<h1 class="woo_h1 archive_title_h1">', '</h1>'); ?>
            </div>
			<div class="projects__wrap">


				<?php

				$terms = get_field(//ID рубрик указанных в админке на главной странице
						'rubric_list', //получить поле
						get_option('page_on_front')//id главной страницы
				);
				$current_cat_id = get_query_var('cat');//ID текущей страницы
				$showposts = 100;
				$args = array('cat' => $current_cat_id, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => $showposts, 'post_status' => 'publish');//настройка выборки записей
				query_posts($args);
				$count_row = count($args) + 1;
				?>


				<div class="pc-slider">
					<div class="swiper mySwiper">
						<div class="swiper-wrapper">

							<?php

							// Разбивка на блоки в цикле
							$count_item = 0;//начало счетчика
							$col_item = 4;//количество элементов в блоке
							$col_start = '<div class="swiper-slide"> <div class="itc-slider__item"> <div class="block__projects">'; //Начало блока
							$col_end = '</div> </div> </div><!--							.slide -->'; //Конец блока

							if (have_posts()) :

								while (have_posts()) :
									the_post();

									if ($count_item === 0) {
										echo $col_start;
										$count_item++;
									} elseif ($count_item === $col_item) {
										$count_item = 1;
										echo $col_end . $col_start;
									} else {
										$count_item++;
									}
									$count++;
									?>

									<!--											elem -->

									<div class="rightscreen">
										<div class="screen">

											<a href="<?php the_permalink(); ?>" class="">
												<img class="projects__image" src="<?= get_the_post_thumbnail_url() ?>">
												<div class="podKartinkoi">
													<p><?php the_title(); ?></p>
													<img class="plusArrow" src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 178.svg">
												</div>
											</a>

										</div>
									</div>
									<!--											.elem -->

								<?php endwhile;
								echo $col_end;
							else: ?><?php endif; ?>
						</div>
					</div>
					<btn class="strelka itc-slider__btn itc-slider__btn_next">
						<img src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 188.svg">
						<p>Листайте</p>
                    </btn>
                    <div class="swiper-paginations swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"></div>
				</div>


				<div class="mobile-slider">
					<div class="swiper mobile-swiper">
						<div class="swiper-wrapper">

							<?php
							$terms = get_field('rubric_list', get_option('page_on_front'));
							$count = 0;
							$current_cat_id = get_query_var('cat');
							$showposts = 100;
							$args = array('cat' => $current_cat_id, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => $showposts, 'post_status' => 'publish');
							query_posts($args);
							if (have_posts()) : while (have_posts()) : the_post();
								$count++; ?>


								<div class="swiper-slide">
									<div class="screen">
										<a href="<?php the_permalink(); ?>">
											<img class="projects__image" src="<?= get_the_post_thumbnail_url() ?>">
											<div class="podKartinkoi">
												<p><?php the_title(); ?></p>
												<img src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 178.svg">
											</div>
										</a>
									</div>
								</div>
							<?php endwhile; else: ?><?php endif; ?>


						</div>

					</div>
					<div class="mobile-pagination pagin-wrapp"></div>
				</div>
			</div>
		</section>
	</div>


<?php
get_footer();
