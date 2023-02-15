<?php
/**
 * Template Name: Главная страница
 */
?>
<?php get_header(); ?>

<section class="site ">
	<div class="home-textiles adaptivFirst">
		<div class="leftscreen vstolbik firstBlock">

			<div class="kursiv">

				<img src="<?= get_template_directory_uri() ?>/assests/images/artwork.svg">
			</div>


			<div class="zagolovok">
				<h1><?= get_field('main_title') ?></h1>
			</div>
			<a href="/#zayavka" class="button zayavka"><?= get_field('main_btn_title') ?></a>

		</div>


		<div class="rightscreen firstBlock">
			<img class="foton" src="<?= get_field('main_image')['url'] ?>" alt="<?= get_field('main_title') ?>">
		</div>
	</div>
</section>

<div class="otstup"></div>
<section class="site projects_box_main">
	<div class="_anim-items _anim-no-hide">
		<h2 class="subZagolovok"><?= get_field('project_title') ?></h2>
		<p class="titleSubtitle"><?= get_field('project_subtitle') ?></p>
	</div>


	<div class="container _anim-items _anim-no-hide">

		<div class="">
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">


					<?php $count = 0; ?>
					<?php $count2 = 0; ?>
					<?php $terms = get_field('rubric_list', get_option('page_on_front')); ?>
					<?php $featured_posts = get_field('main_projects');
					if ($featured_posts): ?><?php foreach ($featured_posts as $post): setup_postdata($post); ?>

						<?php if ($count % 3 == 0): ?>
							<div class="swiper-slide">    <div class="itc-slider__item">    <div class="project">
						<?php endif ?>


						<?php if ($count % 3 == 0): ?>
						<div class="leftscreen left__block">
						<div class="project_left"><a href="<?php the_permalink(); ?>" class="leftscreen project_item_link">
							<img class="projectBig" src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
							<div class="podKartinkoi  button__image">
								<span><?php the_title(); ?></span>
								<span><img src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 178.svg"></span>
							</div>
						</a>
					<?php endif ?>


						<?php if ($count % 3 == 1): ?>
						<div class="rightscreen winSmall">
							<!-- <p class="projectText"><?= get_the_excerpt() ?></p> -->
							<p class="projectText">Посмотрите оригинальные проекты, которые команда создала для разных типов жилья.</p>
							<a href="<?php the_permalink(); ?>" class="projectSmall project_item_link">

								<img class="projectSmall_img" alt="<?php the_title(); ?>" src="<?= get_the_post_thumbnail_url() ?>">
								<div class="podKartinkoi ">
									<span><?php the_title(); ?></span>
									<span><img src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 178.svg"></span>
								</div>
							</a>

						</div>            </div>
						</div>
					<?php endif ?>


						<?php if ($count % 3 == 2): ?>
							<div class="rightscreen rigth__block">
								<div class="project-right">
									<div class="right__block__image">
										<a href="<?php the_permalink(); ?>" class="projectMiddle project_item_link">
											<img class="projectMiddle_img" src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">

											<div class="podKartinkoi">
												<span><?php the_title(); ?></span>
												<span><img src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 178.svg"></span>
											</div>
										</a>
									</div>
									<div class="rightscreen winSmall">

										<?php

										if ($terms): ?>

											<ul class="proMenu">
												<li style="">Все проекты</li>
												<?php foreach ($terms as $term): ?>
													<li>
														<a class="dopoln" href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
													</li>
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>


										<btn class="strelka itc-slider__btn itc-slider__btn_next">
											<img src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 188.svg">
											<p>Тяните</p></btn>

									</div>
								</div>
								<div class="poCentru dopCenter">
									<!-- <p><?= get_the_excerpt() ?> </p> -->
									<p>Нас не пугают даже сложные заказы, требующие ручной работы. Мы шьем не стандартно, а как требуется клиентам в рамках стиля интерьера, пожеланий к цвету, фактуре материалов и запросов.</p>
								</div>
							</div>
						<?php endif ?>


						<?php if ($count % 3 == 2): ?>
							</div></div>    </div>
						<?php endif ?>

						<?php $count2++;
						$count++; endforeach; ?><?php wp_reset_postdata(); ?><?php endif; ?>


				</div>
				<div class="swiper-paginations"></div>
			</div>


		</div>

	</div>

