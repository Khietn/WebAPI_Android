@extends('layouts.Master')

@section('title','Cau hoi')

@section('head')
    @parent
@endsection

@section('main-content')

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Responsive Table</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Responsive Table</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="responsive-table-plugin">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
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
                <div class="row">
                    <div class="col-md-12">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mb-3 header-title">Horizontal form</h4>

                                <form class="form-horizontal">
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Nội dung</label>
                                        <div class="col-9">
                                                <textarea class="form-control" id="example-textarea" rows="5"></textarea>
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
                                                    <option></option>
                                                    <option>5</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3 justify-content-end">
                                        <div class="col-9">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkmeout">
                                                <label class="custom-control-label" for="checkmeout">Check me out !</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end row">
                                        <div class="col-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                                        </div>
                                    </div>
                                </form>

                            </div>  <!-- end card-body -->
                        </div>  <!-- end card -->
                    </div>  <!-- end col -->

                </div>
                    </div>
                </div>
                <!-- end form -->
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
<script>
$()
</script>
@endsection
@section('footer')
    @parent
@endsection