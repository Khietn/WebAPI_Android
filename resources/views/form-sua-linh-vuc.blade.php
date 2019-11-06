@extends('layouts.Master')

@section('main-content')
<div class="container-fluid">
<div class="row" >
   <div class="col-lg-6">
   	<div class="card">
   		<div class="card-body">
	  <h4 class="mb-3 header-title">Sửa Lĩnh Vực</h4>
   <form action="{{ $linhVuc->id }}" method="POST">
   @method('PATCH')
   	@csrf
       <div class="form-group mb-3">
          <label for="ten_linh_vuc">Tên Lĩnh Vực</label>
          <input type="text" id="ten_linh_vuc" name="ten_linh_vuc" class="form-control" placeholder="Tên Lĩnh Vực" value="{{$linhVuc->ten}}" disabled>
          <label for="ten_linh_vuc">Tên Lĩnh Vực Mới</label>
          <input type="text" id="ten_linh_vuc_moi" name="ten_linh_vuc_moi" class="form-control" placeholder="Tên Lĩnh Vực Mới">          
           </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light" style="margin-bottom:20px">Lưu</button>
            <button type="submit" class="btn btn-danger waves-effect waves-light" style="margin-bottom:20px">Hủy</button>
            <!-- <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Responsive Modal</button>
            
            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Sửa Lĩnh Vực</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">                                   
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-3" class="control-label">Tên Lĩnh Vực</label>
                                                        <input type="text" class="form-control" id="field-3" placeholder="Tên Lĩnh Vực">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="field-3" class="control-label">Tên Lĩnh Vực Mới</label>
                                                        <input type="text" class="form-control" id="field-3" placeholder="Tên Lĩnh Vực Mới">
                                                    </div>
                                                </div>
                                            </div>                                                                                     
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info waves-effect waves-light">Lưu</button>
                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Hủy</button>                                         
                                        </div>
                                    </div>
                                </div>
                            </div>/.modal -->
               </form>
      </div>
</div>
</div>
@endsection 