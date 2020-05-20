var $ = jQuery.noConflict();
/* Scroll Up/Down */
var scrollDown = $('.scroll-downs'),
	scrollUp = $('.scroll-up'),
	page = $('html, body'),
	slide = $('.section'),
	viewportHeight = $(window).height();

function initialise() {

	function onScroll() {
		if ($(window).scrollTop() > 30) {
			$('.navbar').addClass('sticked');
		} else {
			$('.navbar').removeClass('sticked');
		}
	}

	window.addEventListener("scroll", function() {
        onScroll();
	}, true);
	
	function mob_menu() {
        var win = $(window);
        if (win.width() < 1199) {
            setTimeout(function(){
                $('.navbar').addClass('mob-menu');
            }, 500);
        } else {
            $('.navbar').removeClass('mob-menu');
        }
    }
    mob_menu();
    window.addEventListener("resize", function(){
        mob_menu();
    }, true);

	$(function() {
		$('#root').on('click', 'a[href*="#"]:not([href="#"])', function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top - 85
					}, 1000);
					return false;
				}
			}
		});
	});

	$(function() {
		windowResize();
	});

	$(scrollDown).click(function(event) {
		var currentSlideHeight = $(this).parent().height();
		page.animate({
			scrollTop : page.scrollTop() + currentSlideHeight,
		}, 1000);
		event.preventDefault();
	});

	$(scrollUp).click(function(event) {
		page.animate({
			scrollTop : 0,
		}, 1000);
		event.preventDefault();
	});

	function windowResize() {
		$(window).resize(function(e) {
			viewportHeight = $(window).height();
		});
	}

	/* Modal */
	$(".modal-button").click(function() {
		$("#modal-cart").addClass("is-active");
		$("html").addClass("modal-win");
	});

	$(".modal-close").click(function() {
		$("#modal-cart").removeClass("is-active");
		$("html").removeClass("modal-win");
	});

	// End Initialise
};
$(document).ready(function () {
    setTimeout(function () {
        initialise();
    }, 200);
});

// Homepage Swiper
if ( document.body.classList.contains('homepage-base') ) {
	var swiper_home = new Swiper('.homepage-base .swiper-container', {
		slidesPerGroup: 1,
		autoplay: true,
		speed: 800,
		loop: true,
		lazy: true,
		grabCursor: true,
		updateOnWindowResize: true,
		loopFillGroupWithBlank: true,
		centeredSlides: true,
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
		pagination: false,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		initialSlide: 2,
		slidesPerView: 1.5,
		spaceBetween: 16,
		breakpoints: {
            801: {
                slidesPerView: 2.6,
			},
			1400: {
                slidesPerView: 3.5,
			}
			,
			1600: {
                slidesPerView: 4,
            }
		}
	});
}
// News Swiper
if ( document.body.classList.contains('home-news') ) {
	var swiper_news = new Swiper('.home-news .swiper-container', {
		effect: "coverflow",
		coverflowEffect: {
			rotate: 7, // Slide rotate in degrees
			stretch: 0, // Stretch space between slides (in px)
			depth: 7, // Depth offset in px (slides translate in Z axis)
			modifier: 1, // Effect multipler
			slideShadows: true // Enables slides shadows
		},
		slidesPerView: 1,
		spaceBetween: 0,
		speed: 800,
		loop: true,
		lazy: true,
		parallax: true,
		updateOnWindowResize: true,
		centeredSlides: true,
		grabCursor: true,
		zoom: {
			maxRatio: 5,
		},
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
		mousewheel: {
			invert: true,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		},
		breakpoints: {
			801: {
				slidesPerView: 1.2,
				spaceBetween: -100,
				keyboard: false,
				mousewheel: false,
			},
		}
	});
}

var rellax = new Rellax('.rellax', {
    speed: -2,
    center: false,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
});

// ************************************************
// Shopping Cart API
// ************************************************