</section><!-- <div class="otstup"></div> --><!-- <div class="otstup"></div> -->
<div class="order-curtains">
<section class="site _anim-items _anim-no-hide">
	<div class="order-curtains__wrap">
		<div class="order-curtains__image">
<!--			<div class="otstup"></div>-->
			<img class="formIMG" src="<?= get_template_directory_uri() ?>/assests/images/formIMG.png">

		</div>

		<div class="from-order">
			<div class="form-order-curtains__input">
				<h2><?= get_field('form_title') ?></h2>
				<div class="textSliderOne  dopSl">
					<p><?= get_field('des_form') ?></p>
				</div>

				<?= do_shortcode('[contact-form-7 id="4744" title="Форма связи"]') ?>

			</div>
		</div>
	</div>
</section><!-- <div class="otstup"></div> -->
</div>
<!--<div class="otstup"></div>-->
<div class="brand__container">
<section class="site" id="brands">
	<p></p>
	<div class=" _anim-items _anim-no-hide">
		<img src="<?= get_template_directory_uri() ?>/assests/images/Brands.svg">
		<h2 class="titleBrand"><?= get_field('title_brand') ?></h2>
		<p class="subtitleBrand"><?= get_field('subtitle_brand') ?></p>
	</div>
	<div class="slider ">
		<div class="textSlider _anim-items _anim-no-hide">
			<p><?= get_field('des_brand') ?></p>
		</div>
		<div class="sliderControl">
			<button class="leftK brand-next-btn" href="#">
				<img src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 155.svg"></button>
			<button class="rightK brand-prev-btn" href="#">
				<img src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 155.svg"></button>

		</div>
	</div>
	<div class="swiper brand-slider _anim-items _anim-no-hide">
		<div class="swiper-wrapper">
			<?php
			$images = get_field('brands');
			if ($images): ?><?php foreach ($images as $image): ?>
				<div class="swiper-slide">
					<div class="brand">
						<img class="brandIMG" src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
					</div>
				</div>
			<?php endforeach; ?><?php endif; ?>
		</div>
		<div class="swiper-pagination-review pagin-wrapp"></div>
	</div>
</section>
</div>

<section class="site _anim-items _anim-no-hide hello" id="hello">
	<div class="hello__row">
		<div class="hello__left">
			<div class="test">
				<h2><?= get_field('priv_title') ?></h2>
				<div class="boxPriv">
					<?= get_field('priv_anons') ?>
				</div>

				<div class="hello__wrap-readmore">
					<input class="hide" id="hd-1" type="checkbox">
					<label for="hd-1" class="hello__readmore-btn">Читать полностью
						<img src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 178.svg"></label>
					<div class="hello__readmore-text"><?= get_field('priv_text'); ?></div>
				</div>
			</div>
			<button class="topSmall">
				<img class="smallLogo" src="<?= get_template_directory_uri() ?>/assests/images/smallLogo.svg">
				<div class="textLogo"><?= get_field('very_important_fact') ?></div>
			</button>

		</div>
		<div class="hello__right">
			<div class="hello__wrap-avatar">
				<img class="persona" src="<?= get_field('priv_photo')['url'] ?>" alt="Ирина Шишканова">
			</div>
		</div>
	</div>

</section>

