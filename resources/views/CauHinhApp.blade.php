@extends('layouts/master')
@section('title')
Quản Lý Cấu Hình App
@endsection
@section('head')
@parent
@endsection
<style>
    input[type='number'] {
        -moz-appearance: textfield;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }
</style>
@section('main-content')
<!-- table start -->
@if(session('success'))
<script>
    alert('{{session("success")}}')
</script>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="responsive-table-plugin">
                    <div class="table-rep-plugin">
                        <div class="table-responsive" data-pattern="priority-columns">
                            <!-- @if(session('success'))
                                   <script>alert('{{session('success')}}')</script>
                                @endif -->

                            <table id="tech-companies-1" class="table table-striped" border="2">
                                <thead>
                                    <tr>
                                        <th data-priority="1">ID</th>
                                        <th data-priority="1">Cơ Hội Sai</th>
                                        <th data-priority="1">Thời Gian Trả Lời</th>
                                        <th></th>
                                    </tr>`
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($ch as $cauHinh)
                                        <td>{{$cauHinh->id}}</td>
                                        <td>{{$cauHinh->co_hoi_sai}}</td>
                                        <td>{{$cauHinh->thoi_gian_tra_loi}}</td>
                                        <td>
                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal-sua">Sửa</button>
                                        </td>
                                    </tr>
                                </tbody>
                                <form action="{{route('cauhinh-app.cap-nhat',['id'=>$cauHinh->id])}}" method="POST" id="formCapNhat">
                                    @csrf
                                    @method('PUT')
                                    <div id="con-close-modal-sua" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Cấu hình ứng dụng</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputEmail3" class="col-3 col-form-label">Số cơ hội sai</label>
                                                                            <div class="col-9">
                                                                                <input class="form-control" id="example-textarea" name="co_hoi" type="number" placeholder="Nhập số cơ hội..." value="{{$cauHinh->co_hoi_sai}}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputEmail3" class="col-3 col-form-label">Thời gian trả lời</label>
                                                                            <div class="col-9">
                                                                                <input class="form-control" id="example-textarea" name="thoi_gian_tra_loi" placeholder="Nhập số giây" type="number" value="{{$cauHinh->thoi_gian_tra_loi}}">
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

@endsection
@section('footer')
@parent
@endsection