var shoppingCart = (function() {
	// =============================
	// Private methods and propeties
	// =============================
	cart = [];
	
	// Constructor
	function Item(name, price, count) {
	this.name = name;
	this.price = price;
	this.count = count;
	}
	
	// Save cart
	function saveCart() {
	sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
	}
	
	// Load cart
	function loadCart() {
	cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
	}
	if (sessionStorage.getItem("shoppingCart") != null) {
	loadCart();
	}
	

	// =============================
	// Public methods and propeties
	// =============================
	var obj = {};
	
	// Add to cart
	obj.addItemToCart = function(name, price, count) {
	for(var item in cart) {
		if(cart[item].name === name) {
		cart[item].count ++;
		saveCart();
		return;
		}
	}
	var item = new Item(name, price, count);
	cart.push(item);
	saveCart();
	}
	// Set count from item
	obj.setCountForItem = function(name, count) {
	for(var i in cart) {
		if (cart[i].name === name) {
		cart[i].count = count;
		break;
		}
	}
	};
	// Remove item from cart
	obj.removeItemFromCart = function(name) {
		for(var item in cart) {
		if(cart[item].name === name) {
			cart[item].count --;
			if(cart[item].count === 0) {
			cart.splice(item, 1);
			}
			break;
		}
	}
	saveCart();
	}

	// Remove all items from cart
	obj.removeItemFromCartAll = function(name) {
	for(var item in cart) {
		if(cart[item].name === name) {
		cart.splice(item, 1);
		break;
		}
	}
	saveCart();
	}

	// Clear cart
	obj.clearCart = function() {
	cart = [];
	saveCart();
	}

	// Count cart 
	obj.totalCount = function() {
	var totalCount = 0;
	for(var item in cart) {
		totalCount += cart[item].count;
	}
	return totalCount;
	}

	// Total cart
	obj.totalCart = function() {
	var totalCart = 0;
	for(var item in cart) {
		totalCart += cart[item].price * cart[item].count;
	}
	return Number(totalCart.toFixed(2));
	}

	// List cart
	obj.listCart = function() {
	var cartCopy = [];
	for(i in cart) {
		item = cart[i];
		itemCopy = {};
		for(p in item) {
		itemCopy[p] = item[p];

		}
		itemCopy.total = Number(item.price * item.count).toFixed(2);
		cartCopy.push(itemCopy)
	}
	return cartCopy;
	}

	return obj;
})();


// *****************************************
// Triggers / Events
// ***************************************** 
// Add item
$('.add-to-cart').click(function(event) {
	event.preventDefault();
	var name = $(this).data('name');
	var price = Number($(this).data('price'));
	shoppingCart.addItemToCart(name, price, 1);
	displayCart();
});

// Clear items
$('.clear-cart').click(function() {
	shoppingCart.clearCart();
	displayCart();
});


function displayCart() {
	var cartArray = shoppingCart.listCart();
	var output = "";
	for(var i in cartArray) {
	output += "<tr>"
		+ "<td><b>" + cartArray[i].name + "</b></td>" 
		+ "<td>£ " + cartArray[i].price + "</td>"
		+ "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>"
		+ "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
		+ "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
		+ "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
		+ " = " 
		+ "<td>£ " + cartArray[i].total + "</td>" 
		+  "</tr>";
	}
	$('.show-cart').html(output);
	$('.total-cart').html(shoppingCart.totalCart());
	$('.total-count').html(shoppingCart.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
	var name = $(this).data('name')
	shoppingCart.removeItemFromCartAll(name);
	displayCart();
})


// -1
$('.show-cart').on("click", ".minus-item", function(event) {
	var name = $(this).data('name')
	shoppingCart.removeItemFromCart(name);
	displayCart();
})
// +1
$('.show-cart').on("click", ".plus-item", function(event) {
	var name = $(this).data('name')
	shoppingCart.addItemToCart(name);
	displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
	var name = $(this).data('name');
	var count = Number($(this).val());
	shoppingCart.setCountForItem(name, count);
	displayCart();
});

displayCart();