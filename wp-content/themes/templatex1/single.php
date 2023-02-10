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
$cat_link = get_category_link( $category_id );

?>
 <div class="otstup"></div> 
<section class="site">
<?php
	if ( is_active_sidebar( 'bread_widget' ) ) : 
	dynamic_sidebar( 'bread_widget' );
	endif;
?>


    <div class="screen adaptivFirst">
        <div class="rightscreen">

<div class="projectTitle ">
	<img class="iconSon" src="<?=get_template_directory_uri()?>/assests/images/star.svg">
	<?php 
		the_title( '<h1 class="woo_h1">', '</h1>' );
	?>
	
	<p><?php the_field('subtitle'); ?></p>
	<a href="#zayavka" class="button zayavka pro adap">Заявка</a>

</div>
   </div>
   <div class="leftscreen">
 <img class="foton" src="<?=get_field('big_image')['url']?>" alt="<?php the_field('subtitle'); ?>">
   </div>
   </div>
   <div class="otstup"></div> 
   <div class="screen">
    <div class="rightscreen">

<div class="projectTitle ">

  
 <?php if(get_field('project_param')): ?>
	<?php while(has_sub_field('project_param')): ?>
		<p style="color: #C2C2C2;"><?php the_sub_field('name'); ?></p>
		<p class="projjP"><?php the_sub_field('value'); ?></p>
	<?php endwhile; ?>
<?php endif; ?>	 
  

</div>

</div>
<div class="leftscreen">
<div class="projectTextTwo">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
</div>
</div>
<p></p>
<div class="screen">

<?php 
$count = 0;
$images = get_field('gallery'); 
$imagese_count = count($images)+1;
if( $images ): ?>
    <?php foreach( $images as $image ): $count++; ?>
	<?php if($count == 1) { ?>
	<div class="rightscreen rightscreen_item_gallery_1">
		<img class="projectAdaptiv leftAdaptiv" src="<?php echo esc_url($image['sizes']['large']); ?>">
	</div>
	<?php } ?>
	<?php if($count == 2) { ?>
	<div class="leftscreen">
	<?php } ?>	
	<?php if($count == 2 or $count == 3) { ?>
		<img class="projectAdaptiv leftAdaptiv item_gallery_2" src="<?php echo esc_url($image['sizes']['large']); ?>">
		<div class="otstup50"></div>
		<div class="otstup"></div>
	<?php } ?>	
<?php if($count == 4) { ?>
	<div class="projectBottom">
<?php } ?>
<?php if($count >= 4) { ?>
<div class="item_gallery_3_wrap">
	  <img class="projectAdaptiv item_gallery_3" src="<?php echo esc_url($image['sizes']['large']); ?>">
</div>
<?php } ?>
	
<?php if($imagese_count == $count and $count >= 2) { ?>
	</div>
<?php } ?>	
<?php if($imagese_count == $count and $count >= 4) { ?>
	</div>
<?php } ?>				
		
	 <?php endforeach; ?>
<?php endif; ?>


 
</div>

</div>


</div>

		
</section>
<div class="otstup"></div>
<div class="otstup"></div>
<section class="site projects_box_main">
<div class="_anim-items _anim-no-hide _active">
<h2 class="subZagolovok">Проект Insight</h2>
<p class="titleSubtitle">в разных стилях</p>
</div>