<div class="newFon block-uslugi">
	<section class="site" id="uslugi">
		<div class=" _anim-items _anim-no-hide">
			<img src="<?= get_template_directory_uri() ?>/assests/images/services.svg">
			<h2><?= get_field('title_usl') ?></h2>
			<p class="subuslugi"><?= get_field('subtitle_usl') ?></p>
		</div>
		<div class="block-uslugi__row _anim-items _anim-no-hide">
			<div class="block-uslugi__info">
				<div class="adaptivUslugi block-uslugi__block-information">
					<div class="block-uslugi__iformation">
						<div class="uslugi">
							<div class="uslugiSpisok">

								<?php if (get_field('usl')): ?>
									<ul class="nomargin">
										<?php while (has_sub_field('usl')): ?>
											<li class="elementSpisok" onmouseover="changePic('<?= get_sub_field('img')['url'] ?>');">
												<?php the_sub_field('name'); ?>
											</li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>

							</div>
							<div class="smile">
								<p><?= get_field('short_des_usl') ?></p>
							</div>
						</div>
					</div>
					<div class="block-uslugi__avatar">
						<img class="fotoUsluga" id="mypic" src="<?= get_template_directory_uri() ?>/assests/images/usluga_vyezd.png">
					</div>
				</div>
			</div>
			<div class="block-uslugi__slogan">
				<button class="dopEsciz RightServices">
					<div class="textLogo textServices">
						<?= get_field('very_important_fact_usl') ?>
					</div>
				</button>
			</div>
		</div>
		<div class="_anim-items _anim-no-hide order__zagolovok">
			<h2><?= get_field('kakz_title') ?></h2>
			<p class="uslugiTextDop"><?= get_field('kakz_subtitle') ?></p>
		</div>
		<div class="how__order _anim-items _anim-no-hide order">
			<div class="swiper swiperMobile">
				<div class="swiper-wrapper">
					<?php if (get_field('kakz_punkt')): $i = 0; ?><?php while (has_sub_field('kakz_punkt')): $i++; ?>
						<div class="swiper-slide">
							<div class="feature">
								<button class="featureIcon"><p class="featureText"><? if ($i < 10) echo 0;
										echo $i; ?></p></button>
								<p><?= get_sub_field('des') ?></p>
							</div>
						</div>
					<?php endwhile; ?><?php endif; ?>


				</div>
				<div class="swiper-pagination-mobile pagin-wrapp"></div>
			</div>
			<div class="leftscreen sv">
				<?php if (get_field('kakz_punkt')): $i = 0; ?><?php while (has_sub_field('kakz_punkt')): $i++; ?>
					<div class="feature">
						<button class="featureIcon"><p class="featureText"><? if ($i < 10) echo 0;
								echo $i; ?></p></button>
						<p><?= get_sub_field('des') ?></p>
					</div>
					<?php if ($i == 4) break; ?><?php endwhile; ?><?php endif; ?>
			</div>


			<div class="rightscreen sv _anim-items _anim-no-hide">
				<?php if (get_field('kakz_punkt')): $i = 0; ?><?php while (has_sub_field('kakz_punkt')): $i++; ?><? if ($i < 5) { ?>
					<div class="feature">
						<button class="featureIcon"><p class="featureText"><? if ($i < 10) echo 0;
								echo $i + 4; ?></p></button>
						<p><?= get_sub_field('des') ?></p>
					</div>
				<? } ?><?php endwhile; ?><?php endif; ?>
			</div>
		</div>
		<div class="screen _anim-items _anim-no-hide">
			<div class="leftscreen">
				<div class='blank'></div>

			</div>
			<div class="rightscreen">
				<a href="/#zayavka" class="button otstupK">Оставить заявку</a>
			</div>
		</div>
		<div class="otstup"></div>
		<img src="<?= get_template_directory_uri() ?>/assests/images/exclusive.svg">
		<h2><?= get_field('title_b') ?></h2>
		<div class="screen _anim-items _anim-no-hide screen_bolche">
			<div class="leftscreen">
				<div class="text_bolshe">
					<?= get_field('des_b') ?>
					<p></p>
					<p></p>
					<img class="bolshe" src="<?= get_field('img_b1')['url'] ?>">
				</div>
			</div>
			<div class="rightscreen">
				<div class="izgotovim">
					<h3><?= get_field('title_b2') ?></h3>
				</div>
				<div class="dlyaVas">
					<button class="RightServices ">
						<div class="text_v_btn">
							<div class="spisok_per">
								<?= get_field('spisok1') ?>
							</div>
							<div class="spisok_vtor">
								<?= get_field('spisok2') ?>
							</div>
						</div>
					</button>
				</div>
				<div class="dlyaVasAdaptiv">
					<button class="RightServices dopVtoroy">
						<div class="text_v_btn">
							<div class="spisok_per">
								<?= get_field('spisok1') ?>
							</div>
						</div>
					</button>
					<div class="spisok_vtor">
						<?= get_field('spisok2') ?>
					</div>
				</div>
				<div class="screen borderBottom bottomPics">
					<div class="leftcreen"></div>
					<img class="smallIzg" src="<?= get_field('img_b2')['url'] ?>">
					<div class="rightscreen">
						<img class="smallIzg2" src="<?= get_field('img_b3')['url'] ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="otstup"></div>
		<div class="otstup"></div>

	</section>


