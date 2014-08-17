$(document).ready(function(){
    /*
    *   Global variables.
    */
    var pageHeight = $(window).height();
    var pageWidth = $(window).width();
    var navigationHeight = $("#navigation").outerHeight();
    
    /*
    *   ON RESIZE, check again
    */
    $(window).resize(function () {
        pageWidth = $(window).width();
        pageHeight = $(window).height();
    });
    
    /*
    *   ON LOAD
    */

    // Fix navigation. if not in front page the navigation bar is always shown

    enabled = $('title').html().indexOf('|');

    enabled = enabled == -1 ? true : false;

    $('#navigation').fixedonlater(enabled);

    // if not front-page increases margin-top because of always shown navigation

    if(!enabled) {
        $('.container header').css('margin-top', '30px');
        
    }
    
    //Initialize scroll so if user droped to other part of page then home page.
    $(window).trigger('scroll');
   
    // Carousel "Quote slider" initialization.
    $('#quote-slider').carousel({
        interval: 20000
    })

    //Scroll spy and scroll filter
    //disables onePageNav if not in front-page
    if(enabled) $('#main-menu').onePageNav({
        currentClass: 'active',
        changeHash: false,
        scrollOffset: navigationHeight - 10,
        scrollThreshold: 0.5,
        scrollSpeed: 750,
        filter: '',
        easing: 'swing',
     });
    
    
    // Paralax initialization.
    // Exclude for mobile.
    if(pageWidth > 980){
        //Dont user paralax for tablet and mobile devices.
        $('#page-welcome').parallax("0%", 0.2);
        $('#page-features').parallax("0%", 0.07);
        $('#page-twitter').parallax("0%", 0.1);
        $('#page-picarelli').parallax("0%", 0.1);
    }
    
    //Emulate touch on table/mobile touchstart.
    if(typeof(window.ontouchstart) != 'undefined') {
        var touchElements = [".social-icons a", ".portfolio-items li", ".about-items .item"];
        
        $.each(touchElements, function (i, val) {
            $(val).each(function(i, obj) {
                $(obj).bind('click', function(e){
                
                    if($(this).hasClass('clickInNext')){
                        $(this).removeClass('clickInNext');
                    } else {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        $(this).mouseover();
                        $(this).addClass('clickInNext');
                    }
                });
            });
        });
    }

    /*
    *   BLOCK | Navigation
    *
    *   Smooth scroll
    *   Main menu links
    *   Logo click on Welcome page
    */
    $('#page-welcome .logo a').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top - navigationHeight + 4
            
        }, 800);
        
        //Fix jumping of navigation.
        setTimeout(function() {
            $(window).trigger('scroll');
        }, 900);
        
        return false;
    });
    
    
    /*
    *   PAGE | Welcome 
    *
    *   Initialize slider for welcome page H1 message.
    */
   $('#welcome-messages ul').bxSlider({
        mode: 'vertical',
        auto: true,
        minSlides: 1,
        responsive: true,
        touchEnabled: true,
        pager: false,
        controls: false,
        useCSS: false,
        pause: 3000
    });
    /*
    *   PAGE | WORK
    *
    *   .plugin-filter - Defines action links.
    *   .plugin-filter-elements - Defines items with li.
    */
    $('.plugin-filter').click(function(){
        return false;
    });
    $('.plugin-filter2').click(function(){
        return false;
    });
    $('.submenu-item').click(function(){
        $(this).addClass('active');
        $(this).parent().siblings().children().removeClass('active'); 
    });
    $('.plugin-filter-elements').mixitup({
        targetSelector: '.mix',
        filterSelector: '.plugin-filter',
        sortSelector: '.sort',
        buttonEvent: 'click',
        effects: ['fade','rotateY'],
        listEffects: null,
        easing: 'smooth',
        layoutMode: 'grid',
        targetDisplayGrid: 'inline-block',
        targetDisplayList: 'block',
        gridClass: '',
        listClass: '',
        transitionSpeed: 600,
        showOnLoad: 'cardiologia',
        sortOnLoad: false,
        multiFilter: false,
        filterLogic: 'or',
        resizeContainer: true,
        minHeight: 0,
        failClass: 'fail',
        perspectiveDistance: '3000',
        perspectiveOrigin: '50% 50%',
        animateGridList: true,
        onMixLoad: null,
        onMixStart: null,
        onMixEnd: null
    });

    $('.about-items').mixitup({
        targetSelector: '.mix2',
        filterSelector: '.plugin-filter2',
        sortSelector: '.sort',
        buttonEvent: 'click',
        effects: ['fade','rotateY'],
        listEffects: null,
        easing: 'smooth',
        layoutMode: 'grid',
        targetDisplayGrid: 'inline-block',
        targetDisplayList: 'block',
        gridClass: '',
        listClass: '',
        transitionSpeed: 600,
        showOnLoad: 'cardio',
        sortOnLoad: false,
        multiFilter: false,
        filterLogic: 'or',
        resizeContainer: true,
        minHeight: 0,
        failClass: 'fail',
        perspectiveDistance: '3000',
        perspectiveOrigin: '50% 50%',
        animateGridList: true,
        onMixLoad: null,
        onMixStart: null,
        onMixEnd: null,
        
    });

