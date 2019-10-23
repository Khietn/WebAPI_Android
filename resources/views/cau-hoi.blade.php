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

                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

@endsection


@section('footer')
    @parent
@endsection