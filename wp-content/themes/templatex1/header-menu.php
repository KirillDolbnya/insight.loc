  <nav class="navigate">
      <section class="site">
        
        <div class="hamburger-menu">
            <a href="/" class="logo_link" ><img class="logo" src="<?=get_template_directory_uri()?>/assests/images/logo.svg"></a>
            <div class="tel"><?=get_field('phone', 'option')?></div>
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>

            <ul class="menu__box" id="menu__box">
              <li><a class="menu__item" href="/">Главная</a></li>
              <li><a class="menu__item" href="/#projects"  >Проекты Insight</a></li>
              <li><a class="menu__item" href="/#hello" >Приветсвую вас!</a></li>
              <li><a class="menu__item" href="/#uslugi" >Услуги Insight</a></li>
              <li><a class="menu__item" href="/#comanda">Команда Insight</a></li>
              <li><a class="menu__item" href="/#otzyv" >Отзывы</a></li>
              <li><a class="menu__item" href="/#dostavka" >Доставка и оплата</a></li>
              <li><a class="menu__item" href="/#contact" >Как с нами связаться</a></li>
              <li><a class="menu__item" href="/#zayavka" >Оставить заявку</a></li>
             
            </ul>
          </div>
      
   
  </section>
</nav>