document.addEventListener("DOMContentLoaded", function(){ 				window.addEventListener( 'DOMContentLoaded', () => {
					const blockScope = document.querySelector( '.uagb-block-c89c7bc5' );
					if ( ! blockScope ) {
						return;
					}

					let lightboxSwiper = null;
					let thumbnailSwiper = null;
					const theBody = document.querySelector( 'body' );
					const updateCounter = ( curPage ) => {
						const lightbox = blockScope.nextElementSibling;
						const counter = lightbox.querySelector( '.spectra-image-gallery__control-lightbox--count-page' );
						counter.innerHTML = parseInt( curPage ) + 1;
					};

					const enableLightbox = ( goTo ) => {
						if ( ! lightboxSwiper ) {
							return;
						}
						const lightbox = blockScope.nextElementSibling;
						lightbox.style.display = '';
						lightbox.focus();
						setTimeout( () => {
							lightboxSwiper.slideTo( goTo );
						}, 100 );
						setTimeout( () => {
							lightbox.style.opacity = 1;
							theBody.style.overflow = 'hidden';
						}, 250 );
					}
										const images = blockScope.querySelectorAll( '.spectra-image-gallery__media-wrapper' );
					for ( let i = 0; i < images.length; i++ ) {
						images[ i ].style.cursor = 'pointer';
						images[ i ].addEventListener( 'click', () => enableLightbox( i ) );
					}
										let lightboxSettings = {"lazy":true,"slidesPerView":1,"navigation":{"nextEl":".uagb-block-c89c7bc5+.spectra-image-gallery__control-lightbox .swiper-button-next","prevEl":".uagb-block-c89c7bc5+.spectra-image-gallery__control-lightbox .swiper-button-prev"},"keyboard":{"enabled":true}};
															lightboxSwiper = new Swiper( ".uagb-block-c89c7bc5+.spectra-image-gallery__control-lightbox .spectra-image-gallery__control-lightbox--main",
						{"lazy":true,"slidesPerView":1,"navigation":{"nextEl":".uagb-block-c89c7bc5+.spectra-image-gallery__control-lightbox .swiper-button-next","prevEl":".uagb-block-c89c7bc5+.spectra-image-gallery__control-lightbox .swiper-button-prev"},"keyboard":{"enabled":true}}					);
										lightboxSwiper.on( 'activeIndexChange', ( swiperInstance ) => {
																	} );
															if ( blockScope.nextElementSibling.classList.contains( 'spectra-image-gallery__control-lightbox' ) ) {
												const lightbox = blockScope.nextElementSibling;
						lightbox.addEventListener( 'keydown', ( event ) => {
							if ( 27 === event.keyCode ) {
								theBody.style.overflow = '';
								lightbox.style.opacity = 0;
								setTimeout( () => {
									lightbox.style.display = 'none';
								}, 250 );
							}
						} );
						lightbox.style.display = 'none';
													const closeButton = lightbox.querySelector( '.spectra-image-gallery__control-lightbox--close' );
							if ( closeButton ) {
								closeButton.addEventListener( 'click', () => {
									theBody.style.overflow = '';
									lightbox.style.opacity = 0;
									setTimeout( () => {
										lightbox.style.display = 'none';
									}, 250 );
								} );
							}
																							}
				} );
			 });