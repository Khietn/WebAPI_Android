
@extends('layouts.Master')
@section('title')
Quản Lý Người Chơi
@endsection

@section('main-content')
       
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        <!-- table start -->
       
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="responsive-table-plugin">
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                @if(session('success'))
                                   <script>alert('{{session('success')}}')</script>
                                @endif
                                <table id="tech-companies-1" class="table table-striped" border="2">
                                    <thead>
                                    <tr>
                                        <th data-priority="1">ID</th>
                                        <th data-priority="1">Tên Đăng nhập</th>
                                        <th data-priority="1">Mật Khẩu</th>
                                        <th data-priority="1">Email</th>
                                        <th data-priority="1">Hình Đại Diện</th>
                                        <th data-priority="1">Điểm Cao Nhất</th>
                                        <th data-priority="1"> Credit</th>
                                        <th data-priority="3">Chức Năng</th>
                                    </tr>
                                    </thead>
                                    <tbody>     
            <?php foreach ($NguoiChoi as $value): ?>
               <?php if($value->xoa==0)
               { ?>
                   <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->ten_dang_nhap}}</td>
                    <td>{{$value->mat_khau}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->hinh_dai_dien}}</td>
                    <td>{{$value->diem_cao_nhat}}</td>
                    <td>{{$value->credit}}</td>
                    <td>
                    <button class="btn btn-dark waves-effect waves-light"><a href="#">Sửa</a>
                     </button> 
                     
                    <button class="btn btn-dark waves-effect waves-light"><a href="{{route("nguoi-choi.xoa",['id'=>$value->id])}}">Xóa</a></button>
					               
                     </form>
                    </td>                                                       
                   </tr> 

             <?php } ?>                            
            <?php endforeach ?>                                   
                                           
                            
                                          <!-- them bang o day -->                                                                                                                                                                                                                     
                            </tbody>
                            <!-- tim kiem -->
                            <ul class="list-unstyled topnav-menu float-right mb-0">
                                    <li class="d-none d-sm-block">
                                     <form class="app-search">
                                    <div class="app-search-box">
                                    <div class="input-group">
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
                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"  style="margin-bottom:20px" data-target="#con-close-modal">Thêm</button>
                                       </table>
                           </div> <!-- end .table-responsive -->

                                </div> <!-- end .table-rep-plugin-->
                            </div> <!-- end .responsive-table-plugin-->
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
            </div>
        <!-- end table -->
         <!-- modalthem goi credit -->
    
         <form action="{{route('nguoi-choi.tm-them-moi')}}" method="POST">
                                     @csrf
                                     @if($errors->any())
        <div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">
                                <button class="close" aria-label="Close" type="button" data-dismiss="alert">
                                    <span aria-hidden="true">×</span>
                                </button>
                                @foreach($errors->all() as $error)
                                <li> {{$error}}</li>
                                @endforeach
                            </div>
        @endif     
                             <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Thêm mới gói Credit</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">                                   
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label form="ten_dang_nhap">Tên Đăng Nhập</label>
                                                    <input type="text" id="ten_dang_nhap" name="ten_dang_nhap"class="form-control" placeholder="Tên Đăng Nhập">
                                                    <label form="mat_khau">Mật Khẩu</label>
                                                    <input type="text" id="mat_khau" name="mat_khau"class="form-control" placeholder="Mật Khẩu"> 
                                                    <label form="email">email</label>
                                                    <input type="text" id="email" name="email"class="form-control" placeholder="email"> 
                                                    <label form="hinh_dai_dien">Hình đại diện</label>
                                                    <input type="text" id="hinh_dai_dien" name="hinh_dai_dien"class="form-control" placeholder="Hình đại diện"> 
                                                    <label form="diem_cao_nhat">Điểm cao nhất</label>
                                                    <input type="number" id="diem_cao_nhat" name="diem_cao_nhat"class="form-control" placeholder="Điểm cao nhất"> 
                                                    <label form="credit">Credit</label>
                                                    <input type="number" id="credit" name="credit"class="form-control" placeholder="Credit">  
                                                    </div>
                                                </div>
                                            </div>                                                                                     
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Lưu</button>
                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Hủy</button>                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /END-modal -->
@endsection
@section('footer')
@parent
@endsection