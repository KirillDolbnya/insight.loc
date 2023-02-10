  function changePic(newAddr)
  {
  document.getElementById('mypic').src=newAddr;
  }
  function resetPic()
  {
  document.getElementById('mypic').src='/assests/images/usluga_vyezd.png';
  }
  
  
 document.addEventListener( 'wpcf7mailsent', function( event ) {
  jQuery('.modal').show();
}, false );



jQuery( ".loader_progress" ).animate({
    width: '100%'
  }, 1000, function() {
   jQuery('.loader').stop( true, true ).fadeOut(300); 
   jQuery('body').css('overflow', 'auto');
}); 


const animItems =  document.querySelectorAll('._anim-items');




if(animItems.length > 0) {
	

   if(jQuery(window).scrollTop() !== 0) {
		jQuery('._anim-items').removeClass('_anim-items');
   }

	
	
	window.addEventListener('scroll', animOnScroll);
	function animOnScroll() {
		for (let index = 0; index < animItems.length; index++) {
		const animItem = animItems[index];
		const animItemHeight = animItem.offsetHeight;
		const animItemOffset = offset(animItem).top;
		const animStart = 7;
		
		let animItemPoint = window.innerHeight - animItemHeight / animStart;
		if(animItemHeight > window.innerHeight) {
			animItemPoint = window.innerHeight -  window.innerHeight / animStart;
		}			
	
		if((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) { 
		animItem.classList.add('_active');
		} else {
			if(!animItem.classList.contains('_anim-no-hide')) {
				animItem.classList.remove('_active');
			}
		}
		}
	}
	
	function offset(el) {
		const rect = el.getBoundingClientRect(),
		scrollLeft = window.pageXOffset || document.documentElement.scroolLeft,
		scrollTop = window.pageYOffset || document.documentElement.scrollTop;
		return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
	}
	
	animOnScroll();
	
	}
	