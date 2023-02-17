<div class="modal">
  <img class="close" src="<?=get_template_directory_uri()?>/assests/images/close.svg">
  <div class="modalText">
    <h2 class="modalTitle">Запрос успешно отправлен!</h2>
    <p class="modalTextInside">Наш специалист свяжется с вами в ближайшее время</p>
    <div class="button modalBtn">ОК</div>
  </div>
</div>
<footer>
<div class="footer__site">
    <section class="site" id="contact">
<!--  <div class="otstup"></div>-->
    <div class="footerZagolovokWrapper">
        <div class="footerZagolovok">
            <h2><?=get_field('title_contact', 'option')?></h2>
        </div>
        <div class="footerZagolovokText">
            <p><?=get_field('subtitle_contact', 'option')?></p>
        </div>
    </div>
    <div class="adressList">
        <div class="adress">
            <div class="adressItemWrapper">
                <img class="itemIcon" src="<?=get_template_directory_uri()?>/assests/images/adress.svg">
                <div class="itemText"><p><?=get_field('adres', 'option')?></p></div>
            </div>



  <div class="adressItemWrapper">
  <img class="itemIcon" src="<?=get_template_directory_uri()?>/assests/images/phone.svg">
  <div class="itemText"><p><?=get_field('phone', 'option')?></p></div>
  </div>


  
    <div class="adressItemWrapper">
    <img class="itemIcon" src="<?=get_template_directory_uri()?>/assests/images/phone.svg">
    <div class="itemText"><p><?=get_field('phone2', 'option')?></p></div>
    </div>
    

    
      <div class="adressItemWrapper">
      <img class="itemIcon" src="<?=get_template_directory_uri()?>/assests/images/mail.svg">
      <div class="itemText"><p><?=get_field('mail', 'option')?></p></div>
      </div>
</div>


<?php if(get_field('social', 'option')): $i= 0; ?>
	<?php while(has_sub_field('social', 'option')): $i++; ?>
        <div class="footer__social">
		    <a class="adress inlineSocial" href="<?=get_sub_field('soc_link')?>">
			    <span class="adressBtn">
				    <span class="textAdressBtn">
					    <?=get_sub_field('soc_name')?>
				    </span>
			    </span>
		    </a>
        </div>
<?php endwhile; ?>
<?php endif; ?>


    </div>
<div>
  <div class="footer__form">
    <div class="slogan__zakazhite">
      <!--<div class="otstup"></div>-->
     
    <button class="zakazhite"><div class="lastBtnText"><h3><?=get_field('offer_contact_title', 'option')?></h3></div><div class="lastBtnText short"><p><?=get_field('offer_contact_text', 'option')?></p></div></button>
  
    </div>
    
      <div class="form__zakazhite">
        <div class="form__zakazhite__wrap">
<h2>Оставить заявку</h2>
<div class="textSlider">
</div>
<?=do_shortcode('[contact-form-7 id="4744" title="Форма связи"]')?>
</div>
      </div>
      </div>
<!--      <div class="otstup"></div>-->
<!--      <div class="otstup"></div>-->
    <div class="footer__contacts">
        <div class="line"></div>
        <div class="footer__contacts-wrap">
      <img class="bottomLogo" src="<?=get_template_directory_uri()?>/assests/images/insight.svg">
        <div class="bottomAdress">
            <div class="adressItemWrapper bottomShi">
                <img class="itemIcon" src="<?=get_template_directory_uri()?>/assests/images/phone.svg">
                <div class="itemText"><p><?=get_field('phone', 'option')?></p></div>
            </div>
            <div class="adressItemWrapper bottomShi">
                <img class="itemIcon" src="<?=get_template_directory_uri()?>/assests/images/phone.svg">
                <div class="itemText"><p><?=get_field('phone2', 'option')?></p></div>
            </div>
            <div class="adressItemWrapper bottomShi">
                <img class="itemIcon" src="<?=get_template_directory_uri()?>/assests/images/mail.svg">
                <div class="itemText"><p><?=get_field('mail', 'option')?></p></div>
            </div>
        </div>
        </div>
            <div class="line"></div>
        <p class="copyright" align="center"><?=get_field('copyright', 'option')?></p>
    </div>
</section>
</div>
</footer>


<div class="overlay">
  <div class="modal-wrapper">
  <img class="close" src="<?=get_template_directory_uri()?>/assests/images/close.svg">
  <div class="modal-review">
    <div class="otzyv">
      <div class="site">
        <div class="otzyvAvatar">
          <img class="avatarIMG" id="reviewAvatar" src="">
        </div>
        <div class="nameOtzyv" id="reviewName"></div>
        <div class="otzyvText otzyvOver" id="reviewText">
          <p></p></div>
        <div class="otzyvDate" id="reviewDate"><p></p></div>
      </div>
    </div>
  </div>
  </div>
</div>