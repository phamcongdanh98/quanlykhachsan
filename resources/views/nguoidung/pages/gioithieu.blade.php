@extends('nguoidung.layouts.master')

@section('content')
<div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                  <img src="trangchu_asset/images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>

              <img src="trangchu_asset/images/img_1.jpg" alt="Image" class="img-fluid image-absolute">
            
          </div>
          <div class="col-md-5 ml-auto">          
            <div class="section-heading text-left">
              <h2 class="mb-5">Thông tin</h2>
            </div>
            <p class="mb-4">{{$gioithieu->tomtat}}</p>
            <p><a href="{{$gioithieu->linkvideo}}" class="popup-vimeo text-uppercase">Xem Video<span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Hotel Staffs</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-4 thumbnail"><img src="images/danh1.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4">
                <h3 class="heading mb-3"><a href="#">Angella Lopez</a></h3>
                <p>Nha sang lap</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-4 thumbnail"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4">
              <h3 class="heading mb-3"><a href="#">Marina Stalks</a></h3>
              <p>Nha sang lap</p>
              
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-4 thumbnail"><img src="images/person_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4">
              <h3 class="heading mb-3"><a href="#">Ethan Hoover</a></h3>
              <p>Nha sang lap</p>
              
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-4 thumbnail"><img src="images/person_4.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4">
              <h3 class="heading mb-3"><a href="#">Megan Pearson</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
              <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-4 thumbnail"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4">
              <h3 class="heading mb-3"><a href="#">Cristine Smith</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
              <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-4 thumbnail"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4">
              <h3 class="heading mb-3"><a href="#">Marina Stalks</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
              <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
          

        </div>
      </div>
    </div>


    <div class="site-section border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Gallery</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-lg-3">
            <a href="trangchu_asset/images/img_1.jpg" class="image-popup img-opacity"><img src="trangchu_asset/images/img_1.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="trangchu_asset/images/img_2.jpg" class="image-popup img-opacity"><img src="trangchu_asset/images/img_2.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="trangchu_asset/images/img_3.jpg" class="image-popup img-opacity"><img src="trangchu_asset/images/img_3.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="trangchu_asset/images/img_4.jpg" class="image-popup img-opacity"><img src="trangchu_asset/images/img_4.jpg" alt="Image" class="img-fluid"></a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="trangchu_asset/images/img_4.jpg" class="image-popup img-opacity"><img src="trangchu_asset/images/img_4.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="trangchu_asset/images/img_5.jpg" class="image-popup img-opacity"><img src="trangchu_asset/images/img_5.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="trangchu_asset/images/img_6.jpg" class="image-popup img-opacity"><img src="trangchu_asset/images/img_6.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="trangchu_asset/images/img_7.jpg" class="image-popup img-opacity"><img src="trangchu_asset/images/img_7.jpg" alt="Image" class="img-fluid"></a>
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