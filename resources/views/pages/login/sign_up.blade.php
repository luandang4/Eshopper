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
                        <h2>Tạo tài khoản</h2>
                        <form action="#">
                            <input type="text" placeholder="Tên đăng nhập"/>
                            <input type="email" placeholder="Địa chỉ email"/>
                            <input type="text" placeholder="Số điện thoại"/>
                            <input type="password" placeholder="Mật khẩu"/>
                            <input type="password" placeholder="Nhập lại mật khẩu"/>
                            <button type="submit" class="btn btn-default">Tạo tài khoản</button>
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
                            <p>Tự tin mang đến cho quý khách trải nghiệm và sự phục vụ tốt nhất. Đảm bảo chất lượng, mẫu mã đang dạng, giá cả phù hợp</p>
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
                            <h2>DỊCH VỤ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Hỗ Trợ Trực Tuyến</a></li>
                                <li><a href="">Liên Hệ Với Chúng Tôi</a></li>
                                <li><a href="">Tình Trạng Đặt Hàng</a></li>
                                <li><a href="">Thay Đổi Địa Điểm</a></li>
                                <li><a href="">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quick Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Máy Tính Xách Tay</a></li>
                                <li><a href="">Linh Kiện Máy Tính</a></li>
                                <li><a href="">Card Đồ Họa</a></li>
                                <li><a href="">Thiết Bị Mạng</a></li>
                                <li><a href="">Thiết Bị Ngoại Vi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Chính Sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Điều Khoản</a></li>
                                <li><a href="">Chính Sách Bảo Mật</a></li>
                                <li><a href="">Chính Sách Hoàn Tiền</a></li>
                                <li><a href="">Hệ Thống Thanh Toán</a></li>
                                <li><a href="">Hệ thống vé</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Công Ty</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Thông Tin Công Ty</a></li>
                                <li><a href="">Chức Vụ</a></li>
                                <li><a href="">Địa Chỉ Công Ty</a></li>
                                <li><a href="">Chương Trình Liên Kết</a></li>
                                <li><a href="">Bản Quyền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Giới Thiệu Về The Light</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Địa chỉ email của bạn..." />
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
                    <p class="pull-left">Copyright © 2021 The-Light Inc. All rights reserved.</p>
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