<div class="container _anim-items _anim-no-hide _active">

  <div class="">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
     



			
   
  	<div class="swiper-slide">
	<div class="itc-slider__item">
	<div class="screen">
    

	  

		
				<div class="leftscreen">
		<div class="screen">
              <a href="https://insight-art.ru/spalnya/" class="leftscreen project_item_link">
                    <img class="projectBig" src="https://insight-art.ru/wp-content/uploads/2022/12/projectB.png" alt="Спальня">
                     <div class="podKartinkoi">
                     <span>Спальня</span>
                     <span><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 178.svg"></span>
                     </div>
              </a>
		  
			

			  
			
		
		
			 
		  
		  
         
	 
		 
   
    

	  

		
		  
			

						  <div class="rightscreen winSmall">
                   <!-- <p class="projectText">Посмотрите оригинальные проекты, которые команда создала для разных типов жилья.</p> -->
                   <p class="projectText">Посмотрите оригинальные проекты, которые команда создала для разных типов жилья.</p>
                   <a href="https://insight-art.ru/gostinaya/" class="projectSmall project_item_link">
				   
                   <img class="projectSmall_img" alt="Спальня" src="https://insight-art.ru/wp-content/uploads/2022/12/Daria1.jpg">
                   <div class="podKartinkoi">
                    <span>Спальня</span>
                    <span><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 178.svg"></span>
                    </div>
                  </a>
				  
                  </div>
			</div>
        </div>				  
			  
			
		
		
			 
		  
		  
         
	 
		 
   
    

	  

		
		  
			

			  
			
		
		
				<div class="rightscreen">
                <div class="screen">
          <div class="leftscreen">
          <a href="https://insight-art.ru/gostinaya-2/" class="projectMiddle project_item_link">
            <img class="projectMiddle_img" src="https://insight-art.ru/wp-content/uploads/2022/12/Natalya1-min.jpg" alt="Гостиная">

          <div class="podKartinkoi">
            <span>Гостиная</span>
            <span><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 178.svg"></span>
            </div>
          </a>
          </div>
          <div class="rightscreen winSmall">
		  

      <ul class="proMenu">
      <li style="">Все проекты</li>
    		<li> 
			<a class="dopoln" href="https://insight-art.ru/category/projects/shtory/">Шторы</a>
		</li>
				<li> 
			<a class="dopoln" href="https://insight-art.ru/category/projects/podushki/">Подушки</a>
		</li>
				<li> 
			<a class="dopoln" href="https://insight-art.ru/category/projects/postelnoe-bele/">Постельное белье</a>
		</li>
		    </ul>
 	  


		  	
		  
          <btn class="strelka itc-slider__btn itc-slider__btn_next"><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 188.svg"><p>Тяните</p></btn>

          </div>
          </div>
          <div class="poCentru dopCenter">
            <!-- <p>Нас не пугают даже сложные заказы, требующие ручной работы. Мы шьем не стандартно, а как требуется клиентам в рамках стиля интерьера, пожеланий к цвету, фактуре материалов и запросов.   </p> -->
<p>Нас не пугают даже сложные заказы, требующие ручной работы. Мы шьем не стандартно, а как требуется клиентам в рамках стиля интерьера, пожеланий к цвету, фактуре материалов и запросов.</p>
            </div>
          </div>
		 	 
		  
		  
         
     </div>
     </div>
	 </div> 
	 
		 
   
  	<div class="swiper-slide">
	<div class="itc-slider__item">
	<div class="screen">
    

	  

		
				<div class="leftscreen">
		<div class="screen">
              <a href="https://insight-art.ru/spalnya-2/" class="leftscreen project_item_link">
                    <img class="projectBig" src="https://insight-art.ru/wp-content/uploads/2022/12/office1-min-e1673974576711.jpg" alt="Офис">
                     <div class="podKartinkoi">
                     <span>Офис</span>
                     <span><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 178.svg"></span>
                     </div>
              </a>
		  
			

			  
			
		
		
			 
		  
		  
         
	 
		 
   
    

	  

		
		  
			

						  <div class="rightscreen winSmall">
                   <!-- <p class="projectText">Посмотрите оригинальные проекты, которые команда создала для разных типов жилья.</p> -->
                   <p class="projectText">Посмотрите оригинальные проекты, которые команда создала для разных типов жилья.</p>
                   <a href="https://insight-art.ru/gostinaya-3/" class="projectSmall project_item_link">
				   
                   <img class="projectSmall_img" alt="Гостиная" src="https://insight-art.ru/wp-content/uploads/2022/12/Nadezhda-1-min.jpg">
                   <div class="podKartinkoi">
                    <span>Гостиная</span>
                    <span><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 178.svg"></span>
                    </div>
                  </a>
				  
                  </div>
			</div>
        </div>				  
			  
			
		
		
			 
		  
		  
         
	 
		 
   
    

	  

		
		  
			

			  
			
		
		
				<div class="rightscreen">
                <div class="screen">
          <div class="leftscreen">
          <a href="https://insight-art.ru/spalnya-4-2/" class="projectMiddle project_item_link">
            <img class="projectMiddle_img" src="https://insight-art.ru/wp-content/uploads/2022/12/projectM.png" alt="Спальня 1">

          <div class="podKartinkoi">
            <span>Спальня 1</span>
            <span><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 178.svg"></span>
            </div>
          </a>
          </div>
          <div class="rightscreen winSmall">
		  

      <ul class="proMenu">
      <li style="">Все проекты</li>
    		<li> 
			<a class="dopoln" href="https://insight-art.ru/category/projects/shtory/">Шторы</a>
		</li>
				<li> 
			<a class="dopoln" href="https://insight-art.ru/category/projects/podushki/">Подушки</a>
		</li>
				<li> 
			<a class="dopoln" href="https://insight-art.ru/category/projects/postelnoe-bele/">Постельное белье</a>
		</li>
		    </ul>
 	  


		  	
		  
          <btn class="strelka itc-slider__btn itc-slider__btn_next"><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 188.svg"><p>Тяните</p></btn>

          </div>
          </div>
          <div class="poCentru dopCenter">
            <!-- <p>Девичья шкатулка Балдахины над кроватью, уже немного позабытые, но такиеуютные. В совем проекте я решила возродить их! Клиент удивился неожиданному предложению, но сразу же согласился. Натуральная ткань с лаконичным плетением и невероятно приятным на ощупь &#8212; один из моих фаворитов! Каркас балдахина обтянули 100% диким шелком, предварительно придав ему жесткость. Редко даю название проектам, но [&hellip;] </p> -->
