<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>MIMA WATERS | stores ::</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Pervasive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" /> 
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="inner-banner">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
                <h1>
                    <a class="navbar-brand text-white" href="{{url('stores')}}">
                    </a> 
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('')}}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('about')}}">About</a>
                        </li>
						<li class="nav-item active  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('services')}}">Services</a>
                        </li>
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
			</nav>
        </header>
        <!-- //header -->
        
    </div>
	 <!-- //banner-text -->
	  <!--services-->
    <div class="agileits-services py-md-5 py-4">
        <div class="container py-lg-5">
        <div class="col-lg-7 col-md-7 col-sm-7 ____mobiup">
            <p class="__abomi ">stores</p> 
            <p class="__abomi1 ">
            *Jendol Abule Egba<br>
            *Jendol Egbeda<br>
            *Jendol Isheri<br>
            *Twins Faja Ikotun, Iba, Abaranje and Carwash Egbeda<br>
            *Blenco Ado Road Ajah<br>
            *Blenco Akowonjo<br>
            *Hutos Superstore Agege<br>
            *De Prince Gbagada<br>
            *Westgate Mall Olowora<br>
            *Globus stores in Egbe, Isolo and Okota<br>
            *Supersaver Superstore Ajao Estate and Ikosi Road<br>
            *Wisebuyer superstore Arepo<br>
            *Supershoppy Magboro<br>
            *Tonyson supermarket Yaba<br>
            *Lifeback supermarket Yaba<br>

             PHARMACIES<br>
             *Follyma Alakuko<br>
             *Romitel Mowe<br>
             *Naza Pharmacy Oworo<br>
             *Pharma Care Festac, Satelite and Abuja<br>
             *A.N.Choice Mowe<br>
             *Prinogold Agric Ikorodu<br>
             *Teslon Agric Ikorodu<br>
             J.B.C Ogba<br>
             Elyon Akute<br>
             Come Alive Gbagada<br>
             3D Radiance Ifako Gbagada<br>

             AND MANY OTHERS.<br>
            Kindly order for the product on our site and it shall be delivered to your door step
                </p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 __mobildown">
                <img src="images/mimaboy.jfif" alt="" class="" style="width:100%">
            </div>
            </div>
           
            </div>
            <div class="copyright py-3">
                <p class="copy-right text-center ">&copy; 2020 mima water. All Rights Reserved | Design by
                <a href="http://mimawaters.com/"> Peamat </a>
                </p>
            </div>
	<!-- //footer -->

   <!-- js -->
   <script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
  <!-- testimonials  Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //testimonials  Responsiveslides -->
<!--pop-up-box -->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //pop-up-box -->

<!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script> 
</body>

</html>