</div>


<div class="otstup"></div>
<div class="otstup"></div>
<section class="site individuality _anim-items  _anim-no-hide">
	<div class="screen">
		<div class="rightscreen">
			<div class="shirina">
				<h2><?= get_field('title_c') ?></h2>
				<p class="interier"><?= get_field('subtitle_c') ?></p>
				<p></p>
				<?= get_field('text_c') ?>
				<div class="otstup"></div>
				<img class="individualOne" src="<?= get_template_directory_uri() ?>/assests/images/kreslo.png">
			</div>
		</div>
		<div class="leftcreen">
			<div class="screen">
				<div class="leftcreen">
					<div class="individualTwo"><?= get_field('img_c') ?>
					</div>
				</div>
				<div class="rightscreen">
					<div class="smallsquare">
						<p><?= get_field('des_img') ?></p>
						<img class="krivaya" src="<?= get_template_directory_uri() ?>/assests/images/krivaya.svg">
					</div>
				</div>
			</div>
			<div class="otstup"></div>
			<div class="otstupSmall"></div>
			<div class="screen block_images">
				<div class="leftscreen dopLeft">
					<div class="secondFlex">
						<img class="smallInter" src="<?= get_template_directory_uri() ?>/assests/images/smaillinter.png">
						<div class="textLe">
							<?= get_field('text2_c') ?>
						</div>
					</div>
				</div>
			</div>
			<div class="rightscreen">
				<div class="blank"></div>
			</div>
			<div class="screen">
				<div class="leftscreen">
					<div class="parent">
						<img class="middleTable" src="<?= get_template_directory_uri() ?>/assests/images/middleTable.png">
					</div>
				</div>
				<div class="rightscreen">
					<img class="middleWall" src="<?= get_template_directory_uri() ?>/assests/images/middleWall.png">
				</div>
			</div>
		</div>


	</div>
	</div>
</section>
<div class="otstup"></div>
<div class="otstup"></div>
<section class="site ">
	<div class="_anim-items _anim-no-hide">
		<img src="<?= get_template_directory_uri() ?>/assests/images/Comfort.svg">
		<h2><?= get_field('title_v') ?></h2>
	</div>
	<div class="wrapperComfort">
		<div class="wrapperComfort_in">

			<?php if (get_field('punkt_v')): $i = 0; ?><?php while (has_sub_field('punkt_v')): $i++; ?>

				<div class="firstScreen _anim-items _anim-no-hide">
					<div class="comfortFeature">
						<img class="iconSon" src="<?= get_template_directory_uri() ?>/assests/images/star.svg">
						<div class="iconText">
							<?= get_sub_field('text') ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?><?php endif; ?>


		</div>


		<div class="thirdScreen _anim-items _anim-no-hide">
			<div class="smallWomanWrapper">
				<div class="smallWomanText">
					<?= get_field('subtitle_v') ?>
				</div>
				<img class="smallWoman" src="<?= get_field('img_v')['url'] ?>" alt="<?= get_field('title_v') ?>">
			</div>
		</div>
	</div>
	<div class="otstup"></div>
	<div class="otstup"></div>
	<div class="screen commandInsight _anim-items _anim-no-hide" id="comanda">
		<div class="leftscreen">
			<img class="commandWoman" src=" <?= get_field('photo_k')['url'] ?>" alt="<?= get_field('title_k') ?>">
		</div>
		<div class="rightscreen rigth_title">
			<div class="screen right_tile_wrap">
				<div class="leftscreen left_text">
					<img src="<?= get_template_directory_uri() ?>/assests/images/Team.svg">
					<h2><?= get_field('title_k') ?></h2>
					<p class="comandaSubtitle"><?= get_field('subtitle_k') ?></p>
					<?= get_field('text1_k') ?>
				</div>
				<div class="rightscreen rigth_text">

					<div class="comandSmallText">
						<?= get_field('text2_k') ?>
					</div>
				</div>
			</div>
		</div>


	</div>

	<div class="otstup"></div>
	<div class="otstup"></div>
