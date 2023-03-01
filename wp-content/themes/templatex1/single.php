<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header();
global $post;
$category = reset(get_the_category($post->ID));
$category_id = $category->cat_ID;
$cat_link = get_category_link($category_id);

?>
	<!-- <div class="otstup"></div>-->
<?php
//if ( is_active_sidebar( 'bread_widget' ) ) :
//dynamic_sidebar( 'bread_widget' );
//endif;
?>


	<div class="bedroom adaptivFirst">
		<section class="site">
			<div class="bedroom__nav">
				<?php
				if (is_active_sidebar('bread_widget')) :
					dynamic_sidebar('bread_widget');
				endif;
				?>
			</div>
			<div class="bedroom__wrap">
				<div class="bedroom-left__block">
					<div class="bedroom__text">
						<img class="iconSon" src="<?= get_template_directory_uri() ?>/assests/images/star.svg">
						<?php the_title('<h1 class="woo_h1">', '</h1>'); ?>
						<p><?php the_field('subtitle'); ?></p>
						<a href="#zayavka" class="button button-bedroom zayavka pro adap">Заявка</a>
					</div>
				</div>
				<div class="bedroom-right__block">
					<div class="bedroom-block__image">
						<img class="bedroom_image" src="<?= get_field('big_image')['url'] ?>" alt="<?php the_field('subtitle'); ?>">
					</div>
				</div>
			</div>
		</section>
	</div>

	<!--   <div class="otstup"></div> -->

	<div class="block-info">
		<section class="site">
			<div class="block-info__wrap">
				<div class="block-info__left">
					<div class="block-info__date">
						<?php if (get_field('project_param')): ?><?php while (has_sub_field('project_param')): ?>
							<p style="color: #C2C2C2;"><?php the_sub_field('name'); ?></p>
							<p class="projjP"><?php the_sub_field('value'); ?></p>
						<?php endwhile; ?><?php endif; ?>
					</div>
				</div>
				<div class="block-info__right">
					<div class="block-info__text">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php the_content(); ?><?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</section>
	</div>


	<div class="block-gallery">
		<section class="site">
			<div class="block-gallery__wrap">
				<?php
				$count = 0;
				$images = get_field('gallery');
				$imagese_count = count($images) + 1;

//				if ($images):
//				?>
                <div class="block_item_gallery-1">
                    <?php foreach ($images as $image){ $count++; ?>
                        <?php if ($count == 3 or $count == 2 or $count == 1){?>
                            <div class="item_gallery_1_img">
                                <img class="item_gallery_1" src="<?php echo esc_url($image['sizes']['large']); ?>">
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="block_item_gallery-2">
                    <?php foreach ($images as $image){ $count++; ?>
                        <?php if ($count == 8){?>
                            <div class="item_gallery_2_img">
                                <img class="item_gallery_2" src="<?php echo esc_url($image['sizes']['large']); ?>">
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <?php foreach ($images as $image){ $count++; ?>
                        <?php if ($count == 18){?>
                            <div class="item_gallery_3_img">
                                <img class="item_gallery_3" src="<?php echo esc_url($image['sizes']['large']); ?>">
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>

<!--                            --><?php //if ($count == 1) { ?>
<!--                            <div class="rightscreen rightscreen_item_gallery_1">-->
<!--                                <img class="projectAdaptiv leftAdaptiv" src="--><?php //echo esc_url($image['sizes']['large']); ?><!--">-->
<!--                            </div>-->
<!--				            --><?php //}?>

<!--					    --><?php //if ($count == 2) { ?>

<!--						    --><?php //} ?><!----><?php //if ($count == 2) { ?>
<!--						    	<div class="block-item_gallery_2">-->
<!--						    		<img class="projectAdaptiv leftAdaptiv item_gallery_2" src="--><?php //echo esc_url($image['sizes']['large']); ?><!--">-->
<!--						    	</div>-->
<!--						    --><?php //} ?>
<!--                            --><?php
//                                if ($count==3){ ?>
<!--                                    <div class="block-item_gallery_3">-->
<!--                                        <img class="projectAdaptiv leftAdaptiv item_gallery_3" src="--><?php //echo esc_url($image['sizes']['large']); ?><!--">-->
<!--                                    </div>-->
<!--                               --><?php //} ?>


<!--						--><?php ////if ($count == 4) { ?>
<!--						<div class="projectBottom">--><?php ////} ?>

<!--							--><?php //if ($count == 4) { ?>
<!--								<div class="item_gallery_4_wrap">-->
<!--								<img class="projectAdaptiv item_gallery_4" src="--><?php //echo esc_url($image['sizes']['large']); ?><!--">-->
<!--								</div>--><?php //} ?>
<!--							--><?php //if ($imagese_count == $count and $count >= 2) { var_dump($count); ?>
<!--						--><?php //} ?><!----><?php //if ($imagese_count == $count and $count >= 4) { ?>
<!--						--><?php //} ?>

<!--				--><?php //endforeach; ?><!----><?php //endif; ?>

                <div class="post__gallery-wrap">
                    <?php
                    /**
                     * Field Structure:
                     *
                     * - parent_repeater (Repeater)
                     *   - parent_title (Text)
                     *   - child_repeater (Repeater)
                     *     - child_title (Text)
                     */
                    if (have_rows('gal_items')):
                        while (have_rows('gal_items')) : the_row();
                            echo "<div class='post__gallery'>";
                            // Get parent value.
                            $title = get_sub_field('gal__title');
                            $text = get_sub_field('gal__text');
                            $gallery = get_sub_field('gal__images');


                                    echo "<div class='post__gallery_item'>";
                                        echo "<div class='post__gallery_title'>";
                                            echo "<h2>". $title ."</h2>";
                                            echo "<p>" . $text . "</p>";
                                        echo "</div>";
                                        echo "<div class='post__gallery-block'>";
                                foreach ($gallery as $item) {
                                    echo "<img src =' " . $item['url'] . "' .>";
                                }
                                    echo "</div>";
                                    echo "</div>";
                            echo "</div>";
                        endwhile;

                    endif;
                    ?>
                </div>
			</div>
		</section>
	</div>

<?php get_footer();
