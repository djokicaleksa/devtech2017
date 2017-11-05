<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    @include('components.favicon')
    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/style/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{url('css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Binary | Home</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        @include('components.front_nav')

        <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
            <div class="slider-parallax-inner">

                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-caption-animate="fadeInUp">Making a prototype</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200">Creation of our first prototype in a competition</p>
                                </div>
                            </div>
                            <div class="video-wrap">
                                <video id="slide-video" poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>
                                    <source src="{{url('images/videos/zeka.webm')}}" type='video/webm' />
                                    <source src="{{url('images/videos/zeka.mp4')}}" type='video/mp4' />
                                </video>
                                <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                            </div>
                        </div>
                        

                    </div>
                    
                </div>

                <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

            </div>
        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">
                    <div class="row clearfix">

                        <div class="col-lg-5">
                            <div class="heading-block topmargin">
                                <h1>Welcome to binary<br> your favourite bin.</h1>
                            </div>
                            <p class="lead">Disposing litter in this container earns you money.</p>
                        </div>

                        <div class="col-lg-7">

                            <div style="position: relative; margin-bottom: -100px;" class="ohidden" data-height-lg="500" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
                                <img src="images/services/binary1.jpg" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
                            </div>

                        </div>

                    </div>
                </div>

                <div class="section nobottommargin">
                    <div class="container clear-bottommargin clearfix">

                        <div class="row topmargin-sm clearfix">

                            <div class="col-md-4 bottommargin">
                                <i class="i-plain color i-large icon-line2-graph inline-block" style="margin-bottom: 15px;"></i>
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <span class="before-heading">Make transactions with NFC</span>
                                    <h4>Transactions</h4>
                                </div>
                                <p>For every can and bottle you get a certain amount of money, depending on it's weight and material.</p>
                            </div>

                            <div class="col-md-4 bottommargin">
                                <i class="i-plain color i-large icon-line2-bar-chart inline-block" style="margin-bottom: 15px;"></i>
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <span class="before-heading">Advanced analysis of data</span>
                                    <h4>Statistics</h4>
                                </div>
                                <p>In depth statistics regarding amount of litter collected, sold and money that returned to customers.</p>
                            </div>

                            <div class="col-md-4 bottommargin">
                                <i class="i-plain color i-large icon-line2-trash inline-block" style="margin-bottom: 15px;"></i>
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <span class="before-heading">Dispose of waste, earn coins</span>
                                    <h4>Bincoin - Cryptocurrency</h4>
                                </div>
                                <p>Dispose your waste to Binary and earn Bincoin. </p>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="container clearfix">

                    <div class="row topmargin-lg bottommargin-sm">

                        <div class="heading-block center">
                            <h2>Binary model</h2>
                            <span class="divcenter"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 bottommargin">

                            <div class="feature-box fbox-right topmargin" data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line2-credit-card"></i></a>
                                </div>
                                <h3>NFC card reader</h3>
                                <p>Touch it with your card to begin the transaction.</p>
                            </div>

                            <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line-paper"></i></a>
                                </div>
                                <h3>Face recognition</h3>
                                <p>Find out the mood of the customer and adjust the commercials.</p>
                            </div>

                            <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="400">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line-layers"></i></a>
                                </div>
                                <h3>Sorting litter</h3>
                                <p>Depending on material, cans and bottles will be sorted into different containers.</p>
                            </div>

                        </div>

                        <div class="col-md-4 hidden-sm bottommargin center">
                            <img src="images/services/binary.jpg" alt="iphone 2" style="padding-top: 40px;">
                        </div>

                        <div class="col-md-4 col-sm-6 bottommargin">

                            <div class="feature-box topmargin" data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line2-screen-desktop"></i></a>
                                </div>
                                <h3>Interactive display</h3>
                                <p>See the amount of Bincoins you earned with this transaction, account balance and more.</p>
                            </div>

                            <div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line-stack-2"></i></a>
                                </div>
                                <h3>Commercials</h3>
                                <p>Choose Binary to place your commercials and experience our targeted marketing</p>
                            </div>

                            <div class="feature-box topmargin" data-animate="fadeIn" data-delay="400">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-bulb"></i></a>
                                </div>
                                <h3>Barcode scan</h3>
                                <p>In order to keep thorough statistics, we are scanning barcodes for detailed info. </p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row clearfix bottommargin-lg common-height">

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
                        <div>
                            <i class="i-plain i-xlarge divcenter icon-line2-graph"></i>
                            <div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K</div>
                            <h5>Collected cans</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
                        <div>
                            <i class="i-plain i-xlarge divcenter icon-line2-bar-chart"></i>
                            <div class="counter counter-lined"><span data-from="3000" data-to="21500" data-refresh-interval="100" data-speed="2500"></span></div>
                            <h5>Collected plastic</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
                        <div>
                            <i class="i-plain i-xlarge divcenter icon-line-bar-graph-2"></i>
                            <div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span></div>
                            <h5>Collected glass</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
                        <div>
                            <i class="i-plain i-xlarge divcenter icon-line2-trophy"></i>
                            <div class="counter counter-lined"><span data-from="60" data-to="1400" data-refresh-interval="30" data-speed="2700"></span></div>
                            <h5>Summary</h5>
                        </div>
                    </div>

                </div>

<!--                 <div class="row clearfix bottommargin-lg common-height">

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
                        <div>
                            <i class="i-plain i-xlarge divcenter icon-line2-directions"></i>
                            <div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K</div>
                            <h5>Lines of Codes</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
                        <div>
                            <i class="i-plain i-xlarge divcenter icon-line2-graph"></i>
                            <div class="counter counter-lined"><span data-from="3000" data-to="21500" data-refresh-interval="100" data-speed="2500"></span></div>
                            <h5>KBs of HTML Files</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
                        <div>
                            <i class="i-plain i-xlarge divcenter icon-line2-layers"></i>
                            <div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span></div>
                            <h5>No. of Templates</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
                        <div>
                            <i class="i-plain i-xlarge divcenter icon-line2-clock"></i>
                            <div class="counter counter-lined"><span data-from="60" data-to="1400" data-refresh-interval="30" data-speed="2700"></span></div>
                            <h5>Hours of Coding</h5>
                        </div>
                    </div>

                </div> -->

<!--                 <div class="section">
                    <div class="container clearfix">

                        <div class="row topmargin-sm">

                            <div class="heading-block center">
                                <h3>Meet Our Team</h3>
                            </div>

                            <div class="col-md-4 col-sm-4 bottommargin">

                                <div class="team">
                                    <div class="team-image">
                                        <img src="images/team/arsa.jpg" alt="Nikola Arsic">
                                    </div>
                                    <div class="team-desc team-desc-bg">
                                        <div class="team-title"><h4>Nikola Arsic</h4><span>CEO</span></div>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4 col-sm-4 bottommargin">

                                <div class="team">
                                    <div class="team-image">
                                        <img src="images/team/dule.jpg" alt="Dusan Mladenovic">
                                    </div>
                                    <div class="team-desc team-desc-bg">
                                        <div class="team-title"><h4>Dusan Mladenovic</h4><span>Founder</span></div>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4 col-sm-4 bottommargin">

                                <div class="team">
                                    <div class="team-image">
                                        <img src="images/team/zeka.jpg" alt="Milos Zecevic">
                                    </div>
                                    <div class="team-desc team-desc-bg">
                                        <div class="team-title"><h4>Milos Zecevic</h4><span>CTO</span></div>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div> -->

                <div class="container clearfix">

                    <div class="col_one_third bottommargin-sm center" style="margin-top: 50px; margin-right: 50px">
                        <img data-animate="fadeInLeft" src="images/services/bincoin.png" alt="Iphone">
                    </div>

                    <div class="col_two_third bottommargin-sm col_last">

                        <div class="heading-block topmargin-sm">
                            <h3>Cryptocurrency related to Binary</h3>
                        </div>

                        <p></p>

                        <p>Recycling your waste earns you our coins which can be exchanged for real money.</p> 

                        <a href="#" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Read more about BINCOIN</a>

                    </div>

                </div>

                
                    
<!-- 
                <div class="section parallax dark nobottommargin" style="background-image: url('images/services/home-testi-bg.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">

                    <div class="heading-block center">
                        <h3>What Clients Say?</h3>
                    </div>

                    <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="{{url('images/testimonials/3.jpg')}}" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                        <div class="testi-meta">
                                            Steve Jobs
                                            <span>Apple Inc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="{{url('images/testimonials/2.jpg')}}" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                        <div class="testi-meta">
                                            Collis Ta'eed
                                            <span>Envato Inc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="{{url('images/testimonials/1.jpg')}}" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                        <div class="testi-meta">
                                            John Doe
                                            <span>XYZ Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> -->

                
                <div class="section">
                    <div class="container clearfix">

                        <div class="row topmargin-sm">

                            <div class="heading-block center">
                                <h3>Meet Our Team</h3>
                            </div>

                            <div class="col-md-4 col-sm-4 bottommargin">

                                <div class="team">
                                    <div class="team-image">
                                        <img src="images/team/arsa.jpg" alt="Nikola Arsic">
                                    </div>
                                    <div class="team-desc team-desc-bg">
                                        <div class="team-title"><h4>Nikola Arsic</h4><span>CEO</span></div>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4 col-sm-4 bottommargin">

                                <div class="team">
                                    <div class="team-image">
                                        <img src="images/team/dule.jpg" alt="Dusan Mladenovic">
                                    </div>
                                    <div class="team-desc team-desc-bg">
                                        <div class="team-title"><h4>Dusan Mladenovic</h4><span>Founder</span></div>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4 col-sm-4 bottommargin">

                                <div class="team">
                                    <div class="team-image">
                                        <img src="images/team/zeka.jpg" alt="Milos Zecevic">
                                    </div>
                                    <div class="team-desc team-desc-bg">
                                        <div class="team-title"><h4>Milos Zecevic</h4><span>CTO</span></div>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="container clearfix">

                    <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">

                        <div class="oc-item"><a href="#"><img src="{{url('images/clients/logo.png')}}" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{url('images/clients/logo1.png')}}" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{url('images/clients/logo.png')}}" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{url('images/clients/logo1.png')}}" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{url('images/clients/logo.png')}}" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{url('images/clients/logo1.png')}}" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{url('images/clients/logo.png')}}" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{url('images/clients/logo1.png')}}" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{url('images/clients/logo.png')}}" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{url('images/clients/logo1.png')}}" alt="Clients"></a></div>

                    </div>


                </div>

            </div>

        </section><!-- #content end -->

        @include('components.front_footer')

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins.js')}}"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="{{url('js/functions.js')}}"></script>

</body>
</html>