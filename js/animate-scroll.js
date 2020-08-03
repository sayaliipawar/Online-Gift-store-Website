AnimateScroll = {
	offset: null,
	imediate: null,
	init: function(){
		AnimateScroll.imediate = 200;
		AnimateScroll.offset   = $(window).height() * 3/4;
		AnimateScroll.go();
		AnimateScroll.setDebounce();
	},
	setDebounce: function(){
		$(document).scroll(AnimateScroll.debounce(function(){ AnimateScroll.go() }, AnimateScroll.imediate));
	},
	go: function(){
		var target      = $('[data-as="true"]');
		var documentTop = $(document).scrollTop();
		target.each(function(){
			var animationClass = $(this).data('as-animation');
			var itemTop        = $(this).offset().top;
			if (documentTop > itemTop - AnimateScroll.offset) {
				$(this).addClass(animationClass);
			} else {
				$(this).removeClass(animationClass);
			}
		});
	},
	debounce: function(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	}
}

$(document).ready(function() {
	AnimateScroll.init();
});