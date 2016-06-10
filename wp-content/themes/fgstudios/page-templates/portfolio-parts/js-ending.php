<script>

//  script for portfolio-line-menu-styles
//  only need to call it once for both desktop + mobile/tablet

// FILM port--main-nav script
(function() {
			[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
				var menuItems = menu.querySelectorAll('.menu__link'),
					setCurrent = function(ev) {
						ev.preventDefault();

						var item = ev.target.parentNode; // li

						// return if already current
						if (classie.has(item, 'film-item__port--main-nav--current')) {
							return false;
						}
						// remove current
						classie.remove(menu.querySelector('.film-item__port--main-nav--current'), 'film-item__port--main-nav--current');
						// set current
						classie.add(item, 'film-item__port--main-nav--current');
					};

				[].slice.call(menuItems).forEach(function(el) {
					el.addEventListener('click', setCurrent);
				});
			});

			[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
				link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
				new Clipboard(link);
				link.addEventListener('click', function() {
					classie.add(link, 'link-copy--animate');
					setTimeout(function() {
						classie.remove(link, 'link-copy--animate');
					}, 300);
				});
			});
		})(window);



    // PHOTO port--main-nav script
    (function() {
    			[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
    				var menuItems = menu.querySelectorAll('.menu__link'),
    					setCurrent = function(ev) {
    						ev.preventDefault();

    						var item = ev.target.parentNode; // li

    						// return if already current
    						if (classie.has(item, 'photo-item__port--main-nav--current')) {
    							return false;
    						}
    						// remove current
    						classie.remove(menu.querySelector('.photo-item__port--main-nav--current'), 'photo-item__port--main-nav--current');
    						// set current
    						classie.add(item, 'photo-item__port--main-nav--current');
    					};

    				[].slice.call(menuItems).forEach(function(el) {
    					el.addEventListener('click', setCurrent);
    				});
    			});

    			[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
    				link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
    				new Clipboard(link);
    				link.addEventListener('click', function() {
    					classie.add(link, 'link-copy--animate');
    					setTimeout(function() {
    						classie.remove(link, 'link-copy--animate');
    					}, 300);
    				});
    			});
    		})(window);



        // DESIGN port--main-nav script
        (function() {
        			[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
        				var menuItems = menu.querySelectorAll('.menu__link'),
        					setCurrent = function(ev) {
        						ev.preventDefault();

        						var item = ev.target.parentNode; // li

        						// return if already current
        						if (classie.has(item, 'design-item__port--main-nav--current')) {
        							return false;
        						}
        						// remove current
        						classie.remove(menu.querySelector('.design-item__port--main-nav--current'), 'design-item__port--main-nav--current');
        						// set current
        						classie.add(item, 'design-item__port--main-nav--current');
        					};

        				[].slice.call(menuItems).forEach(function(el) {
        					el.addEventListener('click', setCurrent);
        				});
        			});

        			[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
        				link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
        				new Clipboard(link);
        				link.addEventListener('click', function() {
        					classie.add(link, 'link-copy--animate');
        					setTimeout(function() {
        						classie.remove(link, 'link-copy--animate');
        					}, 300);
        				});
        			});
        		})(window);
    </script>
