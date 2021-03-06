@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Liệt kê sản phẩm
    </div>
    
    <div class="table-responsive">
        <?php 
        $message = Session::get('message');
        if($message)
        {
            echo $message;
            Session::put('message',null);
        }
        ?>
        <table class="table table-striped b-t b-light">
            <thead>
                <tr>
                    <th style="width:20px;">
                    </th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Danh mục</th>
                    <th>Thương hiệu</th>
                    <th>Hiển thị</th>
                    <th style="width:30px;"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($all_product as $key => $pro)
                <tr>
                    <td><label class="i-checks m-b-none"><i></i></label></td>
                    <td>{{$pro -> product_name}}</td>
                    <td>{{$pro -> product_price}}</td>
                    <td><img src="public/upload/product/{{$pro -> product_image}}" width="100" height="100"></td>
                    <td>{{$pro -> category_name}}</td>
                    <td>{{$pro -> brand_name}}</td>
                    <td><span class="text-ellipsis">
                        <?php
                        if($pro -> product_status == 0){
                            ?> 
                            <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-thum-style fa fa-toggle-off" style="font-size:20px;"></span></a>
                            <?php
                        }else{
                            ?>
                            <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-thum-style fa fa-toggle-on" style="font-size:20px;"></span></a>
                            <?php
                        }
                        ?>
                    </span></td>

                    <td>
                      <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="" style="font-size:20px;">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                    </a>
                      <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="" style="font-size:20px;">
                        <i class="fa fa-times text-danger text"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<footer class="panel-footer">
    <div class="row">
        <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
</div>
</div>
@endsection