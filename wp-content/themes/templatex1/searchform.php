<form action="/" method="get" class="searchform">
	<button type="submit" class="button_system_icon search_btn"><img src="<?=get_template_directory_uri()?>/img/search.svg" alt="Искать"></button>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Поиск по сайту..."/>
</form>