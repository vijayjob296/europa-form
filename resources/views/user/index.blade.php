<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from quadnet.in/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 12:17:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{url('user/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{url('user/assets/images/favicon.png')}}" type="image/x-icon">
    <title>QuadNet Poker Network</title>
    <!-- Bootstrap -->
    <link href="{{url('user/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('user/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('user/assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{url('user/assets/css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{url('user/assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{url('user/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('user/assets/css/main.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-roller">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--/Preloader -->

    <!--Header Area-->
    <header class="header-area white-bg">
        <nav class="navbar navbar-expand-lg main-menu">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{url('user/assets/images/logo.png')}}" class="d-inline-block align-top" alt="">
                </a>
            </div>
        </nav>
    </header>
    <!--/Header Area-->

    <!--Hero Area-->
    <section class="hero-area blue-overlay"
        style="background: url('assets/images/banner/3.jpg') no-repeat center center;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="hero-content">
                        <h1>Europa Infotech is India’s biggest network</h1>
                        <p> It comprising of India’s largest gaming operators. The network offers:</p>
                        <ul>
                            <li>White label solution to grow your business </li>
                            <li>An award-winning world-class technology platform across the web and mobile apps</li>
                            <li>Provides the existing player liquidity of more than 10 lakh players– White labels save
                                big by not having to build the initial player pool which is the biggest hurdle for new
                                gaming start-ups</li>
                            <li>A solution to the hurdles a company faces in setting up a successful online gaming
                                business</li>
                        </ul>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="contact-form mb-30">
                        <form method="post" action="{{url('/inquiryRegister')}}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input type="text" placeholder="Name*" name="name" value="{{old('name')}}" required>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input type="email" placeholder="Email*" name="email" value="{{old('email')}}"
                                        required>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input type="number" placeholder="Mobile Number*" name="mobile"
                                        value="{{old('mobile')}}" required>
                                    @error('mobile')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input type="text" placeholder="Company Name*" name="company"
                                        value="{{old('company')}}" required>
                                    @error('company')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input type="text" placeholder="Company Website*" name="website"
                                        value="{{old('website')}}" required>
                                    @error('website')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input type="text" placeholder="Investment Planned*" name="investment"
                                        value="{{old('investment')}}" required>
                                    @error('investment')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-6">
                                    <textarea rows="5" cols="6" placeholder="Details about current Business"
                                        name="detail" required>{{old('detail')}}</textarea>
                                    @error('detail')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <button type="submit" name="btn_submit" value="submit"
                                        class="bttn-mid btn-blue w-100">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Hero Area-->

    <!--Jackpots-->

    <!--Footer Area-->
    <footer class="footer-area blue-bg-2">
        <div class="container">
            <div class="row copyright">
                <div class="col-xl-12 col-sm-12">
                    <div class="copyright-text text-center">
                        <p>Copyright © 2020 Europa Infotech</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/Footer Area-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{url('user/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('user/assets/js/jquery-migrate.js')}}"></script>
    <script src="{{url('user/assets/js/jquery-ui.js')}}"></script>

    <script src="{{url('user/assets/js/popper.js')}}"></script>
    <script src="{{url('user/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('user/assets/js/owl.carousel.min.js')}}"></script>

    <script src="{{url('user/assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{url('user/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('user/assets/js/isotope.pkgd.min.js')}}"></script>

    <script src="{{url('user/assets/js/waypoints.min.js')}}"></script>
    <script src="{{url('user/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('user/assets/js/wow.min.js')}}"></script>
    <script src="{{url('user/assets/js/scrollUp.min.js')}}"></script>

    <script src="{{url('user/assets/js/script.js')}}"></script>
</body>

<!-- Mirrored from quadnet.in/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 12:17:45 GMT -->

</html>