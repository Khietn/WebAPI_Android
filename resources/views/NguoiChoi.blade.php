
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
                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal-sua{{$value->id}}">Sửa</button>                                        
                    <a href="{{route('nguoi-choi.xoa',['id'=>$value->id])}}" onclick="return confirm('Bạn có muốn xóa ?')"  class="btn btn-danger waves-effect waves-light">Xóa</a></td>              
                     </form>
                    </td>                                                       
                   </tr> 

             <?php } ?>  
             <!-- modal sửa -->                  
             <form action="{{route('nguoi-choi.cap-nhat',['id'=>$value->id])}}" method="POST">
                                 @method('PATCH')
                                 @csrf
                                 <div id="con-close-modal-sua{{$value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" style="max-width:1024px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Sửa Gói Credit</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-6">                              
                                            <div class="row">
                                            <div class="col-md-12">
                                            <!-- thông tin người chơi cũ -->
                                                <div class="col-md-6 float-left">
                                                <div class="form-group">
                                                    <label form="ten_dang_nhap">Tên Đăng Nhập</label>
                                                    <input type="text" id="ten_dang_nhap" name="ten_dang_nhap"class="form-control" required="" value="{{$value->ten_dang_nhap}}" placeholder="Tên Đăng Nhập" disabled>
                                                    <label form="mat_khau">Mật Khẩu</label>
                                                    <input type="password" id="mat_khau" name="mat_khau"class="form-control" required="" value="{{$value->mat_khau}}" placeholder="Mật Khẩu" disabled> 
                                                    <label form="email">Email</label>
                                                    <input type="email" id="email" name="email"class="form-control" required="" value="{{$value->email}}" placeholder="Email"  disabled> 
                                                   <!--chọn file ảnh-->
                                                   <label form="hinh_dai_dien">Ảnh Đại Diện</label>
                                                    <div class="custom-file" >                                  
                                                          <input type="file"  id="hinh_dai_dien" name="hinh_dai_dien"  required="" disabled>
                                                    </div>
                                                    <label form="diem_cao_nhat">Điểm cao nhất</label>
                                                    <input type="number" id="diem_cao_nhat" name="diem_cao_nhat"class="form-control" required="" value="{{$value->diem_cao_nhat}}" placeholder="Điểm cao nhất"  disabled> 
                                                    <label form="credit">Credit</label>
                                                    <input type="number" id="credit" name="credit"class="form-control" required="" value="{{$value->credit}}" placeholder="Credit"  disabled>                  
                                                    </div>
                                                </div>
                                                <!-- thông tin người chơi mới -->
                                                <div class="col-md-6 float-right">
                                                    <div class="form-group">
                                                    <label form="ten_dang_nhap_moi">Tên Đăng Nhập</label>
                                                    <input type="text" id="ten_dang_nhap_moi" name="ten_dang_nhap_moi" class="form-control" required=""  placeholder="Tên Đăng Nhập Mới">
                                                    <label form="mat_khau_moi">Mật Khẩu</label>
                                                    <input type="password" id="mat_khau_moi" name="mat_khau_moi"class="form-control" required="" placeholder="Mật Khẩu Mới"> 
                                                    <label form="email_moi">Email</label>
                                                    <input type="email" id="email_moi" name="email_moi"class="form-control" required="" placeholder="Email Mới"> 
                                                   <!--chọn file ảnh-->
                                                   <label form="hinh_dai_dien_moi">Ảnh Đại Diện</label>
                                                    <div class="custom-file" >                                  
                                                          <input type="file"  id="hinh_dai_dien_moi" name="hinh_dai_dien_moi"  required="" >
                                                    </div>
                                                    <label form="diem_cao_nhat_moi">Điểm cao nhất</label>
                                                    <input type="number" id="diem_cao_nhat_moi" name="diem_cao_nhat_moi" class="form-control" required="" placeholder="Điểm Cao Mới Nhất"> 
                                                    <label form="credit_moi">Credit</label>
                                                    <input type="number" id="credit_moi" name="credit_moi" class="form-control" required=""  placeholder="Credit Mới">                                                 
                                                    </div>
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
                            </form>
                            <!-- kết thúc modal sửa -->                                              
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
                                                    <input type="text" id="ten_dang_nhap" name="ten_dang_nhap"class="form-control" required="" placeholder="Tên Đăng Nhập">
                                                    <label form="mat_khau">Mật Khẩu</label>
                                                    <input type="password" id="mat_khau" name="mat_khau"class="form-control" required="" placeholder="Mật Khẩu"> 
                                                    <label form="email">Email</label>
                                                    <input type="email" id="email" name="email"class="form-control" required="" placeholder="Email"> 
                                                   <!--chọn file ảnh-->
                                                   <label form="hinh_dai_dien">Ảnh Đại Diện</label>
                                                    <div class="custom-file">                                  
                                                          <input type="file"  id="hinh_dai_dien" name="hinh_dai_dien" required="" >
                                                    </div>
                                                    <label form="diem_cao_nhat">Điểm cao nhất</label>
                                                    <input type="number" id="diem_cao_nhat" name="diem_cao_nhat"class="form-control" required="" placeholder="Điểm cao nhất"> 
                                                    <label form="credit">Credit</label>
                                                    <input type="number" id="credit" name="credit"class="form-control" required="" placeholder="Credit">
                                                  
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