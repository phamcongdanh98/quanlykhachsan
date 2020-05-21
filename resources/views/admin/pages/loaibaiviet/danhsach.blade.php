@extends('admin.layouts.master')

@section('title')
	Danh sách loại bài viết
@endsection

@section('content')
<div class="card shadow mb-4">
    <div style="padding-top: 20px;margin-left: 8px" class="col-md-3 add">
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus-circle"></i> Thêm loại bài viết</button>
    </div>
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

    <div class="modal fade" id="myModal">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Them Loai Bai Viet</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->

                <div class="modal-body">
                    <form action="{{route('themloaibv')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            
                                <label for="name">Tên loại bài viết</label>
                                <input type="text" name="tenloai" class="form-control">
                            
                        </div>
                        <button type="submit" class="btn btn-success" style="width: 120px;">Thêm</button>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="suaModal">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Sủa loại bài viết</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->

                <div class="modal-body">
                    <form action="{{route('sualoaibv')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="sua-id">
                        <div class="form-group">
                            <label for="name">Ten Loai Bai Viet</label>
                            <input type="text" name="tenloai" class="form-control" id="sua-tenloai">
                        </div>
                        <button type="submit" class="btn btn-success" style="width: 120px;">Sua</button>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Loại</th>
                        <th>Chinh Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loaibaiviet as $lbv)
                    <tr>
                        <td>{{$lbv->id}}</td>
                        <td>{{$lbv->tenloai}}</td>
                        <td>
                            <button class="btn btn-primary sua" data-toggle="modal" data-target="#suaModal" data-id="{{$lbv->id}}" data-tenloai="{{$lbv->tenloai}}"><i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger xoa" data-id="{{$lbv->id}}"><i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<style type="text/css">
    .card-body th {
        text-align: center;
    }
    
    .card-body td {
        text-align: center;
    }
    
    .alert-danger {
        margin-left: 20px;
        margin-top: 12px;
        margin-right: 20px;
    }

    .alert-success{
        margin-left: 20px;
        margin-top: 12px;
        margin-right: 20px;
    }
    
    .alert {
        margin-bottom: 0;
    }
</style>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$(".sua").click(function(){
			id = $(this).data('id');
			tenloai = $(this).data('tenloai');
			$('#sua-id').val(id);
			$('#sua-tenloai').val(tenloai);
		})
	})
	
	$(".xoa").click(function(){
		id = $(this).data('id');
		if (confirm("Dữ liệu xoá sẽ không khôi phục được. Bạn có thật sự muốn xoá?")) {
			$.post('{{route('xoaloaibv')}}',{id:id,_token:"{{csrf_token()}}"}).done(function(){
				location.reload();
			}).fail(function(){
				alert('Không thể hoàn thành thao tác này');
			})
		}
	})
</script>
@endsection

