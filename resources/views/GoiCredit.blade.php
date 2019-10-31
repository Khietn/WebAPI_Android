@extends('Layouts.Master')
@section('title')
Quản Lý Gói Credit
@endsection
@section('main-content')
      

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        <!-- table start -->
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
                                        <th data-priority="3"></th>
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
                    <button class="btn btn-dark waves-effect waves-light"><a href="#">Sửa</a>
                     </button> 
                     
                    <button class="btn btn-dark waves-effect waves-light"><a href="{{route("goi-credit.xoa",['id'=>$value->id])}}">Xóa</a></button>
					               
                     </form>
                    </td>                                                       
                   </tr> 

             <?php } ?>                            
            <?php endforeach ?>                       
                            
                                          <!-- them bang o day -->                                                                                                                                                                                                                     
                                    </tbody>
                                    <button class="btn btn-dark waves-effect waves-light"><a href="{{route('goi-credit.them-moi')}}">Thêm</a></button>
                                        </table>
                                    </div> <!-- end .table-responsive -->

                                </div> <!-- end .table-rep-plugin-->
                            </div> <!-- end .responsive-table-plugin-->
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
        <!-- end table -->
@endsection

