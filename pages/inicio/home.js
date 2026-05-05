$(document).ready(function() {
    var $testimonials = $('.homeTestimonials__slider');

    if (!$testimonials.length) return;

    var $modal = $(
        '<div class="homeTestimonialModal">' +
            '<div class="homeTestimonialModal__overlay"></div>' +
            '<div class="homeTestimonialModal__box">' +
                '<button class="homeTestimonialModal__close" type="button" aria-label="Fechar">&times;</button>' +
                '<p class="homeTestimonialModal__quote"></p>' +
                '<div class="homeTestimonialModal__author"></div>' +
            '</div>' +
        '</div>'
    );
    $('body').append($modal);

    function isTextClamped($el) {
        var clone = $el.clone().css({
            'display': 'block',
            'overflow': 'visible',
            '-webkit-line-clamp': 'unset',
            'line-clamp': 'unset',
            'height': 'auto',
            'max-height': 'none',
            'position': 'absolute',
            'visibility': 'hidden',
            'left': '-9999px',
            'width': $el.outerWidth() + 'px'
        }).appendTo('body');

        var isClamped = clone[0].offsetHeight > $el[0].offsetHeight;
        clone.remove();
        return isClamped;
    }

    function checkTruncation() {
        $testimonials.find('.slick-slide:not(.slick-cloned) .homeTestimonial').each(function() {
            var $card = $(this);
            var $quote = $card.find('.homeTestimonial__quote');
            var $btn = $card.find('.homeTestimonial__button');

            if (isTextClamped($quote)) {
                $btn.show();
            } else {
                $btn.hide();
            }
        });
    }

    $testimonials.on('init', function() {
        checkTruncation();
    }).slick({
        arrows: true,
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    $(document).on('click', '.homeTestimonial__button', function() {
        var $card = $(this).closest('.homeTestimonial');
        var $quote = $card.find('.homeTestimonial__quote');
        var $authorInner = $card.find('.homeTestimonial__author').html();

        $modal.find('.homeTestimonialModal__quote').text($quote.text());
        $modal.find('.homeTestimonialModal__author').html($authorInner);
        $modal.addClass('homeTestimonialModal--open');
        $('body').css('overflow', 'hidden');
    });

    function closeModal() {
        $modal.removeClass('homeTestimonialModal--open');
        $('body').css('overflow', '');
    }

    $modal.on('click', '.homeTestimonialModal__overlay, .homeTestimonialModal__close', closeModal);

    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') closeModal();
    });
});
