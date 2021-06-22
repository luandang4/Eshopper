<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin login</title>
    <link rel="stylesheet" href="{{asset('public/backend/css/styleindex.css')}}">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  </head>
  <body>

<?php 
      $message = Session::get('message');
      if($message)
      {
        echo $message;
        Session::put('message',null);
      }
      ?>
<form class="box" action="{{URL::to('/admin-dashboard')}}" method="post">
  {{ csrf_field() }}
  <h1>Đăng nhập</h1>
  <input type="text" name="admin_email" placeholder="Tên đăng nhập">
  <input type="password" name="admin_password" placeholder="Mật khẩu">
  <div class="clearfix"></div>
  <input type="submit" name="" value="Đăng nhập" name="login">
</form>



  </body>
</html>
