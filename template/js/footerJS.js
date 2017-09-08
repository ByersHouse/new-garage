
$(document).ready(function() {
    if($(window).width() > 768) { $('.tooltip').tooltipster({theme: 'tooltipster-shadow'}); }
});


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');



<!-- Start SiteHeart code -->

if($(window).width() >= 768){

    /* Start SiteHeart code */

    (function(){
        var widget_id = 878477;
        _shcp =[{widget_id : widget_id}];
        var lang =(navigator.language || navigator.systemLanguage
            || navigator.userLanguage ||"en")
            .substr(0,2).toLowerCase();
        var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
        var hcc = document.createElement("script");
        hcc.type ="text/javascript";
        hcc.async =true;
        hcc.src =("https:"== document.location.protocol ?"https":"http")
            +"://"+ url;
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hcc, s.nextSibling);
    })();

    /* End SiteHeart code --> */
    /*
    (function(){
    var widget_id = 877320;
    _shcp =[{widget_id : widget_id}];
    var lang =(navigator.language || navigator.systemLanguage
    || navigator.userLanguage ||"en")
    .substr(0,2).toLowerCase();
    var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
    var hcc = document.createElement("script");
    hcc.type ="text/javascript";
    hcc.async =true;
    hcc.src =("https:"== document.location.protocol ?"https":"http")
    +"://"+ url;
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hcc, s.nextSibling);
    })();*/

}



<!-- End SiteHeart code -->

    $('.close-modal').click(function(){
        $(this).parent().parent().hide();
    })



    jQuery('.cup1').counterUp({
        delay: 1,
        time: 500
    });
jQuery('.cup2').counterUp({
    delay: 1,
    time: 600
});

jQuery('.cup3').counterUp({
    delay: 1,
    time: 700
});








if($(window).width() >= 768){
    $(document).on('mouseover', '.io-two', function(){
        $('.OneIcons--text').hide();
        $('.OneIcons--text--two').show();
    });

    $(document).on('mouseover', '.io-one', function(){
        $('.OneIcons--text').hide();
        $('.OneIcons--text--one').show();
    });



    $(document).on('mouseover', '.io-three', function(){
        $('.OneIcons--text').hide();
        $('.OneIcons--text--three').show();
    });


    $(document).on('mouseover', '.io-fourth', function(){
        $('.OneIcons--text').hide();
        $('.OneIcons--text--fourth').show();
    });

    $(document).on('mouseover', '.io-fifth', function(){
        $('.OneIcons--text').hide();
        $('.OneIcons--text--fifth').show();
    });
    $(document).on('mouseleave', '.io',function(){
        $('.OneIcons--text').hide();

    });
} else {

    $(document).on('click', '.io-three a', function(){
        $('.OneIcons--text').hide();

        if($(this).parent().hasClass('showed'))
        {
            $(this).parent().toggleClass('showed');
            $('.OneIcons--text--three').hide();
            $('.io-three .ellipse').hide();
        }
        else
        {
            $('.OneIcons--text--three').show();
            $('.io-three .ellipse').show();
            $(this).parent().toggleClass('showed');
        }

    });

    $(document).on('tap', '.io-one a', function(){
        $('.OneIcons--text').hide();
        if($(this).parent().hasClass('showed'))
        {
            $(this).parent().toggleClass('showed');
            $('.OneIcons--text--one').hide();
            $('.io-one .ellipse').hide();
        }
        else
        {
            $('.OneIcons--text--one').show();
            $('.io-one .ellipse').show();
            $(this).parent().toggleClass('showed');
        }
    });

    $(document).on('click', '.io-two a', function(){
        $('.OneIcons--text').hide();
        if($(this).parent().hasClass('showed'))
        {
            $(this).parent().toggleClass('showed');
            $('.OneIcons--text--two').hide();
            $('.io-two .ellipse').hide();
        }
        else
        {
            $('.OneIcons--text--two').show();
            $('.io-two .ellipse').show();
            $(this).parent().toggleClass('showed');
        }
    });

    $(document).on('click', '.io-fourth a', function(){
        $('.OneIcons--text').hide();
        if($(this).parent().hasClass('showed'))
        {
            $(this).parent().toggleClass('showed');
            $('.OneIcons--text--fourth').hide();
            $('.io-fourth .ellipse').hide();
        }
        else
        {
            $('.OneIcons--text--fourth').show();
            $('.io-fourth .ellipse').show();
            $(this).parent().toggleClass('showed');
        }
    });

    $(document).on('click', '.io-fifth a', function(){
        $('.OneIcons--text').hide();
        if($(this).parent().hasClass('showed'))
        {
            $(this).parent().toggleClass('showed');
            $('.OneIcons--text--fifth').hide();
            $('.io-fifth .ellipse').hide();
        }
        else
        {
            $('.OneIcons--text--fifth').show();
            $('.io-fifth .ellipse').show();
            $(this).parent().toggleClass('showed');
        }
    });

}




$(document).on('click','.mobilemenuIcon a', function(){
    $(this).parent().toggleClass('open');
    if($('.mobilemenuIcon').hasClass('open'))
    {
        $('.mobilemenu .mobileContent').show();
    }
});


$( "body" ).tap(function( event ) {
    if($(event.target).hasClass('r234') === false)
    {
        $('.mobileContent').hide();
    }
});

<!-- For browsers with JavaScript, open the modal. -->

$(function() {
    $('a[data-modal]').on('click', function() {
        $($(this).data('modal')).modal();
        return false;
    });
});
