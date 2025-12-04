
$(document).ready(function() {
    const header = $('#header header');
    const headerOffset = header.offset().top;

    function handleScroll() {
        if ($(window).scrollTop() > headerOffset) {
            header.addClass('sticky');
        } else {
            header.removeClass('sticky');
        }
    }
    handleScroll();
    $(window).scroll(handleScroll);
});


$(document).ready(function () {
    function handleMenuToggle() {
        var nav = $('.mobile-menu');
        var showIcon = $('.show');
        var closeIcon = $('.close');
        var toggleBtn = $('.hamburger-menu-icon');
        var body = $('body');

        if ($(window).width() <= 991) {
            if (nav.is(':visible')) {
                nav.removeClass('active').fadeOut("slow");
                showIcon.fadeIn("slow");
                closeIcon.fadeOut("slow");
                toggleBtn.attr('aria-expanded', 'false');
                body.removeClass('nav-open');
                collapseMobileSubmenus();
            } else {
                nav.addClass('active').fadeIn("slow");
                showIcon.fadeOut("slow");
                closeIcon.fadeIn("slow");
                toggleBtn.attr('aria-expanded', 'true');
                body.addClass('nav-open');
            }
        } else {
            nav.removeClass('active').hide();
            showIcon.show();
            closeIcon.hide();
            toggleBtn.attr('aria-expanded', 'false');
            body.removeClass('nav-open');
            collapseMobileSubmenus();
        }
    }

    function enhanceMobileSubmenus() {
        $('.mobile-menu .menu-item-has-children').each(function () {
            var item = $(this);
            if (!item.children('.submenu-toggle').length) {
                var toggleButton = $('<button />', {
                    class: 'submenu-toggle',
                    type: 'button',
                    'aria-expanded': 'false',
                    'aria-label': 'Toggle submenu'
                });
                item.children('a').after(toggleButton);
            }
        });
    }

    function collapseMobileSubmenus() {
        $('.mobile-menu .sub-menu').removeClass('open').removeAttr('style');
        $('.mobile-menu .submenu-toggle').removeClass('is-open').attr('aria-expanded', 'false');
    }

    enhanceMobileSubmenus();

    $('.hamburger-menu-icon').click(handleMenuToggle);

    $('.mobile-menu').on('click', '.submenu-toggle', function (event) {
        event.preventDefault();
        event.stopPropagation();

        var button = $(this);
        var subMenu = button.siblings('.sub-menu');
        var isOpen = subMenu.hasClass('open');

        if (isOpen) {
            subMenu.stop(true, true).slideUp(200, function () {
                subMenu.removeClass('open').removeAttr('style');
            });
        } else {
            subMenu.stop(true, true).slideDown(200, function () {
                subMenu.addClass('open').css('display', 'flex');
            });
        }

        button.toggleClass('is-open', !isOpen).attr('aria-expanded', String(!isOpen));
    });

    $(window).resize(function () {
        if ($(window).width() > 992) {
            $('.mobile-menu').removeClass('active').hide();
            $('.show').show();
            $('.close').hide();
            $('.hamburger-menu-icon').attr('aria-expanded', 'false');
            $('body').removeClass('nav-open');
            collapseMobileSubmenus();
        }
    });
});
