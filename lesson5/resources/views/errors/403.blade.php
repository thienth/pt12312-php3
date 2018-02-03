<h2>Xin chao, {{$sieuxayda}}
@if(Auth::check())
	{{Auth::user()->name}}
@else
	bạn
@endif
</h2>
<b>Bạn không có quyền truy cập vào đường dẫn này!</b>
<br>
<a href="{{ route('homepage') }}" title="">Quay về trang chủ</a>
<a href="{{ route('logout') }}" title="">Đăng nhập lại</a>