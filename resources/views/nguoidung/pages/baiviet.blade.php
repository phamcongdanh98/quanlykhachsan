@extends('nguoidung.layouts.master')

@section('content')
<div class="site-section ">
    <div class="container">
        <div class="row" style="display: block;">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h3 class="mb-5" style="text-transform: uppercase;">{{$baiviet->tieude}}</h2>

            </div>
            <span class="time-up">Ngày đăng: {{date('d-m-yy G:i',strtotime($baiviet->created_at)+7*60*60)}}</span>
            <p class="time-up"><i class="fas fa-eye"></i> Lượt xem: {{$baiviet->luotxem}}</p>
        </div>
    </div>
    </div>
</div>

@endsection

@section('slide')
    <div class="site-blocks-cover overlay" style="background-image: url(trangchu_asset/images/anh2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <span class="caption mb-3">Suites Hotel &amp; Resort</span>
              <h1 class="mb-4">About Us</h1>
            </div>
          </div>
        </div>
      </div>  
@endsection