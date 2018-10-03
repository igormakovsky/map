$(document).ready(function () {

    //appear
    $('.appear:in-viewport').addClass('animated fadeIn');
    $('.appear-blur:in-viewport').addClass('appeared-blur');

    $(window).scroll(function () {
        $('.appear:in-viewport').addClass('animated fadeIn');
        $('.appear-blur:in-viewport').addClass('appeared-blur');
        $('.grow:in-viewport').addClass('grown');
    });

    //popup manager fancybox
    //doc: http://fancybox.net/howto
    //<a class="fancybox"><img src="image.jpg" /></a>
    //<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
    $(".fancybox").fancybox();

    //landing page nav
    //$(".top_mnu") - top link panel.
    //links <a href="#contacts">Контакты</a>
    $(".top_mnu").navigation();

    //add subling classes .block for animation
    //doc: http://imakewebthings.com/jquery-waypoints/
    $(".block").waypoint(function (direction) {
        if (direction === "down") {
            $(".class").addClass("active");
        } else if (direction === "up") {
            $(".class").removeClass("deactive");
        }
    }, {
        offset: 100
    });

    //carousel
    //doc: http://owlgraphic.com/owlcarousel/
    var owl = $(".carousel");
    owl.owlCarousel({
        items: 4
    });
    owl.on("mousewheel", ".owl-wrapper", function (e) {
        if (e.deltaY > 0) {
            owl.trigger("owl.prev");
        } else {
            owl.trigger("owl.next");
        }
        e.preventDefault();
    });
    $(".next_button").click(function () {
        owl.trigger("owl.next");
    });
    $(".prev_button").click(function () {
        owl.trigger("owl.prev");
    });

    //top button
    //doc:
    //http://api.jquery.com/scrolltop/
    //http://api.jquery.com/animate/
    $("#top").click(function () {
        $("body, html").animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    //ajax form send
    //doc: http://api.jquery.com/jquery.ajax/
    $("form").submit(function () {
        $.ajax({
            type: "GET",
            url: "mail.php",
            data: $("form").serialize()
        }).done(function () {
            alert("Спасибо за заявку!");
            setTimeout(function () {
                $.fancybox.close();
            }, 1000);
        });
        return false;
    });

    //smooth scrolling
    $('a[href^="#"]').click(function () {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 40
        }, 2000);
        return false;
    });
    
    //hover and click
    function animationClick(trigger, element, animation) {
        element = $(element);
        trigger = $(trigger);
        trigger.click(
            function () {
                element.addClass('animated ' + animation);
                //wait for animation to finish before removing classes
                window.setTimeout(function () {
                    element.removeClass('animated ' + animation);
                }, 2000);

            });
    }

    function animationHover(trigger, element, animation) {
        element = $(element);
        trigger = $(trigger);
        trigger.hover(
            function () {
                element.addClass('animated ' + animation);
            },
            function () {
                //wait for animation to finish before removing classes
                window.setTimeout(function () {
                    element.removeClass('animated ' + animation);
                }, 2000);
            });
    }
});
