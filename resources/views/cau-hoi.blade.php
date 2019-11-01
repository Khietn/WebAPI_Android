@extends('layouts.Master')

@section('title','Quản Lý Câu Hỏi')

@section('head')
    @parent
@endsection

@section('title-content','Quản Lý Câu Hỏi')


@if (session('success'))
    <script>alert('{{session('success')}}')</script>
@endif
@section('main-content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">  
                            <div class="responsive-table-plugin">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                    <button class="btn btn-success waves-effect waves-light" type="button" id="btnThem" border="2" style="margin-bottom:20px">Thêm</button>                  
                                        <table id="tech-companies-1" class="table table-striped">
                                            <thead>
                                            <tr class="col-md-12">
                                                <th>ID</th>
                                                <th data-priority="6">Nội dung</th>
                                                <th data-priority="3">Lĩnh vực</th>
                                                <th data-priority="1">Phương án A</th>
                                                <th data-priority="3">Phương án B</th>
                                                <th data-priority="3">Phương án C</th>
                                                <th data-priority="6">Phương án D</th>
                                                <th data-priority="6">Đáp án</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- <tr>
                                                <th>1 <span class="co-name"></span></th>
                                                <td><textarea cols="40" colums='4' readonly>1 con chim + 4 con chim + 8 con chim bị bắt thì con mấy con chim trên cành cây? Biết tổng số con chim trên cành cây bằng 15</textarea></td>
                                                <td>Đố vui</td>
                                                <td>15</td>
                                                <td>1</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>B</td>
                                                <td><button>a</button><button>b</button></td>
                                            </tr> -->
                                            @foreach($dsCauHoi as $ds)
                                            <tr>
                                                <th>{{$ds->id}} <span class="co-name"></span></th>
                                                <td><textarea cols="40" colums='4' readonly>{{$ds->noi_dung}} </textarea></td>
                                                <td>{{$ds->linh_vuc_id}}</td>
                                                <td>{{$ds->phuong_an_a}}</td>
                                                <td>{{$ds->phuong_an_b}}</td>
                                                <td>{{$ds->phuong_an_c}}</td>
                                                <td>{{$ds->phuong_an_d}}</td>
                                                <td>{{$ds->dap_an}}</td>
                                                <td><button class="btn btn-outline-secondary waves-effect waves-light">Cập nhật</button><button class="btn btn-outline-danger waves-effect waves-light">Xóa</button></td>
                                            </tr>
                                            @endforeach
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
                                        </table>
                                    </div> <!-- end .table-responsive -->
                                </div> <!-- end .table-rep-plugin-->
                            </div> <!-- end .responsive-table-plugin-->
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
               
                <!-- end form cap nhat -->
                <!-- form -->
                <div class="row" id="form-them-cau-hoi" style="display:none;">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="{{route("cau-hoi.them")}}" id="formThemCauHoi" method="POST"> <!-- Form start2-->
                        @csrf
                            <div class="col-md-7 float-left">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mb-3 header-title">Thêm mới câu hỏi</h4>
                                            <div class="form-group row mb-3">
                                                <label class="col-3 col-form-label">Nội dung</label>
                                                <div class="col-9">
                                                        <textarea class="form-control" id="example-textarea" rows="6" name="noi_dung"></textarea>
                                                    </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-3 col-form-label">Lĩnh vực</label>
                                                <div class="col-9">
                                                        <select class="form-control" id="example-select"  name="linh_vuc">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="inputPassword5" class="col-3 col-form-label">Đáp án</label>
                                                <div class="col-9">
                                                <select class="form-control" id="example-select" name="dap_an">
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                        </select>
                                                </div>
                                            </div>
                                    </div>  <!-- end card-body -->
                                </div>  <!-- end card -->
                            </div>  <!-- end col -->
                    
                            <div class="col-md-5 float-right">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="mb-3 header-title">Đáp án</h4>

                                        <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">Phương án A</label>
                                                <div class="col-9">
                                                    <input class="form-control" id="example-textarea" name="phuong_an_a">
                                                </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">Phương án B</label>
                                                <div class="col-9">
                                                    <input class="form-control" id="example-textarea" name="phuong_an_b">
                                                </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">Phương án C</label>
                                                <div class="col-9">
                                                    <input class="form-control" id="example-textarea" name="phuong_an_c">
                                                </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">Phương án D</label>
                                                <div class="col-9">
                                                    <input class="form-control" id="example-textarea" name="phuong_an_d">
                                                </div>
                                        </div>
                                        <div class="form-group mb-0 float-right">
                                             
                                             <button type="submit" class="btn btn-info waves-effect waves-light" form="formThemCauHoi">Thêm</button>
                                             <button type="button" class="btn btn-danger waves-effect waves-light" id="btnHuy">Hủy</button>
                      
                                     </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div style="clear:both"></div>
                        </form>    
                    </div>
                    </div>
                </div>
                <!-- end form -->
            </div> <!-- end container -->
        <!-- end wrapper -->
   
<script>

$(document).ready(function(){
    $("#btnThem").click(function(){
        $('#form-them-cau-hoi').show();
      
    });
    $("#btnHuy").click(function(){
        $('#form-them-cau-hoi').hide();
    });
    $("#btn")
});

</script>
<style>
    #form-them-cau-hoi{
        min-width: auto;
        position: fixed;
        top: 0%;
        left: 0%;
        right:0%;
        bottom:0%;
        z-index: 9999;
        min-height:auto;
        margin: auto;
        background-color: rgba(0,0,0, 0.5); 
        padding-top:150px;
    }
  
</style>
@endsection
@section('footer')
    @parent
@endsection