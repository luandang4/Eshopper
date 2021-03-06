<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Giỏ hàng</title>
    <link href="{{('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{('public/frontend/css/responsive.css')}}" rel="stylesheet">
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
<script type="text/javascript">
	function cong(){
		var t = document.getElementById("textbox").value;
		document.getElementById("textbox").value = parseInt(t) + 1;
	}

	function tru(){
		var t = document.getElementById("textbox").value;
		if(parseInt(t) > 1){
			document.getElementById("textbox").value = parseInt(t) - 1;	
		}
		
	}
</script>
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
        
    </header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
				  <li><a href="{{URL::to('/show-cart')}}">Giỏ hàng</a></li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php 
				$content =  Cart::content();


				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description"></td>
							<td class="price">Đơn giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Số tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $v_value)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('public/upload/product/'.$v_value-> options-> image)}}" width="50" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_value -> name}}</a></h4>
								<p>{{$v_value -> id}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($v_value -> price).' đ'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input type="button" class="cart_quantity_down" onclick="tru()" value="-">
									<input type="text" id="textbox" name="quantity" value="{{$v_value -> qty}}" autocomplete="on" size="1">
									<input type="button" class="cart_quantity_down" onclick="cong()" value="+">
								</div>
							</td>
							
							<td class="cart_total">
								<p class="cart_total_price">
									<?php 
									$subtotal = $v_value -> price * $v_value->qty;
									echo number_format($subtotal).' đ';
									?>
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_value->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6" style="width: 100%;">
					<div class="total_area">
						<ul >
							<li>Tổng tiền <span>{{Cart::subtotal()}} đ</span></li>
							<li>Phí vẫn chuyển <span>Free</span></li>
							<li>Thành tiền <span>{{Cart::subtotal()}} đ</span></li>
						</ul>
							<a class="btn btn-default update" href="">Cập nhật</a>
							<a class="btn btn-default check_out" href="">Thanh toán</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

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