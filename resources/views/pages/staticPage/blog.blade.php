<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Tin tức</title>
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
								<li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<li><a href="{{URL::to('/login')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
		<div class="content">

		</div>	
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
								<li><a style="color: #fdb45e;" href="{{URL::to('/blog')}}">Tin tức</a></li>
								<li><a href="{{URL::to('/contact')}}">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items" >
		<div class="container">
			
			<!--/content blog -->
			<div class="blog">
				<div class="main-content">
					<span class="time">Apr 16</span>
					<h3>Mad Catz ra mắt chuột gaming siêu cool ngầu lấy cảm hứng từ tàu vũ trụ và xe Batman</h3>
					
					<div class="frame">
						<img src="public/frontend/img/chuot.jpg" alt="Img">
					</div>
					<p>
						Về phần thông số kỹ thuật, con chuột này được trang bị mắt đọc quang học Pixart PMW 3389 với
						độ phân giải 16.000 DPI, gia tốc 50G và tần số phản hồi 2.000Hz (thời gian phản hồi 0,5ms).
						Nó có 10 nút có thể lập trình và được trang bị switch Dakota độc quyền mà Mad Catz công bố
						là có độ bền lên đến 60 triệu lượt nhấn. Ngoài ra<span id="dots">...</span><span id="more" style="display: none;"> nó còn được trang bị bộ nhớ trong để bạn đỡ mất công chỉnh lại khi chuyển từ máy này sang máy kia. Mọi khía cạnh về mắt cảm biến, macro nút hoặc tinh chỉnh led đều có thể được điều chỉnh thông qua phần mềm trình điều khiển. <br>
							Trên thị trường hiện nay rất khó để chúng ta có thể tìm được một sản phẩm chuột chơi game có chất lượng với chi phí chưa tới 200K, nhưng với Fuhlen L102 thì điều này hoàn toàn có thể.

							Đây là model giá rẻ nên bạn cũng không thể đòi hỏi ở nó quá nhiều, Fuhlen L102 có thiết kế rất đơn giản và không có quá nhiều chi tiết phức tạp với cấu tạo 3 phím bấm. Sản phẩm có thể kết nối dễ dàng với PC hoặc Laptop qua cổng USB.
						</span>
					</p>
					<a href="" class="comments"><i class="fa fa-comment"></i> 0 Comments</a>
					<button onclick="myFunction()" id="read-more">Read More</button>
					<script>
						function myFunction() {
							var dots = document.getElementById("dots");
							var moreText = document.getElementById("more");
							var btnText = document.getElementById("read-more");

							if (dots.style.display === "none") {
								dots.style.display = "inline";
								btnText.innerHTML = "Read more"; 
								moreText.style.display = "none";
							} else {
								dots.style.display = "none";
								btnText.innerHTML = "Read less"; 
								moreText.style.display = "inline";
							}
						}
					</script>
				</div>
				<div class="list-blog">
					<h5>Tin Nổi Bật</h5>
					<ul class="posts">
						<li>
							<span class="time">June 20</span>
							<p>
								<a href="">Apple chuyển sang chip M1 khiến thị phần Intel có thể giảm mạnh
								vào năm 2022</a> <br>Năm 2020, Apple có công bố là máy Mac của họ sẽ chuyển từ CPU
								Intel sang vi xử lý M1, đầu tiên là MacBook Air, MacBook Pro, và Mac mini.
							</p>
						</li>
						<li>
							<span class="time">June 20</span>
							<p>
								<a href="">Microsoft tung bản cập nhật mới cho Windows 10</a> <br> Windows 10 có
								bản cập nhật mới cho phiên bản 21H1 và 20H2 Insider.
							</p>
						</li>
						<li>
							<span class="time">June 20</span>
							<p>
								<a href="">Rò rỉ hiệu năng của card rời Intel: xấp xỉ Nvidia RTX 3070 Ti và
								AMD RX 6700</a> <br>Với mức hiệu năng xấp xỉ Nvidia RTX 3070 Ti và AMD RX 6700 của
								DG2, có lẽ chúng ta đã quá khinh thường card đồ họa rời của...
							</p>
						</li>
					</ul>
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