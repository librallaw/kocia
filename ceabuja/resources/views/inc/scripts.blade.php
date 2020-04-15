<script>

    $(document).ready(function() {

        $('.headercounter').downCount({
            date: '03/22/2020 12:00:00',
            offset: +10
        });





        $(".events").owlCarousel({

            autoPlay: 8000,

            rewindSpeed : 3000,

            slideSpeed:2000,

            items : 3,

            itemsDesktop : [1199,3],

            itemsDesktopSmall : [979,2],

            itemsTablet : [768,1],

            itemsMobile : [479,1],

            navigation : false,

        }); /*** CAROUSEL ***/



        $(".blog-carousel").owlCarousel({

            autoPlay: 5000,

            slideSpeed:1000,

            singleItem : true,

            transitionStyle : "backSlide",

            navigation : false

        }); /*** BLOG CAROUSEL ***/





        $(".team-carousel").owlCarousel({

            autoPlay: 8000,

            rewindSpeed : 3000,

            slideSpeed:2000,

            items : 2,

            itemsDesktop : [1199,2],

            itemsDesktopSmall : [979,2],

            itemsTablet : [768,2],

            itemsMobile : [479,1],

            navigation : false,

        }); /*** TEAM CAROUSEL ***/



        $("#donate").minimalect({ theme: "bubble", placeholder: "Select" });



    });



    $('audio,video').mediaelementplayer();

</script>