</section>
<div class="newFon ">
	<section class="site" id="otzyv">
		<div class="otstup"></div>
		<div class="otstup"></div>
		<div class="zagolovokWrapper _anim-items _anim-no-hide">
			<div class="zagolovokOtzyv">
				<h2><?= get_field('rev_title', 'option') ?></h2>
			</div>
			<div class="textZagolovok">
				<?= get_field('rev_subtitle', 'option') ?>
			</div>


		</div>

		<div class="slider _anim-items _anim-no-hide">
			<div class="otzyvyNav">
				<?php
				$terms = get_field('rev_cat', 'option'); ?>
				<?php foreach ($terms as $term): ?>
					<div data-nav="<?= $term->slug ?>" class="typeNav"><p><?php echo esc_html($term->name); ?></p></div>
				<?php endforeach; ?>
			</div>
			<div class="sliderControl">
				<button class="leftK review-next-btn dopColorP" href="#">
					<img src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 155.svg"></button>
				<button class="rightK review-prev-btn dopColor" href="#">
					<img src="<?= get_template_directory_uri() ?>/assests/images/Rectangle 155.svg"></button>

			</div>

		</div>

		<div class="swiper review-slider _anim-items _anim-no-hide">
			<div class="swiper-wrapper">


				<?php if (get_field('rev', 'option')): $i = 0; ?><?php while (has_sub_field('rev', 'option')): $i++; ?>


					<div data-nav="<?= get_sub_field('cat')->slug ?>" class="swiper-slide ">

						<div class="otzyv ">
							<div class="site">
								<div class="otzyvAvatar">
									<img class="avatarIMG" src="<?= get_sub_field('img')['url'] ?>" alt="<?= get_sub_field('title') ?>">
								</div>
								<div class="nameOtzyv"><?= get_sub_field('title') ?></div>
								<div class="otzyvText">
									<?= get_sub_field('text') ?>
								</div>
								<div class="otzyvDate"><p><?= get_sub_field('date') ?></p></div>
							</div>
						</div>
					</div>

				<?php endwhile; ?><?php endif; ?>


			</div>
			<div class="swiper-pagination-rev pagin-wrapp"></div>
		</div>


		<div class="otstup" name="dostavka"></div>
		<div class="dostavka _anim-items _anim-no-hide">
			<h2><?= get_field('title_do', 'option') ?></h2>
			<div class="dostavkaNav">
				<?php if (get_field('do', 'option')): $i = 0; ?><?php while (has_sub_field('do', 'option')): $i++; ?>
					<div>
						<p class="dostavkaNav-item <? if ($i == 1) echo 'active'; ?>" data-content="item<?= $i ?>">
							<?= get_sub_field('title') ?>
						</p>
					</div>
				<?php endwhile; ?><?php endif; ?>
			</div>

			<div class="textDostavka">

				<?php if (get_field('do', 'option')): $i = 0; ?><?php while (has_sub_field('do', 'option')): $i++; ?>


					<p class="<? if ($i == 1) echo 'active'; ?>" data-cont="item<?= $i ?>">
						<?= get_sub_field('text') ?>
					</p>

				<?php endwhile; ?><?php endif; ?>


			</div>
		</div>

		<div class="otstup"></div>
	</section>

</div>
<?php get_footer(); ?>



