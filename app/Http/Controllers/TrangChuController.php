<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiPhong;
use App\LoaiBaiViet;
use App\LienHe;
use App\Slide;
use App\Phong;
use App\AnhPhong;
use App\Tang;
use App\KhachHang;
use App\DatPhong;
use App\ThongTin;
use App\GioiThieu;
use Mail;


class TrangChuController extends Controller
{
	public function __construct()
	{
		$loaiphong=LoaiPhong::all();
    	$loaibaiviet=LoaiBaiViet::all();
        $tang=tang::all();
        $thongtin=thongtin::find(1);
        $gioithieu=gioithieu::find(1);
        $slide=Slide::where('tinhtrang','=','Hiển Thị')->take(5)->get();
        $phong=Phong::orderBy('id','DESC')->take(6)->get();
		view()->share('loaiphong',$loaiphong);
        view()->share('loaibaiviet',$loaibaiviet);
        view()->share('slide',$slide);
        view()->share('phong',$phong);
        view()->share('tang',$tang);
        view()->share('thongtin',$thongtin);
        view()->share('gioithieu',$gioithieu);
	}
    public function viewTrangChu()
    {
    	return view('nguoidung.pages.trangchu');
    }
    public function viewLoaiPhong($id)
    {
        $loaiphong1=loaiphong::find($id);
        $phong1=phong::orderBy('id','DESC')->where('idloaiphong',$id)->get();
        return view('nguoidung.pages.loaiphong',['loaiphong1'=>$loaiphong1,'phong1'=>$phong1]);
    }
    public function viewPhong($id)
    {
        $phong1=phong::find($id);
        $phong2=phong::orderBy('id','DESC')->where('id','!=',$id)->get();
        $anhphong=anhphong::orderBy('id','DESC')->where('idPhong',$id)->get();
        return view('nguoidung.pages.phong',['phong1'=>$phong1,'anhphong'=>$anhphong,'phong2'=>$phong2]);
    }
    public function viewLienHe()
    {
    	return view('nguoidung.pages.lienhe');
    }
    public function viewGioiThieu()
    {
        return view('nguoidung.pages.gioithieu');
    }
    public function themLienHe(Request $request)
    {

        $lienhe = new LienHe;
        $lienhe->ten=$request->ten;
        $lienhe->sdt=$request->sdt;
        $lienhe->email=$request->email;
        $lienhe->loinhan=$request->loinhan;
        $lienhe->check='0';
        $lienhe->save();

        $to_name = "Khách sạn One Night";
        $to_email = $request->email;
        $noidung= $lienhe->loinhan;
        $ten=$lienhe->ten;
        $data = array("name"=>$ten,"body"=>$noidung);             
        Mail::send('nguoidung.sendmail.send_mail',$data,function($message) use ($to_name,$to_email){
        $message->to($to_email)->subject('testmail');
        $message->from($to_email,$to_name);

    });
        return redirect()->route('lienhe')->with('thongbao','Cảm ơn bạn đã liên hệ');
    }
     public function DatPhong(Request $request)
    {
        // $khachhang = new khachhang;
        // $khachhang->ten=$request->ten;
        // $khachhang->cmnd=$request->cmnd;
        // $khachhang->sdt=$request->sdt;
        // $khachhang->email=$request->email;
        // $khachhang->save();
        // $id_khachhang=$khachhang->id;

        // $datphong= new datphong;
        // $datphong->ngaynhanphong=$request->ngaynhanphong;
        // $datphong->ngaytraphong=$request->ngaytraphong;
        // $datphong->soluongphong=$request->soluongphong;
        // $datphong->soluongkhach=$request->soluongkhach; 
        // $datphong->check="1";
        // $datphong->idKhachHang=$id_khachhang;
        // $datphong->idPhong=$request->phong;
        // $datphong->save();
        // return redirect()->route('datphong');
    }
    public function ChangePhong($idphong)
    {
        $phong2=phong::where('id',$idphong)->get();  
        echo "<input type='text' name='giaphong' class='form-control' value='".$phong2->giaphong."'>";
    }

    public function getCheckOut(Request $request){
        $checkout['ten'] = $request->ten;
        return view('nguoidung.pages.datphong',['checkout'=>$checkout]);
    }
    public function getTimKiem(Request $request){
        $datphong = datphong::join('phong','phong.id','datphong.idPhong')
        ->where('datphong.idPhong',$request->id)
        ->whereBetween('datphong.ngaynhanphong',[$request->ngaynhanphong,$request->ngaytraphong])
        ->orWhereBetween('datphong.ngaytraphong',[$request->ngaynhanphong,$request->ngaytraphong])
        ->get();
        $dadat = 0;
        foreach($datphong as $list){
            $dadat = $dadat + $list->soluongphong;
        }
        $phong = phong::find($request->id);
        $chuadat = $phong->soluong - $dadat;
        $date1 = date($request->ngaynhanphong);
        $date2 = date($request->ngaytraphong);
       //current date
                    
        $days = (strtotime($date2) - strtotime($date1)) / (60 * 60 * 24)+1;
        $tonggia = $phong->giaphong*$days;
        return view('nguoidung.pages.timkiem',['chuadat'=>$chuadat,'phong'=>$phong,'ngaynhan'=>$request->ngaynhanphong,'ngaytra'=>$request->ngaytraphong,'tonggia'=>$tonggia]);
    }
}
?>