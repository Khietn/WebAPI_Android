@extends('Layouts.Master')
@section('title')
Quản Lý Gói Credit
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
                             
                                <table id="tech-companies-1" class="table table-striped" border="2">
                                    <thead>
                                    <tr>
                                        <th data-priority="1">ID</th>
                                        <th data-priority="1">Tên Gói</th>
                                        <th data-priority="1">Credit</th>
                                        <th data-priority="1">Số Tiền</th>
                                        <th data-priority="3">Chức Năng</th>
                                    </tr>
                                    </thead>
                                    <tbody>                                      
                                    <tbody>     
            <?php foreach ($GoiCredit as $value): ?>
               <?php if($value->xoa==0)
               { ?>
                   <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->ten_goi}}</td>
                    <td>{{$value->credit}}</td>
                    <td>{{$value->so_tien}}</td>
                   <td>
                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal-sua{{$value->id}}">Sửa</button> 
                     <a href="{{route('goi-credit.xoa',['id'=>$value->id])}}" onclick="return confirm('Bạn có muốn xóa ?')"  class="btn btn-danger waves-effect waves-light">Xóa</a>            
                     </form>
                    </td>                                                       
                   </tr> 
             <?php } ?> 
              <!-- modal sửa -->                  
              <form action="{{route('goi-credit.cap-nhat-update',['id'=>$value->id])}}" method="POST">
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
                                            <!-- gói credit cũ -->
                                                <div class="col-md-6 float-left">
                                                    <div class="form-group">
                                                        <label for="ten_goi" class="control-label">Tên Gói Credit</label>
                                                        <input type="text" class="form-control" id="ten_goi" name="ten_goi" placeholder="Tên Gói Credit" value="{{$value->ten_goi}}" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ten_linh_vuc" class="control-label">Credit</label>
                                                        <input type="text" class="form-control" id="credit" required="" name="credit" placeholder="Credit" value="{{$value->credit}}" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ten_linh_vuc" class="control-label">Số Tiền</label>
                                                        <input type="text" class="form-control" id="so_tien" required="" name="so_tien" placeholder="Số Tiền" value="{{$value->so_tien}}" disabled>
                                                    </div>
                                                </div>
                                                <!-- gói credit mới -->
                                                <div class="col-md-6 float-right">
                                                    <div class="form-group">
                                                        <label for="ten_goi" class="control-label">Tên Gói Credit Mới</label>
                                                        <input type="text" class="form-control" id="ten_goi_moi" name="ten_goi_moi" required="" placeholder="Nhập Tên Gói Credit Mới"  >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ten_linh_vuc" class="control-label">Credit Mới</label>
                                                        <input type="number" class="form-control" id="credit_moi" required="" name="credit_moi" placeholder="Nhập Credit Mới">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ten_linh_vuc" class="control-label">Số Tiền Mới</label>
                                                        <input type="number" class="form-control" id="so_tien_moi" required="" name="so_tien_moi" placeholder="Nhập Số Tiền">
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
                                      <!-- btn tim kiem -->
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
         <form action="{{route('goi-credit.tm-them-moi')}}" method="POST">
                                 	@csrf
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
                                                    <label form="ten_goi">Tên Gói Credit</label>
                                                    <input type="text" id="ten_goi" name="ten_goi" required="" class="form-control"  placeholder="Tên Gói Credit">
                                                    <label form="credit">Credit</label>
                                                    <input type="number" id="credit" name="credit" required="" class="form-control"  placeholder="Credit"> 
                                                    <label form="so-tien">Số Tiền</label>
                                                    <input type="number" id="so_tien" required="" name="so_tien" class="form-control"  placeholder="Số Tiền"> 
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

