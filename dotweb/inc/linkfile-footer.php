       <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
        </script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
        <script>
            $(document).ready(function () {
                var menu = $('.navbar');
                var origOffsetY = menu.offset().top;

                function scroll() {
                    if ($(window).scrollTop() >= origOffsetY) {
                        $('.navbar').addClass('navbar-fixed-top');
                        $('.navbar').removeClass('navfix');
                    }
                    else {
                        $('.navbar').removeClass('navbar-fixed-top');
                        $('.navbar').addClass('navfix');
                    }
                }
                document.onscroll = scroll;
            });
        </script>
        <!--slick Slider-->
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="js/aos.js" type="text/javascript" charset="utf-8"></script>
        <script>
      AOS.init({
      offset: 300,
      duration: 600,
      easing: 'ease-in-sine',
      delay: 100,
      });
    </script>
        <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
            $(document).on('ready', function () {
                $(".regular").slick({
                    dots: false
                    , infinite: true
                    , slidesToShow: 1
                    , slidesToScroll: 1
                    , autoplay: true
                    , autoplaySpeed: 5000
                    , arrows: false
                    , infinite: true
                , });
                $(".center").slick({
                    dots: false
                    , infinite: true
                    , centerMode: true
                    , slidesToShow: 6
                    , slidesToScroll: 6
                    , autoplay: true
                    , autoplaySpeed: 2000
                    , arrows: false
                    , infinite: true
                    , responsive: [
                        {
                            breakpoint: 1024
                            , settings: {
                                slidesToShow: 3
                                , slidesToScroll: 3
                                , infinite: true
                                , dots: true
                            }
    }
                        , {
                            breakpoint: 600
                            , settings: {
                                slidesToShow: 2
                                , slidesToScroll: 2
                            }
    }
                        , {
                            breakpoint: 480
                            , settings: {
                                slidesToShow: 1
                                , slidesToScroll: 1
                            }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
                });
                
            });
</script>
           <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/587cadb5675718240c6b078b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
            