// $('.plugin-filter-elements').mixItUp({
//         animation: {
//             effects: 'fade rotateY',
//             duration: 600,
//             easing: 'smooth',
//             animateResizeContainer: true,
//             perspectiveDistance: '3000',
//             perspectiveOrigin: '50% 50%',
//             //transitionSpeed: 600,
//             // effects: ['fade','rotateY'],
//              // perspectiveDistance: '3000',
//             // perspectiveOrigin: '50% 50%',
//             // easing: 'smooth',
//             // resizeContainer: true,
//         },
//         selectors: {
//             target: '.mix',
//             filter: '.plugin-filter',
//             sort: '.sort',
//             // targetSelector: '.mix',
//             // filterSelector: '.plugin-filter',
//             //sortSelector: '.sort',
//         },
//         layout: {
//             display: 'inline-block',
//             containerClassFail: 'fail'
//              //failClass: 'fail',
//             //targetDisplayGrid: 'inline-block',
//         },
//         load: {
//             sort: false,
//             filter: 'all'
//             //showOnLoad: 'all',
//             //sortOnLoad: false,
//         },
//         callbacks: {
//             onMixLoad: null,
//             onMixStart: null,
//             onMixEnd: null
//             // onMixLoad: null,
//             // onMixStart: null,
//             // onMixEnd: null
//         },
//         controls: {
//             toggleFilterButtons: false,
//             toggleLogic: 'or'
//             // multiFilter: false,
//             // filterLogic: 'or',
//         },

        
//         // buttonEvent: 'click',
//         // listEffects: null,
//         // layoutMode: 'grid',
//         // targetDisplayList: 'block',
//         // gridClass: '',
//         // listClass: '',
//         // minHeight: 0,
//         // animateGridList: true,
        
//     });

//     $('.about-items').mixItUp({
//         animation: {
//             effects: 'fade rotateY',
//             duration: 600,
//             easing: 'smooth',
//             animateResizeContainer: true,
//             perspectiveDistance: '3000',
//             perspectiveOrigin: '50% 50%'
            
//         },
//         selectors: {
//             target: '.mix2',
//             filter: '.plugin-filter2',
//             sort: '.sort'
            
//         },
//         layout: {
//             display: 'inline-block',
//             containerClassFail: 'fail'
             
//         },
//         load: {
//             sort: false,
//             filter: 'all'
            
//         },
//         callbacks: {
//             onMixLoad: null,
//             onMixStart: null,
//             onMixEnd: null
            
//         },
//         controls: {
//             toggleFilterButtons: false,
//             toggleLogic: 'or'
            
