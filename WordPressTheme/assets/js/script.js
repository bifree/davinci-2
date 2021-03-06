// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	/* ドロワー */
	jQuery(".js-drawer").on("click", function(e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}
});
});

// トップページスライド
$('.top-mainvisual__slider').slick({
	autoplay: true,//自動的に動き出すか。初期値はfalse。
	autoplaySpeed:6000,//次のスライドに切り替わる待ち時間
	speed:500,//スライドの動きのスピード。初期値は300。
	infinite: true,//スライドをループさせるかどうか。初期値はtrue。
	cssEase: 'linear',
	slidesToShow: 1,//スライドを画面に3枚見せる
	slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
	arrows:false,//左右の矢印なし
	dots:true,//下部ドットナビゲーションの表示
	pauseOnFocus: false,//フォーカスで一時停止を無効
	pauseOnHover: false,//マウスホバーで一時停止を無効
	pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
	});

	$(window).on('load',function(){
		setTimeout(function(){
		$('#mv ul').slick();
		},30);
		});


		
$(function () {
	// aimation呼び出し
	if ($('.js-scroll-trigger').length) {
			scrollAnimation();
	}
	// aimation関数
	function scrollAnimation() {
			$(window).scroll(function () {
					$(".js-scroll-trigger").each(function () {
							let position = $(this).offset().top,
									scroll = $(window).scrollTop(),
									windowHeight = $(window).height();

							if (scroll > position - windowHeight + 50) {
									$(this).addClass('is-active');
							}
					});
			});
	}
	$(window).trigger('scroll');
});


$(function() {
  if (window.matchMedia( '(min-width:798px)' ).matches) {
		$(function () {
			// aimation呼び出し
			if ($('.js-scroll-trigger-late').length) {
					scrollAnimation();
			}
			// aimation関数
			function scrollAnimation() {
					$(window).scroll(function () {
							$(".js-scroll-trigger-late").each(function () {
									let position = $(this).offset().top,
											scroll = $(window).scrollTop(),
											windowHeight = $(window).height();

									if (scroll > position - windowHeight + 300) {
											$(this).addClass('is-active');
									}
							});
					});
			}
			$(window).trigger('scroll');
		});
	}
});

$(function() {
  if (window.matchMedia( '(max-width:797px)' ).matches) {
		$(function () {
			// aimation呼び出し
			if ($('.js-scroll-trigger-late').length) {
					scrollAnimation();
			}
			// aimation関数
			function scrollAnimation() {
					$(window).scroll(function () {
							$(".js-scroll-trigger-late").each(function () {
									let position = $(this).offset().top,
											scroll = $(window).scrollTop(),
											windowHeight = $(window).height();

									if (scroll > position - windowHeight + 50) {
											$(this).addClass('is-active');
									}
							});
					});
			}
			$(window).trigger('scroll');
		});
	}
});


$(function() {
  if (window.matchMedia( '(min-width:798px)' ).matches) {
		$(function () {
			// aimation呼び出し
			if ($('.js-scroll-trigger-little-late').length) {
					scrollAnimation();
			}
			// aimation関数
			function scrollAnimation() {
					$(window).scroll(function () {
							$(".js-scroll-trigger-little-late").each(function () {
									let position = $(this).offset().top,
											scroll = $(window).scrollTop(),
											windowHeight = $(window).height();

									if (scroll > position - windowHeight + 100) {
											$(this).addClass('is-active');
									}
							});
					});
			}
			$(window).trigger('scroll');
		});
	}
});

$(function() {
  if (window.matchMedia( '(max-width:797px)' ).matches) {
		$(function () {
			// aimation呼び出し
			if ($('.js-scroll-trigger-little-late').length) {
					scrollAnimation();
			}
			// aimation関数
			function scrollAnimation() {
					$(window).scroll(function () {
							$(".js-scroll-trigger-little-late").each(function () {
									let position = $(this).offset().top,
											scroll = $(window).scrollTop(),
											windowHeight = $(window).height();

									if (scroll > position - windowHeight + 50) {
											$(this).addClass('is-active');
									}
							});
					});
			}
			$(window).trigger('scroll');
		});
	}
});

    // ヘッダーメニュー
    $(function() {
			$('.hamburger').click(function() {
					$(this).toggleClass('active');
	
					if ($(this).hasClass('active')) {
							$('.globalnav_sp').addClass('active');
					} else {
							$('.globalnav_sp').removeClass('active');
					}
			});
			$('#btn_vision').click(function() {
					$('.globalnav_sp').removeClass('active');
					$('.hamburger').removeClass('active');
			});
	});   