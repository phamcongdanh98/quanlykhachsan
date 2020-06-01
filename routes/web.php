<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.pages.trangchu');
});


Route::group(['prefix' =>'admin'],function(){
	Route::group(['prefix'=>'loaibaiviet'],function(){
		Route::get('danhsach','LoaiBaiVietController@getDanhsach')->name('loaibaiviet');
		Route::post('them','LoaiBaiVietController@postThem')->name('themloaibv');
		Route::post('xoa','LoaiBaiVietController@postXoa')->name('xoaloaibv');
		Route::post('sua','LoaiBaiVietController@postSua')->name('sualoaibv');

	});
	Route::group(['prefix'=>'baiviet'],function(){
		Route::get('danhsach','BaiVietController@getDanhsach')->name('baiviet');
		Route::post('them','BaiVietController@postThem')->name('thembaiviet');
		Route::post('xoa','BaiVietController@postXoa')->name('xoabaiviet');
		Route::post('sua','BaiVietController@postSua')->name('suabaiviet');
		Route::get('ajax','BaiVietController@getAjax')->name('ajaxBaiViet');

	});

	Route::group(['prefix'=>'tang'],function(){
		Route::get('danhsach','TangController@getDanhsach')->name('tang');
		Route::post('them','TangController@postThem')->name('themtang');
		Route::post('xoa','TangController@postXoa')->name('xoatang');
		Route::post('sua','TangController@postSua')->name('suatang');

	});

	Route::group(['prefix'=>'loaiphong'],function(){
		Route::get('danhsach','LoaiPhongController@getDanhsach')->name('loaiphong');
		Route::post('them','LoaiPhongController@postThem')->name('themloaiphong');
		Route::post('xoa','LoaiPhongController@postXoa')->name('xoaloaiphong');
		Route::post('sua','LoaiPhongController@postSua')->name('sualoaiphong');

	});

	Route::group(['prefix'=>'phong'],function(){
		Route::get('danhsach','PhongController@getDanhsach')->name('phong');
		Route::post('them','PhongController@postThem')->name('themphong');
		Route::post('xoa','PhongController@postXoa')->name('xoaphong');
		Route::post('sua','PhongController@postSua')->name('suaphong');

	});
	Route::group(['prefix'=>'slide'],function(){
		Route::get('danhsach','SlideController@getDanhsach')->name('slide');
		Route::post('them','SlideController@postThem')->name('themslide');
		Route::post('xoa','SlideController@postXoa')->name('xoaslide');
		Route::post('sua','SlideController@postSua')->name('suaslide');
		Route::post('tinhtrang','SlideController@TinhTrangSlide')->name('tinhtrangslide');
	});
	Route::group(['prefix'=>'thongtinkhachsan'],function(){
		Route::get('thongtin','ThongTinController@getThongTin')->name('thongtin');
		Route::post('suathongtin','ThongTinController@suaThongTin')->name('suathongtin');
		Route::get('gioithieu','GioiThieuController@getGioiThieu')->name('gioithieu');
		Route::post('suagioithieu','GioiThieuController@suagioithieu')->name('suagioithieu');
	});
	Route::group(['prefix'=>'anhkhachsan'],function(){
		Route::get('danhsach','AnhKhachSanController@getDanhsach')->name('anhkhachsan');
		Route::post('them','AnhKhachSanController@postThem')->name('themanhks');
		Route::post('xoa','AnhKhachSanController@postXoa')->name('xoaanhks');
		Route::post('sua','AnhKhachSanController@postSua')->name('suaanhks');
		Route::post('tinhtrang','AnhKhachSanController@TinhTrangAnhKS')->name('tinhtranganhks');
	});

});

Route::group(['prefix'=>'nguoidung'],function(){
	Route::get('trangchu','TrangChuController@viewTrangChu')->name('trangchu');
	Route::get('loaiphong/{id}','TrangChuController@viewLoaiPhong')->name('viewloaiphong');
	Route::get('phong/{id}','TrangChuController@viewPhong')->name('viewphong');
	Route::get('loaibaiviet/{tenloai}','TrangChuController@viewLoaiBaiViet')->name('viewloaibaiviet');
	Route::get('baiviet/{tieude}','TrangChuController@viewBaiViet')->name('viewbaiviet');
	//Route::get('datphong','TrangChuController@getCheckOut')->name('datphong');
	Route::get('lienhe','TrangChuController@viewLienHe')->name('viewlienhe');
	Route::get('gioithieu','TrangChuController@viewGioiThieu')->name('viewgioithieu');
	Route::get('themlienhe','TrangChuController@themLienHe')->name('themlienhe');
	Route::get('send_mail','TrangChuController@send_mail');
	Route::get('ajaxphong/{idphong}','TrangChuController@ChangePhong');
	Route::post('checkout','TrangChuController@getCheckOut')->name('checkout');
	Route::get('timkiem','TrangChuController@getTimKiem')->name('timkiem');
	Route::post('success','TrangChuController@DatPhong')->name('success');
	//Route::post('thanhcong','TrangChuController@DatPhong')->name('thanhcong');
});
