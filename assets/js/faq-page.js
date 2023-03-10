window.wpConfig={navigationArrows:'<span class="circle-left fp-icon-chevron-left-square-o disabled"></span><span class="circle-right fp-icon-chevron-right-square-o"></span>',desktopNavigationArrows:'',mobileNavigationArrows:'fp-icon-chevron-right',miniListId:'#mini-list-indicator',imgMenuPath:'/wp-content/themes/fp-wp-cc-medactiv/resources/images/menu/',showOnlyRootLevel:!1,makeThisMyStoreLbl:'Make this store',showMenuIcon:!0,enablePrehome:!1};function debounce(fn,delay){var timer=null;return function(){var context=this,args=arguments;clearTimeout(timer);timer=setTimeout(function(){fn.apply(context,args)},delay)}}(function($){window.FAQ={init:function(){var MARGIN_TOP=28
        var faqNavigationItems=$('.faq-nav-item')
        var faqQuestions=$('.faq-question')
        faqNavigationItems.on('click',function(event){event.preventDefault()
            var selectedHref=$(this).attr('href')
            var target=$(selectedHref)
            var headerHeight=$('.header-wrapper').height()||65
            console.log(headerHeight)
            $('body,html').animate({'scrollTop':target.offset().top-headerHeight},200)})
        faqQuestions.on('click',function(event){event.preventDefault()
            $(this).next('.faq-answer').slideToggle(200)
            $(this).children('.faq-question-icon').toggleClass('is-active')})
        $(window).on('scroll',function(){(!window.requestAnimationFrame)?updateNav():window.requestAnimationFrame(updateNav)});function updateNav(){var faqContentGroups=$('.faq-content-group')
            faqContentGroups.each(function(){var actual=$(this)
                var activeGroup=$('.faq-nav a[href="#'+actual.attr('id')+'"]')
                var marginTitle=parseInt($('.faq-content-group-title').eq(1).css('marginTop').replace('px',''))
                var headerHeight=$('.header-wrapper').height()
                var topSection=(activeGroup.is(':first-child'))?0:Math.round(actual.offset().top);if((topSection-headerHeight-MARGIN_TOP-40<=$(window).scrollTop())&&(Math.round(actual.offset().top)+actual.height()-headerHeight-MARGIN_TOP-40>$(window).scrollTop())){activeGroup.addClass('selected')}else{activeGroup.removeClass('selected')}})}}}
    window.stickyHeader={init:function(){var MARGIN_TOP=$('#header .first-row').outerHeight(!0)
            $(window).on('scroll',function(){(!window.requestAnimationFrame)?updateHeader():window.requestAnimationFrame(updateHeader)});function updateHeader(){var scrollPos=$(window).scrollTop()
                var $header=$('#header')
                var $cart=$('#mini-list-wrapper')
                if($(window).width()<992){return}
                if(scrollPos>MARGIN_TOP){$('body').addClass('has-header-sticky')
                    $header.addClass('sticky')
                    $cart.detach().appendTo('.second-row > .container').addClass('sticky')}else{$header.removeClass('sticky')
                    $('body').removeClass('has-header-sticky')
                    if($cart.hasClass('sticky')){$cart.detach().appendTo('.site-header .top-menu-right').removeClass('sticky')}}}}}
    window.stickyProduct={init:function(){var self=this;var $bodyClass=$('.departments-template-default')
            var $title=$('.fp-page-header.fp-page-title')
            var hasScrolled=!1
            if(!$title.get(0)||$bodyClass.get(0)){return}
            var MARGIN_TOP=$title.offset().top+40
            $(window).on('scroll',function(){(!window.requestAnimationFrame)?updateSticky():window.requestAnimationFrame(updateSticky)});function getTemplate(){var html=[];html.push('<div class="sticky-product">');html.push('<div class="sticky-product__wrap">');html.push('<div class="sticky-product__left"></div>');html.push('<div class="sticky-product__right"></div>');html.push('</div>');html.push('</div>');return html.join('')}
            function updateSticky(){var scrollPos=$(window).scrollTop()
                if($(window).width()<992){return}
                if(scrollPos>500){if(!$('.sticky-product').hasClass('is-active')){if(!hasScrolled){$('#site-banner').append($(getTemplate()))}
                    $('.sticky-product').addClass('is-active')
                    $('.fp-page-title-container').detach().appendTo('.sticky-product__left')
                    $('.fp-form-product-detail').detach().appendTo('.sticky-product__right')
                    hasScrolled=!0}}else{if($('.sticky-product').hasClass('is-active')){$('.sticky-product').removeClass('is-active')
                    $('.fp-page-title-container').detach().appendTo('#page-title')}}}}}
    window.productLayout={init:function(){var wWidth=$(window).width()}}
    $(document).ready(function(){stickyHeader.init();FAQ.init();$(".landing-products__carousel").owlCarousel({items:1,responsive:{767:{items:4},992:{items:4},1200:{items:5}}});var isLoop=$('.carousel-slide').length>1?!0:!1
        $(".carousel").owlCarousel({items:1,loop:isLoop,smartSpeed:500,autoPlay:4000,slideTransition:'ease-out'});$('.single-share-icons a').on('click',function(e){e.preventDefault()
            var url=$(this).data('href')
            console.log(url)
            var w=800
            var h=550
            var winTop=($(window).height()/2)-(h/2)
            var winLeft=($(window).width()/2)-(w/2)
            window.open(url,'sharer','top='+winTop+',left='+winLeft+',toolbar=0,status=0,width='+w+',height='+h)})
        $('.faq-answer a').attr('target','_blank');$('.upload-box form').on('submit',function(e){$('.caldera-grid').addClass('cf_processing')})});$(document).on('freshopInitialized',function(){freshop.ui.on('loaded',function(){console.log('********** freshop loaded - from config')})})})(jQuery)
