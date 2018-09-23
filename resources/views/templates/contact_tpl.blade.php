@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
   
?>
<main class="index">
    <section class="about">
        <div class="vk-breadcrumb">
            <div class="container">
                <div class="col-md-12">
                    <ul class="vk-breadcrumb__list">
                        <li><a href="{{ url('') }}">Trang chủ / </a></li>
                        <!-- <li><a href="doc.html">Sửa tivi / </a></li> -->
                        <li class="active">Liên hệ </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <h2 class="s18 text-center text-uppercase t2 contact-tit">Gửi liên hệ</h2>

                     <form action="{{ route('postContact') }}" method="post" class="contact-frm">
                        {{csrf_field()}}
                        <input class="w-100" type="text" placeholder="Họ tên" name="name" required="required">
                        <input class="w-100" type="email" placeholder="Email" name="email">
                        <input class="w-100" type="tel" placeholder="Số điện thoại" name="phone" required="required">
                        <input class="w-100" type="tel" placeholder="Địa chỉ" name="address">
                        <textarea rows="5" class="w-100" name="content" required placeholder="Nội dung"></textarea>

                        <p class="text-center">
                            <button class="btn s14 text-uppercase contact-btn">Gửi</button>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </section>
</main>
@endsection
