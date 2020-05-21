@extends('nguoidung.layouts.master')

@section('content')
 <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Danh sách phòng</h2>
          </div>
          <table class="table" style="width: 60%; margin: 0 auto;">
          <tbody>
            <tr>
              <td><p><strong>Ten:</strong><span>{{$checkout->ten}}</span></p></td>
            </tr>
            <tr>
              <td><p><strong>Nơi Đi:</strong><span>&nbspdanh</span></p></td>
            </tr>
            <tr>
              <td><p><strong>Nơi Đến:</strong><span>&nbspdanh</span></p></td>
            </tr>
            <tr>
              <td><p><strong>Giờ Đi:</strong><span>&nbspdanh</span></p></td>
            </tr>
            <tr>
              <td><p><strong>Giờ Đến:</strong><span>&nbspdanh</span></p></td>
            </tr>
            <tr>
              <td><p><strong>Số Ghế:</strong><span>&nbspdanh</span></p></td>
            </tr>
            <tr>
              <td><p><strong>Tên Khách Hàng:</strong><span>&nbspdanh</span></p></td>
            </tr>
            <tr>
              <td>
                <div class="form-datve">
                  <form id="form-datve" action="#" method="post">
                    @csrf
                    <input type="hidden" name="soghe" >
                    <input type="hidden" name="idChuyen" >
                    <button type="submit" class="button-submit">Đặt Vé</button>
                  </form>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>

<style type="text/css">
</style>
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

@section('script')

@endsection