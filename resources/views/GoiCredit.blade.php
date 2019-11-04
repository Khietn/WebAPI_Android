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
                                @if(session('success'))
                                   <script>alert('{{session('success')}}')</script>
                                @endif
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
                    <button class="btn btn-dark waves-effect waves-light"><a href="{{route('goi-credit.cap-nhat',['id'=>$value->id])}}">Sửa</a>
                     </button> 
                     
                    <button class="btn btn-dark waves-effect waves-light"><a href="{{route("goi-credit.xoa",['id'=>$value->id])}}">Xóa</a></button>
					               
                     </form>
                    </td>                                                       
                   </tr> 

             <?php } ?>                            
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
                                                    <input type="text" id="ten_goi" name="ten_goi"class="form-control" placeholder="Tên Gói Credit">
                                                    <label form="credit">Credit</label>
                                                    <input type="text" id="credit" name="credit"class="form-control" placeholder="Credit"> 
                                                    <label form="so-tien">Số Tiền</label>
                                                    <input type="text" id="so_tien" name="so_tien"class="form-control" placeholder="Số Tiền"> 
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

