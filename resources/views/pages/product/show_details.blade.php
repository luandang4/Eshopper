@extends('welcome')
@section('content')
@foreach($product_details as $key => $value)
<div class="product-details"><!--product-details-->
	<div class="col-sm-5">
		<div class="view-product">
			<img src="{{URL::to('/public/upload/product/'.$value->product_image)}}" alt="" />
			<h3>ZOOM</h3>
		</div>
		<div id="similar-product" class="carousel slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<a href=""><img src="#" alt=""></a>
				<a href=""><img src="#" alt=""></a>
			</div>
			<div class="item">
				<a href=""><img src="#" alt=""></a>
				<a href=""><img src="#" alt=""></a>
				<a href=""><img src="#" alt=""></a>
			</div>
			<div class="item active">
				<a href=""><img src="#" alt=""></a>
				<a href=""><img src="#" alt=""></a>
				<a href=""><img src="#" alt=""></a>
			</div>
			<div class="item">
				<a href=""><img src="{{URL::to('/public/frontend/img/')}}" alt=""></a>

			</div>

			<!-- Controls -->
			<a class="left item-control" href="#similar-product" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="right item-control" href="#similar-product" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>

	</div>
	<div class="col-sm-7">
		<div class="product-information"><!--/product-information-->
			<img src="images/product-details/new.jpg" class="newarrival" alt="" />
			<h2>{{$value -> product_name}}</h2>
			<p>Mã SP: {{$value->product_id}}</p>
			<img src="images/product-details/rating.png" alt="" />

			<form action="{{URL::to('/save-cart')}}" method="post">
				{{csrf_field()}}
			<span>
				<span>{{number_format($value->product_price)}} đ</span>
				<label>Số lượng:</label>
				<input name="qty" type="number" min="1" value="1" />
				<input name="productid_hidden" type="hidden" value="{{$value->product_id}}" />
				<button type="submit" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>
					Thêm vào giỏ hàng
				</button>
			</span>
			</form>

			<p><b>Tình trạng:</b> Còn hàng</p>
			<p><b>Tình trạng:</b> Mới</p>
			<p><b>Thương hiệu:</b> {{$value->brand_name}}</p>
			<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
		</div><!--/product-information-->
	</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			<li  class="active"><a href="#details" data-toggle="tab">Chi tiết sản phẩm</a></li>
			<li  ><a href="#details" data-toggle="tab">Mô tả sản phẩm</a></li>
			<li><a href="#reviews" data-toggle="tab">Đánh giá (5)</a></li>
		</ul>
	</div>
	<div class="tab-content">
		<div class="tab-pane fade active in" id="details" >
			<p>{!!$value->product_desc!!}</p>
		</div>

		<div class="tab-pane fade" id="tag" >
			<p>{!!$value->product_content!!}</p>
		</div>

		<div class="tab-pane fade " id="reviews" >
			<div class="col-sm-12">
				<ul>
					<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
					<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
					<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
				</ul>
				<p></p>
				<p><b>Đánh giá của bạn</b></p>

				<form action="#">
					<textarea name="" ></textarea>
					<button type="button" class="btn btn-default pull-right">
						Gửi
					</button>
				</form>
			</div>
		</div>

	</div>
</div><!--/category-tab-->
@endforeach
<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">Sản phẩm tương tự</h2>
	
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">	
				@foreach($related as $key => $related_product)
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{URL::to('/public/upload/product/'.$related_product->product_image)}}" alt="" />
								<h2>{{number_format($related_product->product_price)}} đ</h2>
								<p>{{$related_product -> product_name}}</p>
								<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>

			
		</div>
		<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>			
	</div>
</div><!--/recommended_items-->
@endsection