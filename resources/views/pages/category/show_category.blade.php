@extends('welcome')
@section('content')
<div class="features_items"><!--features_items-->
	<h2 class="title text-center">Sản phẩm mới</h2>
	@foreach($category_by_id as $key => $cate)
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="{{URL::to('public/upload/product/'.$cate->product_image)}}" width="241.75" height="241.75" alt="" />
					<h2>{{$cate -> product_price}}</h2>
					<p>{{$cate -> product_name}}</p>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
				</div>
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
					<li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
				</ul>
			</div>
		</div>
	</div>
	@endforeach
</div><!--features_items-->

@endsection