

<!-- @if($exception->getMessage())
   @section('message', $exception->getMessage())
@else
   @section('message', __('Không tìm thấy trang này'))
@endif -->
@extends('templates.clients.frontend')
@section('content')
<section class="gray">
    <div class="container">

            
        <div class="content-erro-404">
        <div class="text-center box-erro-404">
            <img src="https://static.tastykitchen.vn/images/icon-404.png" class="img">
            <h4 class="text">Xin lỗi, chúng tôi không tìm thấy nội dung này</h4>
            <a href="/" class="btn btn-warning" title="QUAY LẠI TRANG CHỦ">QUAY LẠI TRANG CHỦ</a>
    </div>
            
        </div>
    </div>
</section>

@stop