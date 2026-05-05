$(document).ready(function() {

    // ─── CALCULADORA DE IMPACTO ───────────────────────────────────────────────

    var $calcPanel       = $('.homeCalculator__panel');
    var $valueButtons    = $calcPanel.find('.homeCalculator__value');
    var $freqButtons     = $calcPanel.find('.homeCalculator__frequencyButton');
    var $customInput     = $calcPanel.find('.homeCalculator__input');

    // Proporção de cada espécie: 65% roedores, 10% aves (5+5), 25% peixes
    var DIST = { rato: 0.65, pato: 0.05, galinha: 0.05, peixe: 0.25 };

    // Custo (R$) necessário para impactar 1 animal de cada espécie
    var COST = { rato: 15, pato: 3, galinha: 3, peixe: 40 };

    // Multiplicador por frequência: mensal tem impacto sustentado, única tem metade
    var FREQ_MULT = { mensal: 1, unica: 0.5 };

    function getAmount() {
        var $active = $valueButtons.filter('.homeCalculator__value--active');
        if ($active.length) {
            return parseInt($active.text().replace(/\D/g, ''), 10) || 0;
        }
        return parseInt($customInput.val().replace(/\D/g, ''), 10) || 0;
    }

    function getFreqMultiplier() {
        var $active = $freqButtons.filter('.homeCalculator__frequencyButton--active');
        var label = $active.text().trim().toLowerCase();
        return label === 'mensal' ? FREQ_MULT.mensal : FREQ_MULT.unica;
    }

    function animateNumber($el, toValue) {
        var from = parseInt($el.text(), 10) || 0;
        if (from === toValue) return;
        $({ n: from }).animate({ n: toValue }, {
            duration: 450,
            easing: 'swing',
            step: function() { $el.text(Math.floor(this.n)); },
            complete: function() { $el.text(toValue); }
        });
    }

    function calculateAndDisplay() {
        var amount = getAmount() * getFreqMultiplier();

        $('.homeAnimalResult').each(function() {
            var $icon   = $(this).find('.homeAnimalResult__icon');
            var $number = $(this).find('.homeAnimalResult__number');
            var animal  = null;

            ['rato', 'pato', 'galinha', 'peixe'].forEach(function(a) {
                if ($icon.hasClass('icon-' + a)) animal = a;
            });

            if (animal) {
                var count = amount > 0 ? Math.floor(amount * DIST[animal] / COST[animal]) : 0;
                animateNumber($number, count);
            }
        });
    }

    // Botões de valor predefinido
    $valueButtons.on('click', function() {
        $valueButtons.removeClass('homeCalculator__value--active');
        $(this).addClass('homeCalculator__value--active');
        $customInput.val('');
        calculateAndDisplay();
    });

    // Botões de frequência
    $freqButtons.on('click', function() {
        $freqButtons.removeClass('homeCalculator__frequencyButton--active');
        $(this).addClass('homeCalculator__frequencyButton--active');
        calculateAndDisplay();
    });

    // Máscara do campo personalizado — formato R$ X.XXX (sem centavos)
    $customInput.on('keydown', function(e) {
        var allowed = [8, 46, 37, 38, 39, 40, 9]; // backspace, del, setas, tab
        if (allowed.indexOf(e.which) !== -1 || e.ctrlKey || e.metaKey) return;
        var isDigit = (e.which >= 48 && e.which <= 57) || (e.which >= 96 && e.which <= 105);
        if (!isDigit) e.preventDefault();
    }).on('input', function() {
        var caretPos = this.selectionStart;
        var oldLen   = this.value.length;
        var raw      = this.value.replace(/\D/g, '');

        if (!raw) {
            $(this).val('');
            $valueButtons.removeClass('homeCalculator__value--active');
            calculateAndDisplay();
            return;
        }

        var num       = parseInt(raw, 10);
        var prefix    = 'R$ ';
        var numStr    = num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        var formatted = prefix + numStr;

        $(this).val(formatted);

        var newLen  = formatted.length;
        var newCaret = Math.max(prefix.length, caretPos + (newLen - oldLen));
        this.setSelectionRange(newCaret, newCaret);

        $valueButtons.removeClass('homeCalculator__value--active');
        calculateAndDisplay();
    });

    // Estado inicial (R$60 mensal)
    calculateAndDisplay();


    // ─── DEPOIMENTOS ─────────────────────────────────────────────────────────

    var $testimonials = $('.homeTestimonials__slider');

    if ($testimonials.length) {
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
                'display':            'block',
                'overflow':           'visible',
                '-webkit-line-clamp': 'unset',
                'line-clamp':         'unset',
                'height':             'auto',
                'max-height':         'none',
                'position':           'absolute',
                'visibility':         'hidden',
                'left':               '-9999px',
                'width':              $el.outerWidth() + 'px'
            }).appendTo('body');

            var isClamped = clone[0].offsetHeight > $el[0].offsetHeight;
            clone.remove();
            return isClamped;
        }

        function checkTruncation() {
            $testimonials.find('.slick-slide:not(.slick-cloned) .homeTestimonial').each(function() {
                var $card  = $(this);
                var $quote = $card.find('.homeTestimonial__quote');
                var $btn   = $card.find('.homeTestimonial__button');
                $btn.toggle(isTextClamped($quote));
            });
        }

        $testimonials.on('init', function() {
            checkTruncation();
        }).slick({
            arrows:         true,
            dots:           true,
            infinite:       true,
            slidesToShow:   3,
            slidesToScroll: 1,
            responsive: [
                { breakpoint: 992, settings: { slidesToShow: 2 } },
                { breakpoint: 768, settings: { arrows: false, slidesToShow: 1 } }
            ]
        });

        $(document).on('click', '.homeTestimonial__button', function() {
            var $card       = $(this).closest('.homeTestimonial');
            var $quote      = $card.find('.homeTestimonial__quote');
            var $authorHtml = $card.find('.homeTestimonial__author').html();

            $modal.find('.homeTestimonialModal__quote').text($quote.text());
            $modal.find('.homeTestimonialModal__author').html($authorHtml);
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
    }
});