//         },
//     });
    

        
    
    /*
    *   PAGE | Twitter 
    *   
    *   CONFIGURE FIRST
    *
    *   Pull latest tweets from user.
    *   Configuration: /plugins/twitter/index.php
    
    $('.twitterfeed').tweet({
        modpath: 'plugins/twitter/',
        username: 'TheGridelicious',
        count: 3
    });
    */
    
    //Prepare markup for twitter feed and carousel. Alow twitter to load. 1s, load time.
    setTimeout(function() {
        var myCarousel = $("#twitterfeed-slider");
        myCarousel.append("<ol class='carousel-indicators'></ol>");
        
        myCarousel.find('.tweet_list').addClass("carousel-inner");
        myCarousel.find('.tweet_list li').addClass('item').first().addClass("active");
            
        var indicators = myCarousel.find(".carousel-indicators"); 
        myCarousel.find(".carousel-inner").children(".item").each(function(index) {
            (index === 0) ? 
            indicators.append("<li data-target='#twitterfeed-slider' data-slide-to='"+index+"' class='active'></li>") : 
            indicators.append("<li data-target='#twitterfeed-slider' data-slide-to='"+index+"'></li>");
        });
        
        //After creating markup, start carousel.
       $('#twitterfeed-slider').carousel({
            interval: 5000,
            pause: "hover"
        });
        
    }, 1000);

    // Trigger 6 most recent posts from WP, no particular category

    $('#cat-all').trigger('click');
    

});


/*
*   Ajax request.
*   Start loading.
*   Append loading notification.
*/
$( document ).ajaxSend( function() {

    // Show loader.
    if($(".loading").length == 0) {
        $("body").append('<div class="loading"><div class="progress progress-striped active"><div class="bar"></div></div></div>');
        $(".loading").slideDown();
        $(".loading .progress .bar").delay(300).css("width", "100%");

    }
});

/*
*   Reinitialize Scrollspy after ajax request is completed.
*   Refreshing will recalculate positions of each page in document.
*   Time delay is added to allow ajax loaded content to expand and change height of page.
*/
$( document ).ajaxComplete(function() {

    // Remove loading section.
    $(".loading").delay(1000).slideUp(500, function(){
        $(this).remove();

    });
    
    
    // Portfolio details - close.
    $(".close-portfolio span").click(function(e) {
        $(".portfolio-item-details").delay(500).slideUp(500, function(){
            $(this).remove();
        });

        $(".destaques-item-details").delay(500).slideUp(500, function(){
            $(this).remove();
        });
        
        window.location.hash= "!";
        return false;
    });
});
/*
*   BLOG
*
*   
*/

$('#page-blog .submenu ul li a').click(function(event) {
    $(this).addClass('active');
    $(this).parent().siblings().children().removeClass('active');
    var cat = $(this).html();
    
$.ajax(
    {
        url : ajaxurl,
        type: "POST",
        data: {
            action: "cat_action",
            categ: cat

        },
        success:function(data, textStatus, jqXHR)
        {
            $('#insert-text').html(data);
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert(errorThrown);    
        }
    });
});

$("#envioForm").submit(RunAjax);

function RunAjax(e) {
    
    // parameters and defaults
    var url = e.target.action;
    e.preventDefault();
    var nomeRemetente = $("#nomeRemetente").val();
    nomeRemetente = (nomeRemetente.length <=5) ? "Favor colocar nome e último sobrenome" : nomeRemetente ;
    var email = $("#email").val();
    email = (IsEmail(email) == false) ? "Favor corrigir o email" : email;
    var telefone = $('#telefone').val();
    var mensagem = $('#mensagem').val();
    mensagem = (mensagem.length <=5) ? "Mensagem nula": mensagem;
    
    var alerta = "";
    
    if (mensagem=="Mensagem nula")
    {
        alerta += mensagem + "\n";
        
    }
    if (email=="Favor corrigir o email")
    {
        alerta += email + "\n";
        
    }
    if (nomeRemetente == "Favor colocar nome e último sobrenome")
    {
        alerta += nomeRemetente;
    }
    
    if (alerta.length>0)
    
    {
        alert(alerta);
    }
    
    else 
    {
        var data = "&nomeRemetente=" + nomeRemetente + "&email=" + email + "&telefone=" + telefone +
    "&mensagem=" + mensagem;
        $.ajax({
           type: "POST", /* tipo post */
           url: "http://localhost/picarelli/enviarEmail.php", /* endereço do script PHP */
           async: true,
           data: data, /* informa Url */
           success: function(data) { /* sucesso */
               alert(data);
               /* pode ser utilizado um alert para ver o retorno */
              //$('#envioSucesso').html(data); /* imprime o retorno no HTML */
           },
           error: function(jqXHR, textStatus, errorThrown)
            {
                alert("error: "+errorThrown);    
            }
           
        });

    }

}

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

