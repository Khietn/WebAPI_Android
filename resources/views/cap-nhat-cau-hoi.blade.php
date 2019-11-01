@extends(layouts.Master)

 <!-- form cap nhat -->
 <div class="row" id="form-them-cau-hoi formCapNhat" style="display:none;">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="{{route("cau-hoi.them")}}" id="formCapNhat" method="POST"> <!-- Form start2-->
                        @csrf
                        @method("PUT")
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