
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
                             <button class="btn btn-dark waves-effect waves-light" style="margin-bottom:20px"><a href="{{route('nguoi-choi.them-moi')}}">Thêm</a></button>
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