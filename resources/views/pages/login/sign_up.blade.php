<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | The Light</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->       
    <link rel="shortcut icon" href="{{('public/frontend/img/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{('public/frontend/img/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{('public/frontend/img/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{('public/frontend/img/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{('public/frontend/img/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +84 399 715 678</a></li>
                                <li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new"><i class="fa fa-envelope"></i> thelightshop@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/trang-chu')}}"><img src="public/frontend/img/your-logo.png" width="139px" height="39px" alt="" /></a>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
        
    </header><!--/header-->

        <section id="form" style="margin-top: 50px;"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div style="padding-left: 300px; width: 800px;"  class="signup-form"><!--sign up form-->
                        <h2>T???o t??i kho???n</h2>
                        <form action="#">
                            <input type="text" placeholder="T??n ????ng nh???p"/>
                            <input type="email" placeholder="?????a ch??? email"/>
                            <input type="text" placeholder="S??? ??i???n tho???i"/>
                            <input type="password" placeholder="M???t kh???u"/>
                            <input type="password" placeholder="Nh???p l???i m???t kh???u"/>
                            <button type="submit" class="btn btn-default">T???o t??i kho???n</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>The</span>-Light</h2>
                            <p>T??? tin mang ?????n cho qu?? kh??ch tr???i nghi???m v?? s??? ph???c v??? t???t nh???t. ?????m b???o ch???t l?????ng, m???u m?? ??ang d???ng, gi?? c??? ph?? h???p</p>
                        </div>
                    </div>
                   
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>D???CH V???</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">H??? Tr??? Tr???c Tuy???n</a></li>
                                <li><a href="">Li??n H??? V???i Ch??ng T??i</a></li>
                                <li><a href="">T??nh Tr???ng ?????t H??ng</a></li>
                                <li><a href="">Thay ?????i ?????a ??i???m</a></li>
                                <li><a href="">FAQ???s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quick Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">M??y T??nh X??ch Tay</a></li>
                                <li><a href="">Linh Ki???n M??y T??nh</a></li>
                                <li><a href="">Card ????? H???a</a></li>
                                <li><a href="">Thi???t B??? M???ng</a></li>
                                <li><a href="">Thi???t B??? Ngo???i Vi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Ch??nh S??ch</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">??i???u Kho???n</a></li>
                                <li><a href="">Ch??nh S??ch B???o M???t</a></li>
                                <li><a href="">Ch??nh S??ch Ho??n Ti???n</a></li>
                                <li><a href="">H??? Th???ng Thanh To??n</a></li>
                                <li><a href="">H??? th???ng v??</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>C??ng Ty</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Th??ng Tin C??ng Ty</a></li>
                                <li><a href="">Ch???c V???</a></li>
                                <li><a href="">?????a Ch??? C??ng Ty</a></li>
                                <li><a href="">Ch????ng Tr??nh Li??n K???t</a></li>
                                <li><a href="">B???n Quy???n</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Gi???i Thi???u V??? The Light</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="?????a ch??? email c???a b???n..." />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright ?? 2021 The-Light Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="https://www.facebook.com/dangvanluan1402/">LuanDang</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->



    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>