<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Liên hệ</title>
	<link href="{{('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
	<link href="{{('public/frontend/css/price-range.css')}}" rel="stylesheet">
	<link href="{{('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{('public/frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="{{('public/frontend/css/style.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->
	<link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
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
								<li><a href="#"><i class="fa fa-envelope"></i> thelightshop@gmail.com.com</a></li>
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
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Tài khoản</a></li>
								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<li><a href="{{URL::to('/login')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a style="color: #696763;" href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    
                                </li>  
                                <li><a href="{{URL::to('/blog')}}">Tin tức</a></li>
                                <li ><a style="color: #fdb45e;" href="{{URL::to('/contact')}}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->

	</header><!--/header-->

	<section id="cart_items">
		<div class="container">

			<div class="content">
				<div class="main">
					<div class="tieude">
						<table>
							<tr>
								<td><h1>Công Ty</h1></td>
								<td><h1 class="info">Liên hệ</h1></td>
							</tr>
						</table>
					</div>
					<div class="infomation">
						<p><b>Tên công ty:</b> The Light</p>
						<p><b>Địa chỉ 1:</b> 130 Hàm Nghi - Đà Nẵng</p>
						<p><b>Địa chỉ 2:</b> 235 Xô-Viết Nghệ Tĩnh - Đà Nẵng</p>
						<p><b>Email:</b> thelightshop@gmai.com</p>
						<p><b>Điện thoại:</b> 0399 715 678</p>
					</div>
					<div class="input">
						<div class="col-md">
							<div class="form-group">
								<label>Họ tên</label><br>
								<input type="text" name="">
							</div>
							<div class="form-group">
								<label>Điện thoại</label><br>
								<input type="text" name="">
							</div>
							<div class="form-group">
								<label>Nội dung</label><br>
								<textarea rows="5" style="width: 536px;"></textarea>
							</div>
						</div>
						<div class="email">
							<label>Email</label><br>
							<input type="text" name="">
						</div>
						<button type="submit">Gửi</button>
					</div>
					<h1 class="fan">Fanpage</h1>
					<div class="fanpage">
						<div id="fb-root"></div>
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="hdrOOMgj"></script>
						<div class="fb-page" data-href="https://www.facebook.com/Duy.Tan.University" data-tabs="timeline" data-width="500px" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Duy.Tan.University" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Duy.Tan.University">Duy Tan University</a></blockquote></div>
					</div>
					<h1>Bản đồ</h1>
					<div class="map">
						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.084105323799!2d108.20863571480773!3d16.061124788885948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b419a87a59%3A0x3165407831b46a5c!2sMEGA%20Technology!5e0!3m2!1svi!2s!4v1624536447562!5m2!1svi!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				
			</div>

		</div>

	</section>

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


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/main.js"></script>
</body>
</html>