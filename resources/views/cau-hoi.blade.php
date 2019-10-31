@extends('layouts.Master')

@section('title','Cau hoi')

@section('head')
    @parent
@endsection

@section('title-content','Câu hỏi')


@section('main-content')
            <div class="container-fluid">


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">  
                            <div class="responsive-table-plugin">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                    <button class="btn btn-success waves-effect waves-light" type="button" id="btnThem">Thêm</button>                  
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
                                            <tr>
                                                <th>1 <span class="co-name"></span></th>
                                                <td><textarea cols="40" colums='4' readonly>1 con chim + 4 con chim + 8 con chim bị bắt thì con mấy con chim trên cành cây? Biết tổng số con chim trên cành cây bằng 15</textarea></td>
                                                <td>Đố vui</td>
                                                <td>15</td>
                                                <td>1</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>B</td>
                                                <td><button>a</button><button>b</button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end .table-responsive -->
                                </div> <!-- end .table-rep-plugin-->
                            </div> <!-- end .responsive-table-plugin-->
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <!-- form -->
                <div class="row" id="form-them-cau-hoi">
                    <div class="col-md-12">
                        <form class="form-horizontal"> <!-- Form start2-->
                            <div class="col-md-7 float-left">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mb-3 header-title">Thêm mới câu hỏi</h4>

                                        
                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">Nội dung</label>
                                                <div class="col-9">
                                                        <textarea class="form-control" id="example-textarea" rows="4"></textarea>
                                                    </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="inputPassword3" class="col-3 col-form-label">Lĩnh vực</label>
                                                <div class="col-9">
                                                        <select class="form-control" id="example-select">
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
                                                <select class="form-control" id="example-select">
                                                            <option>A</option>
                                                            <option>B</option>
                                                            <option>C</option>
                                                            <option>D</option>
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
                                                    <input class="form-control" id="example-textarea" name="phuong_an_a">
                                                </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">Phương án C</label>
                                                <div class="col-9">
                                                    <input class="form-control" id="example-textarea" name="phuong_an_a">
                                                </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">Phương án D</label>
                                                <div class="col-9">
                                                    <input class="form-control" id="example-textarea" name="phuong_an_a">
                                                </div>
                                        </div>
                                        <div class="form-group mb-0 float-right">
                                             
                                             <button type="submit" class="btn btn-info waves-effect waves-light">Thêm</button>
                                             <button type="button" class="btn btn-danger waves-effect waves-light">Hủy</button>
                      
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
    $('#btnThem').click(function(){
        $('#form-them-cau-hoi').show();
    });
    $('#btnThem').click(function(){
        $('#form-them-cau-hoi').hide();
    })
});
</script>
@endsection
@section('footer')
    @parent
@endsection