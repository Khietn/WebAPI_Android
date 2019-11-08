@extends('layouts/master')
@section('title')
Quản Lý Cấu Hình Trợ Giúp
@endsection
@section('head')
@parent
@endsection

@section('main-content')
<!-- table start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="responsive-table-plugin">
                    <div class="table-rep-plugin">
                        <div class="table-responsive" data-pattern="priority-columns">
                            @if(session('success'))
                            <script>
                                alert('{{session("success")}}')
                            </script>
                            @endif
                            <button type="button" class="btn btn-outline-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal-them">Thêm mới</button>
                            <table id="tech-companies-1" class="table table-striped" border="2">
                                <thead>
                                    <tr>
                                        <th data-priority="1">ID</th>
                                        <th data-priority="1">Loại Trợ Giúp</th>
                                        <th data-priority="1">Thứ Tự</th>
                                        <th data-priority="1">Credit</th>
                                        <th></th>
                                    </tr>`
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($ch as $cauHinh)
                                        <td>{{$cauHinh->id}}</td>
                                        <td>{{$cauHinh->loai_tro_giup}}</td>
                                        <td>{{$cauHinh->thu_tu}}</td>
                                        <td>{{$cauHinh->credit}}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal-sua">Sửa</button>
                                            <form action="{{route('cauhinh-trogiup.capnhat-xoa',['id'=>$cauHinh->id])}}" method="POST" id="formTrangThai" style="display:inline-flex;">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="hiddenXoa" value="{{$cauHinh->xoa}}">
                                                <button type="submit" class="btn btn-outline-danger waves-effect waves-light" form="formTrangThai">
                                                    @if($cauHinh->xoa==0)
                                                    Xóa
                                                    @else
                                                    Khôi phục
                                                    @endif
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                <form action="{{route('cauhinh-trogiup.cap-nhat',['id'=>$cauHinh->id])}}" method="POST" id="formCapNhat">
                                    @csrf
                                    @method('PUT')
                                    <div id="con-close-modal-sua" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Cấu hình trợ giúp</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputEmail3" class="col-3 col-form-label">Loại trợ giúp</label>
                                                                            <div class="col-9">
                                                                                <input class="form-control" id="example-textarea" name="loai_tro_giup" type="number" placeholder="Nhập số cơ hội..." value="{{$cauHinh->loai_tro_giup}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputEmail3" class="col-3 col-form-label">Thứ tự</label>
                                                                            <div class="col-9">
                                                                                <input class="form-control" id="example-textarea" name="thu_tu" placeholder="Nhập số giây" type="number" value="{{$cauHinh->thu_tu}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputEmail3" class="col-3 col-form-label">Credit</label>
                                                                            <div class="col-9">
                                                                                <input class="form-control" id="example-textarea" name="credit" placeholder="Nhập số giây" type="number" value="{{$cauHinh->credit}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-info waves-effect waves-light" form="formCapNhat">Cập nhật</button>
                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Hủy</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                                <!-- <button class="btn btn-dark waves-effect waves-light" style="margin-bottom:20px"><a href="{{route('linh-vuc.them-moi')}}">Thêm</a></button> -->
                                <!-- btn tim kiem -->
                                <ul class="list-unstyled topnav-menu float-right mb-0">
                                    <li class="d-none d-sm-block">
                                        <form class="app-search">
                                            <div class="app-search-box">
                                                <div class="input-group" style="margin-bottom:20px">
                                                    <input type="text" class="form-control" placeholder="Search..." style="margin-left:5px">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-dark" type="submit" style="margin-left:5px">
                                                            <i class="fe-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                                <!-- ket thuc tim kiem -->

                            </table>
                        </div> <!-- end .table-responsive -->

                    </div> <!-- end .table-rep-plugin-->
                </div> <!-- end .responsive-table-plugin-->
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
</div>
<!-- end table -->
<!-- form them -->
<form action="{{route('cauhinh-trogiup.them')}}" method="POST" id="formThem">
    @csrf
    <div id="con-close-modal-them" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cấu hình trợ giúp</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group row mb-3">
                                            <label for="inputEmail3" class="col-3 col-form-label">Loại trợ giúp</label>
                                            <div class="col-9">
                                                <input class="form-control" id="example-textarea" name="loai_tro_giup" type="number" placeholder="Nhập số cơ hội...">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="inputEmail3" class="col-3 col-form-label">Thứ tự</label>
                                            <div class="col-9">
                                                <input class="form-control" id="example-textarea" name="thu_tu" placeholder="Nhập số giây" type="number">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="inputEmail3" class="col-3 col-form-label">Credit</label>
                                            <div class="col-9">
                                                <input class="form-control" id="example-textarea" name="credit" placeholder="Nhập số giây" type="number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info waves-effect waves-light" form="formThem">Thêm mới</button>
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Hủy</button>
                </div>

            </div>
        </div>
    </div>
</form>
<!-- end form them -->
@endsection
@section('footer')
@parent
@endsection