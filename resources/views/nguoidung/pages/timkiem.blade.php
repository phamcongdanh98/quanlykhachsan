@extends('nguoidung.layouts.master')

@section('content')

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
       <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Thông tin tìm kiếm</h2>
          </div>
          <div class="col-md-12 col-lg-8 mb-5">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err) {{$err}}
                <br> @endforeach
            </div>
            @endif @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
          
            
          
            <form action="#" method="POST" enctype="multipart/form-data" id="datphong_form">
                        @csrf
                        
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="name">Họ tên: </label> <span class="error_form" id="loi_ten_thongbao"></span>
                                <input type="text" name="ten" class="form-control" id="ten_form">
                            </div>
                        </div>
                        <div style="display: flex;" class="form-group">
                            <div class="col-md-6">
                                <label for="name">Email</label> <span class="error_form" id="loi_email_thongbao"></span>
                                <input type="email" name="email" class="form-control" id="email_form">
                            </div>
                           <div class="col-md-6">
                                <label for="name">Số cmnd: </label> <span class="error_form" id="loi_cmnd_thongbao"></span>
                                <input type="text" name="cmnd" class="form-control" id="cmnd_form">
                            </div>
                        </div>

                        <div style="display: flex;" class="form-group">                         
                            <div class="col-md-6">
                               <label for="name">Số điện thoại: </label> <span class="error_form" id="loi_sdt_thongbao"></span>
                                <input type="text" name="sdt" class="form-control" id="sdt_form">
                             </div>
                             
                        </div>
                         <div style="display: flex;" class="form-group">
                            <div class="col-md-6">
                                <label for="name">Số lượng phòng</label>
                                <input type="number" min="1" name="soluongphong" max="{{$chuadat}}" class="form-control" id="soluongphong" value="1">
                            </div>
                             <div class="col-md-6">
                                <label for="name">Số lượng khách</label>
                                <input type="text" name="soluongkhach" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                          <div id="thuthoi">
                            </div>
                            <button type="submit" class="btn btn-success" style="width: 120px;">Thêm</button>
                        </div>
                    </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Thông tin phòng</h3>
              <p class="mb-0 font-weight-bold">Loại phòng<p class="mb-4">{{$phong->tenphong}}</p></p>

              <p class="mb-0 font-weight-bold">Ngày nhận phòng</p>
              <p class="mb-4"><a href="#">{{$ngaynhan}}</a></p>

              <p class="mb-0 font-weight-bold">Ngày trả phòng</p>
              <p class="mb-0"><a href="#">{{$ngaytra}}</a></p>

              <p class="mb-0 font-weight-bold">Sớ lượng phòng trống</p>
              <p class="mb-4"><a href="#">{{$chuadat}}</a></p>

              <p class="mb-0 font-weight-bold">Giá Phòng</p>
              <p class="mb-0"><a >{{$phong->giaphong}}/ ngày</a></p>

              <p class="mb-0 font-weight-bold">Tổng thanh toán</p>
              <p class="mb-0"><a href="#" id="tonggia">{{$tonggia}} VND</a></p>

            </div>
            
            
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

@section('script')
<script type="text/javascript">
  $('#soluongphong').change(function(){
    soluong = $(this).val();
    gia = {{$tonggia}};
    $('#tonggia').text(soluong*gia + ' VND');
  });
</script>
@endsection