<p>Нас не пугают даже сложные заказы, требующие ручной работы. Мы шьем не стандартно, а как требуется клиентам в рамках стиля интерьера, пожеланий к цвету, фактуре материалов и запросов.</p>
            </div>
          </div>
		 	 
		  
		  
         
     </div>
     </div>
	 </div> 
	 
		 
   
  	<div class="swiper-slide">
	<div class="itc-slider__item">
	<div class="screen">
    

	  

		
				<div class="leftscreen">
		<div class="screen">
              <a href="https://insight-art.ru/zagolovok-zapisi/" class="leftscreen project_item_link">
                    <img class="projectBig" src="https://insight-art.ru/wp-content/uploads/2023/01/projectMain.png" alt="Спальня 4">
                     <div class="podKartinkoi">
                     <span>Спальня 4</span>
                     <span><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 178.svg"></span>
                     </div>
              </a>
		  
			

			  
			
		
		
			 
		  
		  
         
	 
		 
   
    

	  

		
		  
			

						  <div class="rightscreen winSmall">
                   <!-- <p class="projectText"></p> -->
                   <p class="projectText">Посмотрите оригинальные проекты, которые команда создала для разных типов жилья.</p>
                   <a href="https://insight-art.ru/testovaya-h/" class="projectSmall project_item_link">
				   
                   <img class="projectSmall_img" alt="Спальня 2" src="https://insight-art.ru/wp-content/uploads/2022/12/projectMain-1.png">
                   <div class="podKartinkoi">
                    <span>Спальня 2</span>
                    <span><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 178.svg"></span>
                    </div>
                  </a>
				  
                  </div>
			</div>
        </div>				  
			  
			
		
		
			 
		  
		  
         
	 
		 
   
    

	  

		
		  
			

			  
			
		
		
				<div class="rightscreen">
                <div class="screen">
          <div class="leftscreen">
          <a href="https://insight-art.ru/spalnya-4/" class="projectMiddle project_item_link">
            <img class="projectMiddle_img" src="https://insight-art.ru/wp-content/uploads/2022/12/projectM.png" alt="Спальня 3">

          <div class="podKartinkoi">
            <span>Спальня 3</span>
            <span><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 178.svg"></span>
            </div>
          </a>
          </div>
          <div class="rightscreen winSmall">
		  

      <ul class="proMenu">
      <li style="">Все проекты</li>
    		<li> 
			<a class="dopoln" href="https://insight-art.ru/category/projects/shtory/">Шторы</a>
		</li>
				<li> 
			<a class="dopoln" href="https://insight-art.ru/category/projects/podushki/">Подушки</a>
		</li>
				<li> 
			<a class="dopoln" href="https://insight-art.ru/category/projects/postelnoe-bele/">Постельное белье</a>
		</li>
		    </ul>
 	  


		  	
		  
          <btn class="strelka itc-slider__btn itc-slider__btn_next"><img src="https://insight-art.ru/wp-content/themes/templatex1/assests/images/Rectangle 188.svg"><p>Тяните</p></btn>

          </div>
          </div>
          <div class="poCentru dopCenter">
            <!-- <p>Девичья шкатулка Балдахины над кроватью, уже немного позабытые, но такиеуютные. В совем проекте я решила возродить их! Клиент удивился неожиданному предложению, но сразу же согласился. Натуральная ткань с лаконичным плетением и невероятно приятным на ощупь &#8212; один из моих фаворитов! Каркас балдахина обтянули 100% диким шелком, предварительно придав ему жесткость. Редко даю название проектам, но [&hellip;] </p> -->
<p>Нас не пугают даже сложные заказы, требующие ручной работы. Мы шьем не стандартно, а как требуется клиентам в рамках стиля интерьера, пожеланий к цвету, фактуре материалов и запросов.</p>
            </div>
          </div>
		 	 
		  
		  
         
     </div>
     </div>
	 </div> 
	 
		 
   
			
			
       
		    
      </div>
      <div class="swiper-paginations"></div>
    </div>

  
  </div>

</div>
  
</section>
<div class="otstup"></div>
<div class="otstup"></div>
<?php get_footer();
